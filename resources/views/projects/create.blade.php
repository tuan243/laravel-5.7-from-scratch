@extends('layout')

@section('content')
    <h1 class="title">Create a new project</h1>
    <form action="/projects" method="POST">
    {{ csrf_field() }}
        <div class="field">
            <label for="title" class="label">Project Title</label>

            <div class="control">
                <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" id="" placeholder="Project title" value="{{ old('title') }}" required>
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Project Description</label>
            <div class="control">
                <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="Project description" required>{{ old('description') }}</textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Create Project</button>
            </div>
        </div>

        @include('errors')
    </form>
@endsection