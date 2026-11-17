
@extends('layouts.app')

@section('title', 'About')

@section('content')

<div class="page-header">
    <h1>About TaskFlow</h1>
    <p class="subtitle">
        Learn more about the Tasks for Today Management System.
    </p>
</div>

<div class="hero">
    <div class="hero-label">ABOUT THE APPLICATION</div>

    <h1>Stay Organized with TaskFlow.</h1>

    <p>
        TaskFlow is a task management system developed using
        Laravel 12, MySQL, Eloquent ORM, and Blade templates.
        It provides a simple way to view daily tasks, track
        task statuses, and stay organized.
    </p>
</div>

<div class="about-grid">

    <div class="card">
        <div class="about-label">Project Name</div>
        <div class="about-value">
            Tasks for Today Management System
        </div>
    </div>

    <div class="card">
        <div class="about-label">Framework</div>
        <div class="about-value">
            Laravel 12
        </div>
    </div>

    <div class="card">
        <div class="about-label">Database</div>
        <div class="about-value">
            MySQL
        </div>
    </div>

    <div class="card">
        <div class="about-label">Technology</div>
        <div class="about-value">
            Eloquent ORM and Blade Templates
        </div>
    </div>

    <div class="card">
        <div class="about-label">Developer</div>
        <div class="about-value">
            Leah Mari D.C. Buenaventura
        </div>
    </div>

    <div class="card">
        <div class="about-label">Course</div>
        <div class="about-value">
            IT0049 - Web System Technologies
        </div>
    </div>

</div>

<div class="card" style="margin-top: 24px;">
    <h2 class="section-title">Project Purpose</h2>

    <p>
        This application was developed for Technical Summative
        Assessment 3. It demonstrates Laravel migrations,
        database seeding, Eloquent models, MVC architecture,
        date-based task filtering, and reusable Blade layouts.
    </p>
</div>

@endsection
