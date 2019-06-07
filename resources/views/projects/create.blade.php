@extends ('layout')

@section ('content')
    <h1>Create Project</h1>
    <form method="post" action="/projects">
        {{csrf_field()}}
        <div class="field">
            <label class="label" for="title">Project Title</label>
            <div class="control">
                <input class="input {{$errors->has('title') ? 'is-danger' : ''}}" type="text" name="title"
                       placeholder="Project Title"  value="{{old('title')}}" required>
            </div>
        </div>
        <div class="field">
            <label class="label" for="title">Project Description</label>
            <div class="control">
                <textarea class="textarea {{$errors->has('description') ? 'is-danger' : ''}}" name="description"
                          placeholder="Project Description" value="{{old('description')}}"required></textarea>
            </div>
        </div>
        <div class="control">
            <button type="submit" class="button is-link">Create Project</button>
        </div>
    </form>
    @if ($errors->any())
    <div class="notification is-danger" style="margin-top: 10px;">

            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach

    </div>
    @endif
@endsection ('content')
