<script>
    $(document).ready(function() {
        var token = $('input[name="_token"]').val();
        var table = $('.TableUserRegistration').DataTable({
            lengthMenu: [[10, 25, 50, 100, 500, 1000], [10, 25, 50, 100, 500, 1000]],
            pageLength: 10,
            ajax: "{{ url('admin/registrasi/getData') }}",
            dataType: 'jsonp',
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', sClass: 'text-center',orderable: false, searchable: false},
                {data: 'nama', name: 'nama', sClass: 'text-center'},
                {data: 'email', name: 'email',sClass:'text-center'},
                {data: 'nohp', name: 'nohp', sClass:'text-center'},
                // {data: 'Actions', name: 'Actions', orderable:false, serachable:false, sClass:'text-center'},
            ],
        });

        $('#tiket_id').on('change', function() {
            $('.saveBtn').removeAttr('disabled', true);
        });

        $('#editTiket_id').on('change', function() {
            $('.updateBtn').removeAttr('disabled', true);
        });

        $('body').on('click', '#editRegistrasi', function() {
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('admin/registrasi/getEdit/${id}') }}`,
                type: 'GET',
                dataType: 'JSON',
                success: function(data) {
                    console.log(data);
                    $('#modalEditRegistration').modal('show');

                    $('#editNama').val(data.nama);
                    $('#editEmail').val(data.email);
                    $('#editNohp').val(data.nohp);
                    $('#editQuantity').val(data.quantity);
                }, 
                error: function(err) {
                    console.log(err);
                    alert('Nothing Data...');
                }
            })
        });

        $('body').on('click', '#updateBtn', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            
            $.ajax({
                url: `{{ url('admin/registrasi/update/${id}') }}`,
                type: 'PUT',
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': token
                },
                success: function(data) {
                    console.log(data);
                    Swal.fire(
                        'Successfully',
                        data.message,
                        'success'
                    );
                    table.ajax.reload();
                },
                error: function(err) {
                    console.log(err);
                    Swal.fire(
                        'Failed',
                        'Gagal melakukan update data',
                        'error'
                    );
                }
            })
        });

        $('#saveBtn').on('click', function(e) {
            e.preventDefault();
            let nama = $('#nama').val();
            let email = $('#email').val();
            let nohp = $('#nohp').val();
            let quantity = $('#quantity').val();
            let tiket_id = $('#tiket_id').val(); 

            if(!nama) {
                Swal.fire(
                    'Form Nama Kosong!',
                    'Mohon semua isi form dengan benar..',
                    'info'
                );
            } else if(!email) {
                Swal.fire(
                    'Form Email Kosong!',
                    'Mohon semua isi form dengan benar..',
                    'info'
                );
            } else if(!nohp) {
                Swal.fire(
                    'Form NoHp Kosong!',
                    'Mohon semua isi form dengan benar..',
                    'info'
                );
            } else if(!quantity) {
                Swal.fire(
                    'Form Quantity Kosong!',
                    'Mohon semua isi form dengan benar..',
                    'info'
                );
            } else if(!tiket_id) {
                Swal.fire(
                    'Form Tiket Kosong!',
                    'Mohon semua isi form dengan benar..',
                    'info'
                );
            } else {
                $.ajax({
                    url: "{{ url('admin/registrasi/add') }}",
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    success: function(data) {
                        console.log(data);
                        Swal.fire(
                            'Successfully...',
                            data.message,
                            'success',
                        );
                        table.ajax.reload();
                        $('#frm_registrasiAdd').trigger('reset');
                    },
                    error: function(err) {
                        console.log(err);
                        Swal.fire(
                            'Failed...',
                            'Kesalahan dalam penambahan data...',
                            'error'
                        );
                        $('#frm_registrasiAdd').trigger('reset');
                    }
                })
            }
            
        })
    })
</script>