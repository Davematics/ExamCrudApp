<script type="text/javascript">

    $('#addExamForm').on('submit',function(e){
        e.preventDefault();

        let subject = $('#subject').val();
        let instructions = $('#instructions').val();

        $.ajax({
          url: "/exam",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            subject:subject,
            instructions:instructions,
          },
          success:function(response){
            $('#successMsg').show();
            $('#basicModal').modal('hide');
            console.log(response);
          },
          error: function(response) {
            $('#instructionsErrorMsg').text(response.responseJSON.errors.instructions);
            $('#subjectErrorMsg').text(response.responseJSON.errors.subject);

          },
          });
        });
      </script>

