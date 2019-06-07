@extends('layout')

@section('content')
    <h1 class="title">{{$project->title}}</h1>

    <div class="content">{{$project->description}}</div>

    @if ($project->tasks->count())
    <div class="content">
        @foreach($project->tasks as $task)
            <div>
                <form method="POST" action="/task/{{$task->id}}">
                    @method ('PATCH')
                    @csrf
                    <label class="chekbox {{$task->completed ? 'is-completed' : ''}}" for="completed">
                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
                        {{$task->description}}
                    </label>
                </form>
            </div>
        @endforeach
    </div>
    @endif

    <a href="/projects/{{$project->id}}/edit">
        Edit
    </a>
@endsection('content')
