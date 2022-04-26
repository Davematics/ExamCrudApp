 <!-- basic modal -->
 <div class="modal fade" id="editExaModal{{$exam->id}}" tabindex="-1" role="dialog" aria-labelledby="editExaModal{{$exam->id}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Edit exam</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{-- <h3>Question</h3> --}}
          <form action="{{route('exam.update',$exam->id)}}" method="POST" id="editExamForm{{$exam->id}}">
              @csrf
              @method('PUT')
        Subject:  <input type="text" class="form-control" name="subject"  id="subject" value="{{ $exam->subject }}">
        <span class="text-danger" id="subjectErrorMsg"></span> <br><br>

        Instructions: <textarea name="instructions" id="instructions" class="form-control" >{{ $exam->instructions }}</textarea>
        <span class="text-danger" id="instructionsErrorMsg"></span>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>
