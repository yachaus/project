@extends('layout')

@section('content')
    <h1 class="title">{{$project->title}}</h1>

    <div class="content">{{$project->description}}</div>
    <div class="content">
        <a href="/projects/{{$project->id}}/edit" class="button is-info is-outlined">
            Edit
        </a>
    </div>

    @if ($project->tasks->count())
        <h2>Tasks:</h2>
    <div class="box" style="padding: 1%;">
        @foreach($project->tasks as $task)
            <div class="box" style="margin: 1%">
                <form method="POST" action="/task/{{$task->id}}">
                    @method ('PATCH')
                    @csrf
                    <label class="chekbox {{$task->completed ? 'is-completed' : ''}}" for="completed">

                        <input style="margin: 9px;" type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ?
                        'checked' : ''}}>
                        {{$task->description}}
                        <form method="post" action="/tasks/{{$task->id}}">
                            @csrf
                            @method ('delete')
                                    <button type="submit" class="button is-info is-outlined" style="float: right;">Delete</button>
                        </form>

                    </label>
                </form>
            </div>
        @endforeach
    </div>
    @endif
    <form class="box" method="post" action="/projects/{{$project->id}}/tasks">
        @csrf

        <div class="field">
            <label class="label" for="">
                New Task
            </label>
            <div class="control">
                <input type="text" class="input" name="description" placeholder="New Task" required>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>
        @include ('/projects/errors')
    </form>
@endsection('content')
