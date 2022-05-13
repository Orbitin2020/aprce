<script>
    $(document).ready(function() {
        // var token = $('input[name="_token"]').val();
        var table = $('.TableUserRegistration').DataTable({
            lengthMenu: [[10, 25, 50, 100, 500, 1000], [10, 25, 50, 100, 500, 1000]],
            pageLength: 10,
            ajax: "{{ url('admin/registrasi/getData') }}",
            dataType: 'jsonp',
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'nama', name: 'nama', sClass: 'text-center'},
                {data: 'email', name: 'email',sClass:'text-center'},
                {data: 'nohp', name: 'nohp', sClass:'text-center'},
                {data: 'Actions', name: 'Actions', orderable:false, serachable:false, sClass:'text-center'},
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

        // $('body').on('click', '#updateBtn', function(e) {
        //     e.preventDefault();
        //     let id = $(this).data('id');
            
        //     $.ajax({
        //         url: ``,

        //     })
        // });
    })
</script>