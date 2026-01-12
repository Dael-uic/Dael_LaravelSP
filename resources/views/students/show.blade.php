@extends('layout')

@section('title', 'Student Profile')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h1><i class="fas fa-user-circle"></i> Student Profile</h1>
            </div>
            <div class="card-body text-center">
                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 120px; height: 120px;">
                    <i class="fas fa-user fa-4x text-white"></i>
                </div>
                <h3 class="card-title">Henry Philip</h3>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-envelope text-primary"></i>
                            <strong>Email:</strong>
                            <p>henryphilipdael598@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-graduation-cap text-success"></i>
                            <strong>Course:</strong>
                            <p>Computer Science</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-calendar-alt text-warning"></i>
                            <strong>Year Level:</strong>
                            <p>2nd Year</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-id-card text-info"></i>
                            <strong>Student ID:</strong>
                            <p>2024001</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('students.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back to Student List</a>
                <a href="{{ route('students.edit', 1) }}" class="btn btn-warning ms-2"><i class="fas fa-edit"></i> Edit Profile</a>
            </div>
        </div>
    </div>
</div>
@endsection