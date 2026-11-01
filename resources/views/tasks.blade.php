@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <h1>Task List</h1>

    <p>All tasks, ordered from earliest to latest.</p>
    <p>Total tasks: {{ $tasks->count() }}</p>

    <table>
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ ucfirst($task->status) }}</td>
                    <td>{{ $task->task_date->format('F j, Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No tasks found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection