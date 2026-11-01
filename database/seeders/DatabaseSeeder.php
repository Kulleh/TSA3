<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $date = today();

        $yesterday = $date->copy()->subDay()->toDateString();
        $today = $date->toDateString();
        $tomorrow = $date->copy()->addDay()->toDateString();

        $tasks = [
            [
                'title' => 'Review Laravel routes',
                'status' => 'completed',
                'task_date' => $yesterday,
            ],
            [
                'title' => 'Read about Eloquent',
                'status' => 'pending',
                'task_date' => $yesterday,
            ],
            [
                'title' => 'Create the tasks migration',
                'status' => 'completed',
                'task_date' => $today,
            ],
            [
                'title' => 'Build the Welcome page',
                'status' => 'pending',
                'task_date' => $today,
            ],
            [
                'title' => 'Check the Task List page',
                'status' => 'pending',
                'task_date' => $today,
            ],
            [
                'title' => 'Update the Profile page',
                'status' => 'pending',
                'task_date' => $tomorrow,
            ],
            [
                'title' => 'Write the About page',
                'status' => 'pending',
                'task_date' => $tomorrow,
            ],
            [
                'title' => 'Test the application',
                'status' => 'pending',
                'task_date' => $tomorrow,
            ],
        ];

        foreach ($tasks as $task) {
            Task::updateOrCreate(
                ['title' => $task['title']],
                $task
            );
        }

        User::updateOrCreate(
            ['username' => 'rowgene'],
            [
                'full_name' => 'Rowgene Carl Gales',
                'email' => 'rowgene@example.com',
            ]
        );
    }
}