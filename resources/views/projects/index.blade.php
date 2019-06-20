@include('layout')

@section('title', 'index')


@foreach($projects as $project)

    <ul>


        <li><a href="/projects/{{$project->id}}"> {{$project->title}}</a></li>
        {{$project->description}}

        <p><a href="/projects/{{$project->id}}/edit"> Edit</a></p>


    </ul>


    @endforeach

