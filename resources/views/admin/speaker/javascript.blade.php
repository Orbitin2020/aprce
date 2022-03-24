<script>
    $(document).ready(function(){

        var idEdit = 0;

        $("#foto").fileinput({
            uploadUrl: "#",
            theme: 'fa',
            required: false,
            allowedFileExtensions:  ["jpg", "png", "jpeg", "JPG", "JPEG", "PNG"],
            showUpload: false,
            "fileActionSettings":{
                "showDrag":false,
                "showUpload":false,
                "showRemove":false
            }
        })

        var table = $('.tableSpeaker').DataTable({
            processing: true,
            serverSide: true,
            searching:  true,
            dom: 'lBfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: {
            url: "{{ route('admin.speaker.data') }}",
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'speakFoto', name: 'speakFoto'},
                {data: 'speakName', name: 'speakName'},
                {data: 'speakJob', name: 'speakJob'},
                {data: 'speakDesc', name: 'speakDesc'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        $('#addSpeaker').click(function () {
            idEdit = 0;
            $('#frm_speaker').trigger("reset");
            $('#modalSpeaker').modal('show');
        });

        $('#saveBtn').click(function(e){
            e.preventDefault();
            var formData = new FormData(document.getElementById("frm_speaker"));
            
            console.log(formData)
            var url;
            var type;
            
            if(idEdit === 0)
            {
                url = "{{ route('admin.speaker.store') }}"
                type = "POST"
            }else{
                formData.append('_method', 'PUT');
                url = '{{ route("admin.speaker.update", ":id") }}';
                url = url.replace(':id', idEdit );
                
                type = "POST"
            }
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : "{{csrf_token()}}"
                },
                data : formData,
                url: url,
                type: type,
                contentType:false,
                processData:false,
                success: function(response){
                    Swal.fire({
                        title : 'Berhasil !',
                        icon: 'success',
                        text  : 'Berhasil',
                        showConfirmButton : true
                    })
                    idEdit = 0;
                    $('#frm_speaker').trigger("reset");
                    $('#modalSpeaker').modal('hide');
                    table.draw()
                    // perform operation
                },
                error: function(json) {
                    alert('Error occurs!');
                }
            })
        })

        // EDIT DATA
        $('body').on('click','#edit',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("admin.speaker.edit",":id") }}'
            url = url.replace(':id',id)

            $.ajax({
                type : 'GET',
                url : url,
                success:function(res){
                    console.log(res.data)
                    idEdit = res.data.id;
                    $('#frm_speaker').trigger("reset");
                    $('#modalSpeaker').modal('show');
                    $('#nama').val(res.data.speakName);
                    $('#jabatan').val(res.data.speakJob);
                    $('#deskripsi').val(res.data.speakDesc);

                }
            })
        })
        // END EDIT

         // Delete
        $('body').on('click','#delete',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("admin.speaker.delete", ":id") }}';
            url = url.replace(':id', id );
            Swal.fire({
                title : 'Anda Yakin ?',
                text  : 'Data Yang Sudah Dihapus Tidak Akan Bisa Dikembalikan',
                icon  : 'warning',
                showConfirmButton : true,
                showCancelButton :true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Tidak, Batalkan!',
                allowOutsideClick: false,
            })
            .then((result)=>{
                if(result.value) {
                    $.ajax({
                        headers:{
                            'X-CSRF-TOKEN' : '{{csrf_token()}}'
                        },
                        type : 'DELETE',
                        url:url,
                        success:function(response){
                        
                            Swal.fire({
                                title: 'Berhasil!',
                                icon : 'success',
                                text : 'Data Berhasil Di Hapus',
                                showConfirmButton :true
                            })
                        
                            table.draw()
                        }
                    })
                }else{
                    Swal.close()
                }
            })
        })
        // End Delete

    })
</script>