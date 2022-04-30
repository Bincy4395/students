
<style>
    #studentsMarks {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #studentsMarks td, #studentsMarks th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #studentsMarks tr:nth-child(even){background-color: #f2f2f2;}

    #studentsMarks tr:hover {background-color: #ddd;}

    #studentsMarks th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
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

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            
    <a class="button w3-btn w3-black" href="{{url('students/marks/add')}}"  style="margin-bottom : 7px; float: left;"> Add New </a>
    <a class="button w3-btn w3-black" href="{{url('/')}}"  style="margin-bottom : 7px;float: right;"> Back to Home </a>

    @if(isset($studentsMarks))
    <table id="studentsMarks">
        <thead>
            <tr>
                <th> ID </th>
                <th> Name  </th>
                <th> Maths </th>
                <th> Science </th>
                <th> History </th>
                <th> Term </th>
                <th> Total Marks </th>
                <th> Created On </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach($studentsMarks as $data)
            <tr>
                <td> {{$data->id}} </td>
                <td> {{$data->student_name}} </td>
                <td> {{$data->maths_marks}} </td>
                <td> {{$data->science_marks}} </td>
                <td> {{$data->history_marks}} </td>
                <td> {{$data->term}} </td>
                <td> {{$data->total_marks}} </td>
                <td> {{ date('M d, Y H:i A', strtotime($data->created_at)) }} </td>
                <td> 
                    <a href="{{url('students/marks/edit', $data->id )}}"> Edit</a> /
                    <a href="{{url('students/marks/delete', $data->id )}}">Delete</a> 
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

</div>

@endsection