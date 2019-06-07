@extends ('layout')

@section ('content')
    <h1>EDIT PROJECT</h1>
    <form method="POST" action="/projects/{{$project->id}}">
        @method ('PATCH')
        @csrf
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{$project->title}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <input type='text' class="input" name="description" placeholder="Description"
                       value="{{$project->description}}">
            </div>
        </div>
        <button type="submit" class="button">Update Project</button>
    </form>
    <form method="POST" action="/projects/{{$project->id}}">
        @method ('DELETE')
        @csrf
        <button type="submit" class="button">Delete Project</button>
    </form>
@endsection ('content')
