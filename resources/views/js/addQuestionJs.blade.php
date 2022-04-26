<script type="text/javascript">
    function addQuestion(formId){
        alert(formId)
        $('#'+formId).submit()

       $('#'+formId).on('submit',function(e){
           e.preventDefault();


           let question = $('#question').val();
           let category = $('#category').val();
           let exam_id = $('#exam_id').val();
           let option_a = $('#option_a').val();
           let option_b = $('#option_b').val();
           let option_c = $('#option_c').val();
           let option_d = $('#option_d').val();

           $.ajax({
             url: "/questions",
             type:"POST",
             data:{
               "_token": "{{ csrf_token() }}",
               question:question,
               category:category,
               exam_id:exam_id,
               option_a:option_a,
               option_b:option_b,
               option_c:option_c,
               option_d:option_d,
             },
             success:function(response){
               $('#successMsg').show();
               $('.modal').modal('hide');
               console.log(response);
             },
             error: function(response) {
               $('#questionErrorMsg').text(response.responseJSON.errors.question);
               $('#categoryMsg').text(response.responseJSON.errors.category);
               $('#option_aErrorMsg').text(response.responseJSON.errors.option_a);
               $('#option_bErrorMsg').text(response.responseJSON.errors.option_b);
               $('#option_cErrorMsg').text(response.responseJSON.errors.option_c);
               $('#option_dErrorMsg').text(response.responseJSON.errors.option_d);

             },
             });
           });
       }
         </script>

