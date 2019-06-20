@extends('layout')

@section('title', 'Show')



@section('content')


<h1 class="title">{{$project->title}}</h1>


    <div>

        <p> {{$project->description}}</p>


       <p><a href="/projects/{{$project->id}}/edit"> Edit</a></p>


    </div>




@endsection