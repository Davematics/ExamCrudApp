@extends('exams.layout')

@section('content')
    <div class="container">

        <div class="jumbotron ">
          <h3 class="text-center">{{$exam->subject}}</h3>
          <p class="text-center">{{$exam->instructions}}</p>
        </div>
   @foreach ($exam->questions as $item)


        <div class="card border-info mb-4 ">

          <div class="d-flex justify-content-between align-items-center card-header bg-info text-white" id="h1">
            <span>Question 1</span>

          </div>
          <div id="q1" class="collapse show" aria-labelledby="h1">
            <div class="card-body">
              <p>{{$item->question}}</p>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="q1_r1" value="r1">
                <label class="form-check-label" for="q1_r1">
                    {{$item->option_a}}
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="q1_r2" value="r2">
                <label class="form-check-label" for="q1_r2">
                    {{$item->option_b}}
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="q1_r3" value="r3">
                <label class="form-check-label" for="q1_r3">
                    {{$item->option_c}}
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="q1_r4" value="r4">
                <label class="form-check-label" for="q1_r4">
                    {{$item->option_d}}
                </label>
              </div>

            </div>

          </div>
        </div>

        @endforeach
        @endsection
