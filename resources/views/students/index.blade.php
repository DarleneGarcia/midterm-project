@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Students</h2>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
</div>

<div class="card p-4">
<table class="table table-bordered table-striped rounded-3 shadow">
    <thead class="table-info">
        <tr>
            <th>Student #</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Year Level</th>
            <th>Section</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <td>{{ $student->studentNumber }}</td>
            <td>{{ $student->lname }}, {{ $student->fname }} {{ $student->mi }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->contactNumber }}</td>
            <td>{{ $student->section->yearLevel }}</td>
            <td>{{ $student->section->sectionName }}</td>
            <td>
                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this student?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
