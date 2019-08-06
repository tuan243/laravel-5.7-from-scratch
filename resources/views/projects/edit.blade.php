@extends('layout')

@section('content')
    <h1 class="title">Edit project</h1>

    <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label for="title" class="label">Title</label>

            <div class="control">
                <input type="text" name="title" placeholder="Title" class="input" value="{{ $project->title }}">
            </div>
        </div>
        <div class="field">
            <label for="description" class="label">Description</label>
    
            <div class="control">
                <textarea name="description"  class="textarea">{{ $project->description }}</textarea>
            </div>
        </div>
    
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>
    </form>

    @include('errors')

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete Project</button>
            </div>
        </div>

    </form>
@endsection