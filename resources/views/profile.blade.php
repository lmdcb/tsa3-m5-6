
@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="page-header">
    <h1>My Profile</h1>
    <p class="subtitle">
        View your personal account information.
    </p>
</div>

<div class="card">

    @if ($user)

        <div class="profile-card">

            <div class="profile-avatar">
                {{ strtoupper(substr($user->full_name, 0, 1)) }}
            </div>

            <div class="profile-info">

                <h2>{{ $user->full_name }}</h2>

                <p>
                    <strong>Username:</strong>
                    {{ $user->username }}
                </p>

                <p>
                    <strong>Email Address:</strong>
                    {{ $user->email }}
                </p>

                <p>
                    <strong>Member Since:</strong>
                    {{ $user->created_at->format('F d, Y') }}
                </p>

            </div>

        </div>

    @else

        <div class="empty-state">
            No user profile found.
        </div>

    @endif

</div>

@endsection
