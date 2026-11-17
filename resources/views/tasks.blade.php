
@extends('layouts.app')

@section('title', 'Task List')

@section('content')

<div class="page-header">
    <h1>Task List</h1>
    <p class="subtitle">
        View all your scheduled tasks, organized by date.
    </p>
</div>

<div class="stats-grid">

    <div class="stat-card">
        <div class="stat-label">Total Tasks</div>
        <div class="stat-value">{{ $tasks->count() }}</div>
    </div>

    <div class="stat-card">
        <div class="stat-label">Completed Tasks</div>
        <div class="stat-value">
            {{ $tasks->where('status', 'completed')->count() }}
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-label">Pending Tasks</div>
        <div class="stat-value">
            {{ $tasks->where('status', 'pending')->count() }}
        </div>
    </div>

</div>

<div class="page-header">
    <h2 class="section-title">All Scheduled Tasks</h2>
    <p class="subtitle">
        Tasks are arranged from earliest to latest date.
    </p>
</div>

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Task Title</th>
                <th>Status</th>
                <th>Scheduled Date</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>

                    <td>{{ $task->title }}</td>

                    <td>
                        <span class="status status-{{ $task->status }}">
                            {{ ucfirst($task->status) }}
                        </span>
                    </td>

                    <td>
                        {{ $task->task_date->format('M d, Y') }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        <div class="empty-state">
                            No tasks available.
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
