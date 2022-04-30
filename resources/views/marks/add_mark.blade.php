
<style>
   
    .container {
        padding: 50px;
        background-color: #d0d6d8;
    }

    input[type=text], input[type=number] {
        width: 50%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }
   
    div {
        padding: 10px 0;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }
    
    .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }

</style>

@extends('layouts/layout')

@section('content')

<div class="container col-md-12 col-md-4 col-md-offset-4">

  <form  method="POST" 
        action="{{ $studentsMark->id == null ? '/students/marks/save' : '/students/marks/update/' . $studentsMark->id}}"
        enctype="multipart/form-data" class="form-center" >

    {{ csrf_field() }}
  
    <center>  <h4><b> Students Mark Registeration Form</h4 ></b> </center>
    <hr>

    <div class="form-group">
      <label class="control-label" for="Name">Student Name:</label>
        <select style="width: 40%;height: 30px;" name="student_id" required>
            @foreach($students as $student)
                <option value="{{$student->id}}" {{ $studentsMark->student_id == $student->id ? 'selected' : '' }} >{{$student->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
      <label class="control-label" for="Name">Term:</label>
        <select style="width: 40%;height: 30px;" name="term" required>
            <option value="ONE" {{ $studentsMark->term == 'ONE' ? 'selected' : '' }} >ONE</option>
            <option value="TWO" {{ $studentsMark->term == 'TWO' ? 'selected' : '' }}>TWO</option>
            <option value="THREE" {{ $studentsMark->term == 'THREE' ? 'selected' : '' }}>THREE</option>
            <option value="FOUR" {{ $studentsMark->term == 'FOUR' ? 'selected' : '' }}>FOUR</option>
        </select>
    </div>

    <div class="form-group">
      <label class="control-label" for="Name">Maths Marks:</label>
       <input type="number" name="maths_marks" value="{{ $studentsMark->maths_marks ?? '' }}" required>
    </div>

    <div class="form-group">
      <label class="control-label" for="Name">Science Marks:</label>
       <input type="number" name="science_marks" value="{{ $studentsMark->science_marks ?? '' }}" required>
    </div>

    <div class="form-group">
      <label class="control-label" for="Name">History Marks:</label>
       <input type="number" name="history_marks" value="{{ $studentsMark->history_marks ?? '' }}" required>
    </div>

    <div>
        <a class="button w3-btn w3-black" href="{{url('students/marks')}}"  > Back </a>
        <input class="button w3-button w3-green" type="submit" value="Submit">
    </div>
    

  </form>
</div>



@endsection