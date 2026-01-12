@extends('layout')

@section('title', 'Student List')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1><i class="fas fa-users"></i> Student List</h1>
    <a href="{{ route('students.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Add New Student</a>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card student-card">
            <div class="card-body text-center">
                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                    <i class="fas fa-user fa-2x text-white"></i>
                </div>
                <h5 class="card-title mt-3">Henry Philip</h5>
                <p class="card-text text-muted">Computer Science - 2nd Year</p>
                <div class="d-flex justify-content-center gap-2">
                    <a href="{{ route('students.show', 1) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> View</a>
                    <a href="{{ route('students.edit', 1) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card student-card">
            <div class="card-body text-center">
                <div class="bg-success rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                    <i class="fas fa-user fa-2x text-white"></i>
                </div>
                <h5 class="card-title mt-3">Pinky Rose</h5>
                <p class="card-text text-muted">Information Technology - 4th Year</p>
                <div class="d-flex justify-content-center gap-2">
                    <a href="{{ route('students.show', 2) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> View</a>
                    <a href="{{ route('students.edit', 2) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card student-card">
            <div class="card-body text-center">
                <div class="bg-info rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                    <i class="fas fa-user fa-2x text-white"></i>
                </div>
                <h5 class="card-title mt-3">MC RJ</h5>
                <p class="card-text text-muted">Software Engineering - 2nd Year</p>
                <div class="d-flex justify-content-center gap-2">
                    <a href="{{ route('students.show', 3) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> View</a>
                    <a href="{{ route('students.edit', 3) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection