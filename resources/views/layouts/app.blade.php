<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Tasks for Today')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
            max-width: 1000px;
            margin: 30px auto;
            padding: 0 20px;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        nav a {
            color: #2563eb;
            text-decoration: none;
        }

        main {
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #eaf0ff;
        }
    </style>
</head>
<body>
    <nav aria-label="Main navigation">
        <a href="{{ route('welcome') }}">Welcome</a>
        <a href="{{ route('tasks') }}">Task List</a>
        <a href="{{ route('profile') }}">Profile</a>
        <a href="{{ route('about') }}">About</a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>