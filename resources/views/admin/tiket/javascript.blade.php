<script>
    // Inisialisasi select2
    $('#kategori').select2({
        theme: 'bootstrap4',
    });
    // End
    // Inisialisasi select2
    $('#participant').select2({
        theme: 'bootstrap4',
    });
    // End
    
    $(document).ready(function(){

        var idEdit = 0;

        var table = $('.tableTiket').DataTable({
            processing: true,
            serverSide: true,
            searching:  true,
            dom: 'lBfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: {
            url: "{{ route('admin.tiket.data') }}",
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'nama', name: 'nama'},
                {data: 'harga', name: 'harga'},
                {data: 'kategori', name: 'kategori'},
                {data: 'participant', name: 'participant'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        $('#addTiket').click(function () {
            idEdit = 0;
            $('#frm_tiket').trigger("reset");
            $('#modalTiket').modal('show');
        });

        $('#saveBtn').click(function(e){
            e.preventDefault();
            var formData = new FormData(document.getElementById("frm_tiket"));
            
            console.log(formData)
            var url;
            var type;
            
            if(idEdit === 0)
            {
                url = "{{ route('admin.tiket.store') }}"
                type = "POST"
            }else{
                formData.append('_method', 'PUT');
                url = '{{ route("admin.tiket.update", ":id") }}';
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
                    $('#frm_tiket').trigger("reset");
                    $('#modalTiket').modal('hide');
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
            var url = '{{ route("admin.tiket.edit",":id") }}'
            url = url.replace(':id',id)

            $.ajax({
                type : 'GET',
                url : url,
                success:function(res){
                    console.log(res.data)
                    idEdit = res.data.id;
                    $('#frm_tiket').trigger("reset");
                    $('#modalTiket').modal('show');
                    $('#nama').val(res.data.nama);
                    $('#harga').val(res.data.harga);
                    // $("#speaker").empty()
                    // $("#admin").append('<option value="'+res.data.id+'">Default=='+data.default.name+'</option>');
                    // $.each(res.data.kategori,function(key, value)
                    // {
                       
                    //     $("#speaker").append('<option value=' + value.id + '>' + value.kategori + '</option>');
                    // });
                }
            })
        })
        // END EDIT

         // Delete
        $('body').on('click','#delete',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("admin.tiket.delete", ":id") }}';
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