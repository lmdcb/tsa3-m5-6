<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTodaySeeder extends Seeder
{
    public function run(): void
    {
        // Exactly one user record
        DB::table('users')->insert([
            'username'   => 'leah',
            'full_name'  => 'Leah Mari Buenaventura',
            'email'      => 'leah@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Eight tasks across three different dates
        DB::table('tasks')->insert([
            [
                'title'      => 'Review Laravel migrations',
                'status'     => 'completed',
                'task_date'  => today()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'Complete TSA3 task management system',
                'status'     => 'pending',
                'task_date'  => today()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'Test Eloquent database queries',
                'status'     => 'pending',
                'task_date'  => today()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'Prepare project documentation',
                'status'     => 'pending',
                'task_date'  => today()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'Set up Laravel project',
                'status'     => 'completed',
                'task_date'  => today()->subDay()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'Configure MySQL database',
                'status'     => 'completed',
                'task_date'  => today()->subDay()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'Upload project to GitHub',
                'status'     => 'pending',
                'task_date'  => today()->addDay()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'Deploy application to hosting',
                'status'     => 'pending',
                'task_date'  => today()->addDay()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
