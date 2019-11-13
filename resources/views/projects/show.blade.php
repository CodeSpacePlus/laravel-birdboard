@extends('layouts.app')

@section('content')
<header class="flex items-center mb-3 py-4">
    <div class="flex justify-between items-end w-full">
        <p class="text-grey text-sm font-normal">
            <a href="/projects" class="font-normal no-underline text-grey text-sm">My Projects</a> / {{ $project->title }}
        </p>

        <a href="/projects/create" class="button">New Project</a>
    </div>
</header>

<main>
    <div class="lg:flex -mx-3">
        <div class="lg:w-3/4 px-3 mb-6">

            <div class="mb-8">
                <h2 class="text-grey font-normal text-lg mb-3">Tasks</h2>
                {{-- Tasks --}}
                @forelse($project->tasks as $task)
                    <div class="card mb-3">{{ $task->body }}</div>    
                @empty
                    <div class="card mb-3">
                        <form action="{{ $project->path() }} . /tasks" method="POST">
                            @csrf
                            <input class="w-full" name="body" placeholder="Begin adding tasks...">
                        </form>
                    </div> 
                @endforelse
                
            </div>

            <div>
                <h2 class="text-grey font-normal text-lg mb-3">General Notes</h2>
                {{-- General Notes --}}

                <textarea class="card w-full" style="min-height: 200px">Lorem ipsum.</textarea>
            </div>
        </div>
        <div class="lg:w-1/4 px-3">
            @include('projects.card')
        </div>
    </div>
</main>


@endsection
