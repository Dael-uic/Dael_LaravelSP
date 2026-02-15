@extends('components.layout')

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
                <h3 class="card-title">{{ $student->first_name }} {{ $student->last_name }}</h3>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-id-card text-info"></i>
                            <strong>Student ID:</strong>
                            <p>{{ $student->student_id }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-envelope text-primary"></i>
                            <strong>Email:</strong>
                            <p>{{ $student->email }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-phone text-success"></i>
                            <strong>Phone:</strong>
                            <p>{{ $student->phone ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-birthday-cake text-warning"></i>
                            <strong>Date of Birth:</strong>
                            <p>{{ $student->date_of_birth ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-venus-mars text-info"></i>
                            <strong>Gender:</strong>
                            <p>{{ $student->gender ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-graduation-cap text-success"></i>
                            <strong>Program:</strong>
                            <p>{{ $student->program ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-calendar-check text-primary"></i>
                            <strong>Enrollment Date:</strong>
                            <p>{{ $student->enrollment_date }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-chart-bar text-info"></i>
                            <strong>GPA:</strong>
                            <p>{{ $student->gpa ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-map-marker-alt text-danger"></i>
                            <strong>Address:</strong>
                            <p>{{ $student->address ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-city text-secondary"></i>
                            <strong>City:</strong>
                            <p>{{ $student->city ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-map text-warning"></i>
                            <strong>State:</strong>
                            <p>{{ $student->state ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-envelope text-success"></i>
                            <strong>Postal Code:</strong>
                            <p>{{ $student->postal_code ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <i class="fas fa-globe text-info"></i>
                            <strong>Country:</strong>
                            <p>{{ $student->country ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <i class="fas fa-check-circle text-primary"></i>
                            <strong>Status:</strong>
                            <p>
                                <span class="badge bg-{{ $student->status == 'active' ? 'success' : ($student->status == 'inactive' ? 'warning' : ($student->status == 'graduated' ? 'info' : 'danger')) }}">
                                    {{ ucfirst($student->status) }}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('students.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back to Student List</a>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning ms-2"><i class="fas fa-edit"></i> Edit Profile</a>
            </div>
        </div>
    </div>
</div>
@endsection