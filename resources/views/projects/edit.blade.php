@extends('layout')

@section('title', 'Edit')

@section('content')

    <h3 > Edit Project </h3>



<div class="card">

    <div class=" card-body">

    <form method="post" action="/projects/{{$project->id}}">

        @method('patch')
       @csrf

        <div class="form-group">

            <label> Title</label>

            <input type="text" name="title" placeholder="Title" value="{{$project->title}}">
        </div>
        <div class="form-group">


            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$project->description}}">


        </div>
        <button type="submit" class="btn btn-primary">Update Project</button>




    </form>


        <form method="post" action="/projects/{{$project->id}}">
            @method('delete')
            @csrf


            <button type="submit" class="btn btn-primary">Delete Project</button>
        </form>


</div>
    </div>
@stop





