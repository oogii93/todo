@extends('layouts.app')

@section('title', 'The first of tasks')

@section('content')
    <nav class="mb-4">
        <a href="{{ route('tasks.create') }}" class="link">add task</a>
    </nav>

    {{-- @if (count($tasks)) --}}
    @forelse ($tasks as $task)
        <div><a href="{{ route('tasks.show', ['task' => $task->id]) }}" @class(['line-through' => $task->completed])>{{ $task->title }}</a>
        </div>


    @empty
        <div>there are no tasks</div>
    @endforelse
    @if ($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}

        </nav>
    @endif
@endsection
