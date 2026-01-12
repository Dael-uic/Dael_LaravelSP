@extends('layout')

@section('title', 'Add Student')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-success text-white text-center">
                <h1><i class="fas fa-plus"></i> Add New Student</h1>
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label"><i class="fas fa-user"></i> Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter student name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
                    </div>
                    <div class="mb-3">
                        <label for="course" class="form-label"><i class="fas fa-graduation-cap"></i> Course</label>
                        <input type="text" class="form-control" id="course" name="course" placeholder="Enter course name" required>
                    </div>
                    <div class="mb-3">
                        <label for="year_level" class="form-label"><i class="fas fa-calendar-alt"></i> Year Level</label>
                        <input type="text" class="form-control" id="year_level" name="year_level" placeholder="Enter year level" required>
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