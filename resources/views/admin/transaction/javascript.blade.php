<script>
    $(document).ready(function() {
        let token = $('input[name="_token"]').val();
        var table = $('.tableTransaction').DataTable({
            lengthMenu: [[10, 25, 50, 100, 500, 1000], [10, 25, 50, 100, 500, 1000]],
            pageLength: 10,
            ajax: "{{ url('admin/transaction/getData') }}",
            dataType: 'jsonp',
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'nama', name: 'nama', sClass: 'text-center'},
                {data: 'order_id', name: 'order_id',sClass:'text-center'},
                {data: 'gross_amount', name: 'gross_amount', sClass:'text-center'},
                {data: 'transaction_time', name: 'transaction_time', sClass:'text-center'},
                {data: 'quantity', name: 'quantity', sClass:'text-center'},
                {data: 'Actions', name: 'Actions', orderable:false, serachable:false, sClass:'text-center'},
            ],
        });

        $('body').on('click', '#detailTransaction', function(e) {
            e.preventDefault();
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('admin/transaction/getDetail/${id}') }}`,
                type: 'GET',
                dataType: 'JSON',
                success: function(data) {
                    console.log(data);
                    $('#modalDetailTransaction').modal('show');

                    $('#nama').text(data.nama);
                    $('#email').text(data.email);
                    $('#noHp').text(data.nohp);
                    $('#qty').text(data.quantity);
                    $('#order_id').text(data.transaction.order_id);
                    $('#gross_amount').text(data.transaction.gross_amount);
                    $('#payment_type').text(data.transaction.payment_type);
                    $('#payment_code').text(data.transaction.va_number);
                    $('#transaction_time').text(data.transaction.transaction_time);
                    $('#id_tiket').text(data.get_tiket.id);
                    $('#nm_tiket').text(data.get_tiket.nama);
                    $('#kategori_tiket').text(data.get_tiket.kategori);
                    $('#participant').text(data.get_tiket.participant);
                },
                error: function(err) {
                    console.log(err);
                }
            })
        });

        $('body').on('click', '#deleteTransaction', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Anda ingin menghapusnya?',
                text: "Anda tidak akan dapat mengembalikan data ini jika dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `{{ url('admin/transaction/delete/${id}') }}`,
                        type: 'DELETE',
                        dataType: 'JSON',
                        success: function(data) {
                            console.log(data);
                            Swal.fire(
                                'Success!',
                                data.message,
                                'success'
                            );
                            table.ajax.reload();
                        },
                        error: function(err) {
                            console.log(err);
                            Swal.fire(
                                'Failed!',
                                'Gagal melakukan delete data',
                                'error'
                            );
                        }
                    })
                }
            })
        });
    })
</script>