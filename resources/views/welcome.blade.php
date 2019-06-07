@extends ('layout')

@section ('content')
    <ul>
        @foreach($tasks as $task)
            <li>{{$task}}</li>
        @endforeach
    </ul>
    <p><a href="/projects">All Projects</a></p>
@endsection
