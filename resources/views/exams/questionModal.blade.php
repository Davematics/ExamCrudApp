 <!-- basic modal -->
 <div class="modal fade" id="addQuestionModal{{ $exam->id }}" tabindex="-1" role="dialog"
     aria-labelledby="addQuestionModal{{ $exam->id }}" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="myModalLabel">Add Question</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 {{-- <h3>Question</h3> --}}
                 <form action="{{ route('questions.store') }}" method="POST" id="addQuestionForm{{ $exam->id }}">
                     @csrf
                     <input type="hidden" name="exam_id" value="{{ $exam->id }}" id="exam_id">
                     <select name="category" id="category" class="form-control">
                         <option value="">Select Category</option>
                         <option value="Technical">Technical</option>
                         <option value="Aptitude">Aptitude</option>
                         <option value="logical">Logical</option>
                     </select> <br>
                     Question: <input type="text" class="form-control" name="question" id="question"> <br>

                     Option A: <input type="text" class="form-control" name="option_a" id="option_a"> <br>
                     Option B: <input type="text" class="form-control" name="option_b" id="option_b"> <br>

                     Option C: <input type="text" class="form-control" name="option_c" id="option_c"> <br>

                     Option D: <input type="text" class="form-control" name="option_d" id="option_d"> <br>


             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary"
                    >Save changes</button>
             </div>
             </form>
         </div>
     </div>
 </div>
