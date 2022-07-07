<script>
    // Inisialisasi select2
    $('#speaker').select2({
        theme: 'bootstrap4',
    });

    // $('#tiket').select2({
    //     theme: 'bootstrap4',
    // });
    // End
    // Datepicker
    $("#tgl_mulai").flatpickr({ 
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });

    $("#tgl_akhir").flatpickr({ 
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
    // EndDatePicker

    // Upload Image
    function readURL(input) {
        if(input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.img-previews').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#foto').change(function() {
        readURL(this);
    });
    // End Upload Image

    // inisiasi summernote
     $('#description').summernote({
      placeholder: 'Deskripsi Schedule',
      toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
      ]
    })
    // end

    $(document).ready(function(){
        var idEdit = 0;
        
        var table = $('.tableSchedule').DataTable({
            processing: true,
            serverSide: true,
            searching:  true,
            dom: 'lBfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: {
            url: "{{ route('admin.schedule.data') }}",
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'agenda', name: 'agenda'},
                {data: 'tgl_mulai', name: 'tgl_mulai'},
                {data: 'tgl_akhir', name: 'tgl_akhir'},
                {data: 'description', name: 'description'},
                {data: 'speaker', name: 'speaker'},
                {data: 'tiket', name: 'tiket', sClass: 'text-center'},
                {data: 'action', name: 'action', sClass: 'text-center', orderable: false, searchable: false},
            ]
        });

        // Open Modal
        $('#addSchedule').click(function () {
                $('#frm_schedule').trigger("reset");
                $('#modalSchedule').modal('show');
                $('#description').summernote('reset')
                    $.ajax({
                    url:"{{ route('admin.schedule.speaker.data') }}",
                    type:'GET',
                    success:function(res){
                        console.log(res.data);
                        $("#speaker").empty();
                        $('#tiket').empty();
                        $.each(res.data,function(key, value)
                        {
                            $("#speaker").append('<option value=' + value.id + '>' + value.speakName + '</option>');
                        });
                        $.each(res.tiket, function(key, value) {
                            $("#tiket").append('<option value="'+value.id+'">'+value.nama+'</option>');
                        }) 
                    }
                })
            });
        // End Open

        $('body').on('click', '#detailSchedule', function() {
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('admin/schedule/detail/${id}') }}`,
                type: 'GET',
                dataType: 'JSON',
                success: function(data) {
                    console.log(data);
                    $('#modalDetailSchedule').modal('show');

                    $('#detailAgenda').html(data.agenda);
                    $('#detailTglMulai').html(data.tgl_mulai);
                    $('#detailTglAkhir').html(data.tgl_akhir);
                    $.each(data.speaker, function(key, value) {
                        $('#detailSpeaker').append('<ul><li><b>' + value.speakName + '</b></li></ul>');
                    });

                    $('#detailDescription').html(data.description);
                },
                error: function(err) {
                    alert('Nothing Data...');
                }
            })
        });

        // Store Data
        $('#saveBtn').click(function(e){
            e.preventDefault();
            let formData = new FormData($('#frm_schedule')[0])
            formData.append("description",$('#description').summernote('code'))
            
            console.log(formData)
            var url;
            var type;
            
            if(idEdit === 0)
            {
                url = "{{ route('admin.schedule.store') }}"
                type = "POST"
            }else{
                formData.append('_method', 'PUT');
                url = '{{ route("admin.schedule.update", ":id") }}';
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
                    $('#frm_schedule').trigger("reset");
                    $('#modalSchedule').modal('hide');
                    $('.img-previews').attr('src', '');
                    table.draw();
                    // perform operation
                },
                error: function(json) {
                    alert('Error occurs!');
                }
            })
        })
        // End Store Data

        // Close Detail Modal
        $('body').on('click', '.closeModal', function() {
            $('#detailSpeaker').trigger('reset');
        });
        // End Close Detail Modal

        // EDIT DATA
        $('body').on('click','#edit',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("admin.schedule.edit",":id") }}'
            url = url.replace(':id',id)

            $.ajax({
                type : 'GET',
                url : url,
                success:function(res){
                    console.log(res.data.tgl_akhir)
                    idEdit = res.data.id;
                    $('#frm_schedule').trigger("reset");
                    $('#modalSchedule').modal('show');
                    $('#agenda').val(res.data.agenda);
                    $('#tgl_mulai').val(res.data.tgl_mulai);
                    $('#tgl_akhir').val(res.data.tgl_akhir);
                    $('#description').summernote('code', res.data.description)
                    // $("#speaker").empty()
                    $("div.s_speaker select").val(res.speaker).change();
                    // $("#speaker").val(res.speaker).change();
                       
                    // $("#admin").append('<option value="'+res.data.id+'">Default=='+data.default.name+'</option>');
                    $.each(res.speaker,function(key, value){
                        $("#speaker").append('<option value=' + value.id + '>' + value.speakName + '</option>');
                    });
                    
                    $.each(res.tiket, function(key, value) {
                        $("#tiket").append('<option value="'+value.id+'">'+value.nama+'</option>');
                    })

                }
            })
        })
        // END EDIT

          // Delete
          $('body').on('click','#delete',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("admin.schedule.delete", ":id") }}';
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