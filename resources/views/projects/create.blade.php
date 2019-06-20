@extends('layout')

@section('title', 'Create')



@section('content')


    <form method="POST" action="/projects">
        @csrf


        <label for="title">Post Title</label>


        <div>
            Title: <input  type="text" name="title">

        </div>

        <div>

            Description: <textarea name="description"></textarea>

        </div>




        <button type="submit" class="btn btn-primary">Submit</button


    </form>




    @endsection