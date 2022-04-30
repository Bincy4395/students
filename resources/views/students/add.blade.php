
<style>
    
    .container {
        padding: 50px;
        background-color: #d4e0e3;
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

<div class="container col-md-12 col-md-4" >

  <form method="POST" 
        action="{{ $student->id == null ? '/students/save' : '/students/update/' . $student->id}}"
        enctype="multipart/form-data" class="form-center">

    {{ csrf_field() }}
  
    <center>  <h4><b> Student Registeration Form </b></h4> </center>
    <hr>

    <label> Name </label> 
    <input type="text" name="name" placeholder= "Student Name" size="15" value="{{ $student->name ?? '' }}" required /> 

    <div>
        <label> Age </label> 
        <input type="number" name="age" placeholder="Age" size="15" value="{{ $student->age ?? '' }}" required /> 
    </div>

    <label> Gender : </label>
    <input type="radio" value="Male" name="gender"  {{ $student->gender =='Male' || $student->gender ==''? 'checked' : ''}} > Male 
    <input type="radio" value="Female" name="gender" {{ $student->gender =='Female' ? 'checked' : ''}} > Female 
 
    <div>
        <label> Reporting Teacher : </label>
        <select style="width: 40%;height: 30px;" name="reporting_teacher_id">
            @foreach($teachers as $teacher)
                <option value="{{$teacher->id}}" {{ $student->reporting_teacher_id == $teacher->id ? 'selected' : '' }} >{{$teacher->name}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <a class="button w3-btn w3-black" href="{{url('students')}}"  > Back </a>
        <input class="button w3-button w3-green" type="submit" value="Submit">
    </div>
    

  </form>

</div>

@endsection