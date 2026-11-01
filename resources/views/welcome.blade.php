@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <h1>Tasks for Today</h1>

    <p>{{ $today->format('F j, Y') }}</p>
    <p>Tasks today: {{ $tasks->count() }}</p>

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
                    <td colspan="3">No tasks scheduled for today.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection