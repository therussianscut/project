@extends('layout')

@section('title', 'Main Projects Page')


@section('content')

@foreach($projects as $project)


    <ul>


       <li><a href="/projects/{{$project->id}}"> {{$project->title}}</a></li>
        {{$project->description}}






    </ul>






    @endforeach


@endsection