@extends('components.layout')

@section('title', 'Add Student')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-success text-white text-center">
                <h1><i class="fas fa-plus"></i> Add New Student</h1>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <strong>Validation Errors:</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="student_id" class="form-label"><i class="fas fa-id-card"></i> Student ID</label>
                            <input type="text" class="form-control @error('student_id') is-invalid @enderror" id="student_id" name="student_id" value="{{ old('student_id') }}" placeholder="e.g., STU001" required>
                            @error('student_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label"><i class="fas fa-envelope"></i> Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter email address" required>
                            @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="first_name" class="form-label"><i class="fas fa-user"></i> First Name</label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="Enter first name" required>
                            @error('first_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last_name" class="form-label"><i class="fas fa-user"></i> Last Name</label>
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}" placeholder="Enter last name" required>
                            @error('last_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label"><i class="fas fa-phone"></i> Phone (Optional)</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter phone number">
                            @error('phone') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="date_of_birth" class="form-label"><i class="fas fa-calendar"></i> Date of Birth (Optional)</label>
                            <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                            @error('date_of_birth') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="gender" class="form-label"><i class="fas fa-venus-mars"></i> Gender (Optional)</label>
                            <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
                                <option value="">Select Gender</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('gender') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="program" class="form-label"><i class="fas fa-graduation-cap"></i> Program (Optional)</label>
                            <input type="text" class="form-control @error('program') is-invalid @enderror" id="program" name="program" value="{{ old('program') }}" placeholder="e.g., Computer Science">
                            @error('program') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="enrollment_date" class="form-label"><i class="fas fa-calendar-check"></i> Enrollment Date</label>
                            <input type="date" class="form-control @error('enrollment_date') is-invalid @enderror" id="enrollment_date" name="enrollment_date" value="{{ old('enrollment_date') }}" required>
                            @error('enrollment_date') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="gpa" class="form-label"><i class="fas fa-chart-bar"></i> GPA (Optional)</label>
                            <input type="number" class="form-control @error('gpa') is-invalid @enderror" id="gpa" name="gpa" value="{{ old('gpa') }}" placeholder="0.0 - 4.0" step="0.01" min="0" max="4">
                            @error('gpa') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label"><i class="fas fa-map-marker-alt"></i> Address (Optional)</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="2" placeholder="Enter address">{{ old('address') }}</textarea>
                        @error('address') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="city" class="form-label"><i class="fas fa-city"></i> City (Optional)</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ old('city') }}">
                            @error('city') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="state" class="form-label"><i class="fas fa-map"></i> State (Optional)</label>
                            <input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state" value="{{ old('state') }}">
                            @error('state') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="postal_code" class="form-label"><i class="fas fa-envelope"></i> Postal Code (Optional)</label>
                            <input type="text" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code" name="postal_code" value="{{ old('postal_code') }}">
                            @error('postal_code') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="country" class="form-label"><i class="fas fa-globe"></i> Country (Optional)</label>
                            <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{ old('country') }}">
                            @error('country') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label"><i class="fas fa-check-circle"></i> Status</label>
                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                            <option value="active" {{ old('status', 'active') == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            <option value="graduated" {{ old('status') == 'graduated' ? 'selected' : '' }}>Graduated</option>
                            <option value="suspended" {{ old('status') == 'suspended' ? 'selected' : '' }}>Suspended</option>
                        </select>
                        @error('status') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="d-flex justify-content-center gap-3">
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save Student</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary"><i class="fas fa-times"></i> Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection