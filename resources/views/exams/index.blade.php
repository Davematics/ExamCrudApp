@extends('exams.layout')

@section('content')
    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="alert alert-success" role="alert" id="successMsg" style="display: none">
                    process was successful!
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div class="d-flex justify-content-end mb-5"><a href="#" class="btn btn-lg btn-primary text-white"
                        data-toggle="modal" data-target="#basicModal">Add Exam</a></div>
                <div class="d-flex justify-center-end mb-5">
                    <h3>All Exams</h3>
                </div>
                <table id="example" class="table table-hover responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Subject</th>
                            <th>Instructions</th>
                            <th>Number of Questions</th>
                            <th>Add Questions</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($exams as $exam)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                    </a>
                                </td>
                                <td>{{ $exam->subject }}</td>
                                <td>{{ $exam->instructions }}</td>
                                <td>{{ $exam->questions->count() }}</td>
                                <td>
                                    <a class="btn btn-primary text-white" data-toggle="modal"
                                        data-target="#addQuestionModal{{ $exam->id }}">Add Question</a>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded" data-toggle="tooltip"
                                                data-placement="top" title="Actions"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item" href="/exam/{{ $exam->id }}"><i
                                                    class="bx  mr-2"></i> View Questions</a>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @include('exams.questionModal')
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @include('exams.addExamModal')
@endsection
