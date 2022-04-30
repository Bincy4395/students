
<style>
    #students {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #students td, #students th {
    border: 1px solid #ddd;
    padding: 8px;
    }

    #students tr:nth-child(even){background-color: #f2f2f2;}

    #students tr:hover {background-color: #ddd;}

    #students th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }

    .button {
        background-color: #4CAF50; /* Green */
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

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            
    <a class="button w3-btn w3-black" href="{{url('students/add')}}"  style="margin-bottom : 7px;float: left;"> Add New Student </a>
    <a class="button w3-btn w3-black" href="{{url('/')}}"  style="margin-bottom : 7px;float: right;"> Back to Home </a>

    @if(isset($students))
    <table id="students">
        <thead>
            <tr>
                <th> ID </th>
                <th> Name  </th>
                <th> Age </th>
                <th> Gender </th>
                <th> Reporting Teacher </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $data)
            <tr>
                <td> {{$data->id}} </td>
                <td> {{$data->name}} </td>
                <td> {{$data->age}} </td>
                <td> {{$data->gender}} </td>
                <td> {{$data->reporting_teacher_id}} </td>
                <td> 
                    <a href="{{url('students/edit', $data->id )}}"> Edit</a> /
                    <a href="{{url('students/delete', $data->id )}}">Delete</a> 
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

</div>

@endsection