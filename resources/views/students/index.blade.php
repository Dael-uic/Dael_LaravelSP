@extends('components.layout')

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
                <h5 class="card-title mt-3">Henry Philip Dael</h5>
                <p class="card-text text-muted">Computer Science - 2nd Year</p>
                <x-action-buttons :id="1" />
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card student-card">
            <div class="card-body text-center">
                <div class="bg-success rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                    <i class="fas fa-user fa-2x text-white"></i>
                </div>
                <h5 class="card-title mt-3">Pinky Rose Sia</h5>
                <p class="card-text text-muted">Information Technology - 4th Year</p>
                <x-action-buttons :id="2" />
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card student-card">
            <div class="card-body text-center">
                <div class="bg-info rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                    <i class="fas fa-user fa-2x text-white"></i>
                </div>
                <h5 class="card-title mt-3">MC RJ Escote</h5>
                <p class="card-text text-muted">Software Engineering - 2nd Year</p>
                <x-action-buttons :id="3" />
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card student-card">
            <div class="card-body text-center">
                <div class="bg-warning rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                    <i class="fas fa-user fa-2x text-white"></i>
                </div>
                <h5 class="card-title mt-3">Maria Ivy Dael</h5>
                <p class="card-text text-muted">Mechanical Engineering - 3rd Year</p>
                <x-action-buttons :id="4" />
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card student-card">
            <div class="card-body text-center">
                <div class="bg-danger rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                    <i class="fas fa-user fa-2x text-white"></i>
                </div>
                <h5 class="card-title mt-3">Jose Ronan Dael</h5>
                <p class="card-text text-muted">Business Administration - 1st Year</p>
                <x-action-buttons :id="5" />
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card student-card">
            <div class="card-body text-center">
                <div class="bg-info rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                    <i class="fas fa-user fa-2x text-white"></i>
                </div>
                <h5 class="card-title mt-3">Ryan Sia</h5>
                <p class="card-text text-muted">Electrical Engineering - 4th Year</p>
                <x-action-buttons :id="6" />
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card student-card">
            <div class="card-body text-center">
                <div class="bg-secondary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                    <i class="fas fa-user fa-2x text-white"></i>
                </div>
                <h5 class="card-title mt-3">Froilan Kho</h5>
                <p class="card-text text-muted">Psychology - 2nd Year</p>
                <x-action-buttons :id="7" />
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card student-card">
            <div class="card-body text-center">
                <div class="bg-dark rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                    <i class="fas fa-user fa-2x text-white"></i>
                </div>
                <h5 class="card-title mt-3">Francis Kho</h5>
                <p class="card-text text-muted">Civil Engineering - 3rd Year</p>
                <x-action-buttons :id="8" />
            </div>
        </div>
    </div>
</div>
@endsection