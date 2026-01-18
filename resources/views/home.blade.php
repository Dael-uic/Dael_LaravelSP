@extends('components.layout')

@section('title', 'Welcome to the Student Portal')

@section('content')
<div class="hero-section text-center">
    <div class="container">
        <h1><i class="fas fa-graduation-cap"></i> Welcome to the Student Portal</h1>
        <p class="lead">Manage student information with ease. View, add, edit, and organize student data in a beautiful, intuitive interface.</p>
        <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg"><i class="fas fa-list"></i> View Student List</a>
        <a href="{{ route('students.create') }}" class="btn btn-success btn-lg ms-3"><i class="fas fa-plus"></i> Add New Student</a>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <i class="fas fa-users fa-3x text-primary mb-3"></i>
                <h5 class="card-title">Student Management</h5>
                <p class="card-text">Easily manage student records with our comprehensive system.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <i class="fas fa-chart-line fa-3x text-success mb-3"></i>
                <h5 class="card-title">Analytics</h5>
                <p class="card-text">Track student progress and generate insightful reports.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <i class="fas fa-shield-alt fa-3x text-warning mb-3"></i>
                <h5 class="card-title">Secure & Reliable</h5>
                <p class="card-text">Your data is safe with our secure and reliable platform.</p>
            </div>
        </div>
    </div>
</div>
@endsection