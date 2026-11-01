@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <h2>Tasks for Today Management System</h2>

    <p>
        <strong>Developer:</strong>
        Rowgene Carl Gales
    </p>

    <p>
        This application is a Laravel rebuild of the
        Tasks for Today Management System from TSA1.
    </p>

    <p>
        The Welcome page displays today's tasks.
        The Task List displays all tasks ordered by date,
        while the Profile page displays the user's information.
    </p>

    <p>
        Built using Laravel, Blade templates, Eloquent models,
        database migrations, and a seeder.
    </p>
@endsection