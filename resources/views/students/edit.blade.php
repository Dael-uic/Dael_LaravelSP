@extends('layout')

@section('title', 'Edit Student')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-warning text-white text-center">
                <h1><i class="fas fa-edit"></i> Edit Student</h1>
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label"><i class="fas fa-user"></i> Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="Henry Philip" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="henryphilipdael598@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="course" class="form-label"><i class="fas fa-graduation-cap"></i> Course</label>
                        <input type="text" class="form-control" id="course" name="course" value="Computer Science" required>
                    </div>
                    <div class="mb-3">
                        <label for="year_level" class="form-label"><i class="fas fa-calendar-alt"></i> Year Level</label>
                        <input type="text" class="form-control" id="year_level" name="year_level" value="2nd Year" required>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary"><i class="fas fa-times"></i> Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection