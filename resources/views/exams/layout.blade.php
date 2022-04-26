<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.0/css/boxicons.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>

</head>

<style>

</style>
<body>
    @yield('content')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
$("#example").DataTable({
  aaSorting: [],
  responsive: true,

  columnDefs: [
    {
      responsivePriority: 1,
      targets: 0
    },
    {
      responsivePriority: 2,
      targets: -1
    }
  ]
});

$(".dataTables_filter input")
  .attr("placeholder", "Search here...")
  .css({
    width: "300px",
    display: "inline-block"
  });

$('[data-toggle="tooltip"]').tooltip();
});



    </script>


{{--
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
    </script> --}}

@include('js.addExamJs')
@include('js.addQuestionJs')





</body>
</html>
