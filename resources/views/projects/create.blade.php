@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
@endsection
@section('content')
    
    <form method="POST" action="/projects">
        @csrf

        <h1 class="heading is-1">Create a Project</h1>
        
        <div class="field">
            <div class="control">
                <label class="label" for="title">Title</label>
                <div>
                    <input type="text" class="input" name="title" placeholder="Title">
                </div>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <label class="label" for="description">Description</label>
                <div>
                    <textarea class="textarea" name="description"></textarea>
                </div>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Create Project</button>
                <a href="/projects" class="button">Cancel</a>
            </div>
        </div>
    </form>
@endsection