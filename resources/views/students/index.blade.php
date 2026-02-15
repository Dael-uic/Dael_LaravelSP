@extends('components.layout')

@section('title', 'Student List')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1><i class="fas fa-users"></i> Student List</h1>
    <a href="{{ route('students.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Add New Student</a>
</div>

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if ($students->count() > 0)
    <div class="row">
        @foreach ($students as $student)
            <div class="col-md-4 mb-4">
                <div class="card student-card h-100">
                    <div class="card-body text-center">
                        <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-user fa-2x text-white"></i>
                        </div>
                        <h5 class="card-title mt-3">{{ $student->first_name }} {{ $student->last_name }}</h5>
                        <p class="card-text text-muted">{{ $student->program ?? 'N/A' }} - ID: {{ $student->student_id }}</p>
                        <p class="card-text text-muted small">{{ $student->email }}</p>
                        <div class="d-flex gap-2 justify-content-center">
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> View</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <div class="alert alert-info" role="alert">
        <i class="fas fa-info-circle"></i> No students found. <a href="{{ route('students.create') }}">Add one now!</a>
    </div>
@endif
@endsection