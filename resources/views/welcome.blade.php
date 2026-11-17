
@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<div class="hero">
    <div class="hero-label">YOUR DAILY DASHBOARD</div>

    <h1>Welcome to TaskFlow!</h1>

    <p>
        Stay organized and focused on what matters today.
        Here is an overview of your scheduled tasks for
        {{ today()->format('F d, Y') }}.
    </p>
</div>

<div class="stats-grid">

    <div class="stat-card">
        <div class="stat-label">Today's Tasks</div>
        <div class="stat-value">{{ $tasks->count() }}</div>
    </div>

    <div class="stat-card">
        <div class="stat-label">Completed</div>
        <div class="stat-value">
            {{ $tasks->where('status', 'completed')->count() }}
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-label">Pending</div>
        <div class="stat-value">
            {{ $tasks->where('status', 'pending')->count() }}
        </div>
    </div>

</div>

<div class="page-header">
    <h2 class="section-title">Today's Task List</h2>
    <p class="subtitle">
        Tasks scheduled for {{ today()->format('F d, Y') }}
    </p>
</div>

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>Task Title</th>
                <th>Status</th>
                <th>Scheduled Date</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($tasks as $task)
                <tr>
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
                    <td colspan="3">
                        <div class="empty-state">
                            No tasks scheduled for today.
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div style="margin-top: 25px;">
    <a href="{{ route('tasks') }}" class="btn">
        View All Tasks
    </a>
</div>

@endsection
