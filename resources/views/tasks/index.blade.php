@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')
    <h1>All Tasks</h1>
    @if ($tasks->isEmpty())
        <p>No tasks found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('tasks.show', $task) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection