@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow rounded-3" style="max-width: 700px; width: 100%;">
        <h2 class="text-center mb-4">Student Details</h2>

        <ul class="list-group">
            <li class="list-group-item"><strong>Student Number:</strong> {{ $student->studentNumber }}</li>
            <li class="list-group-item"><strong>Last Name:</strong> {{ $student->lname }}</li>
            <li class="list-group-item"><strong>First Name:</strong> {{ $student->fname }}</li>
            <li class="list-group-item"><strong>MI:</strong> {{ $student->mi }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $student->email }}</li>
            <li class="list-group-item"><strong>Contact Number:</strong> {{ $student->contactNumber }}</li>
            <li class="list-group-item"><strong>Year Level:</strong> {{ $student->section->yearLevel }}</li>
            <li class="list-group-item"><strong>Section:</strong> {{ $student->section->sectionName }}</li>
        </ul>

        <div class="mt-3 text-center">
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection
