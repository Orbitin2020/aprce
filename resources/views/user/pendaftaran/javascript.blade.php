<script>
    $(document).ready(function(){
  
        // Create Modal
        $('#addRegister').click(function () {
            $('#frm_register').trigger("reset");
            $('#modalRegister').modal('show');
        });

        // Store Data
        $('#saveBtn').click(function(){
            console.log('s')
            // var url;
            // var type;
            // url = "{{ route('daftar.store') }}"
            // type = "POST"
            
            // $.ajax({
            //     headers : {
            //         'X-CSRF-TOKEN' : "{{csrf_token()}}"
            //     },
            //     type : type,
            //     url : url,
            //     data : $('#frm_register').serialize(),
            //     success : function(response){
            //         alert('sukses')
            //         $('#frm_register').trigger("reset");
            //         $('#modalRegister').modal('hide');
            //     }
            // })
        });
        // End Store Data

    })
</script>