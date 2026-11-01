<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;

class PageController extends Controller
{
    public function welcome()
    {
        $today = today();

        $tasks = Task::whereDate('task_date', $today->toDateString())
            ->orderBy('id')
            ->get();

        return view('welcome', compact('tasks', 'today'));
    }

    public function tasks()
    {
        $tasks = Task::orderBy('task_date')
            ->orderBy('id')
            ->get();

        return view('tasks', compact('tasks'));
    }

    public function profile()
    {
        $user = User::orderBy('id')->first();

        return view('profile', compact('user'));
    }
}