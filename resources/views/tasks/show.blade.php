@extends('layouts.app')

@section('title', 'Task Details')

@section('content')
    <h1>Task Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $task->title }}</h5>
            <p class="card-text"><strong>Description:</strong> {{ $task->description ?? 'N/A' }}</p>
            <p class="card-text"><strong>Created At:</strong> {{ $task->created_at->format('d M Y H:i') }}</p>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
@endsection