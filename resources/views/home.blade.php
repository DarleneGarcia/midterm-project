@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-5 shadow rounded-3 text-center" style="width: 30rem;">
        <h2 class="mb-4 fw-bold">Transaction Processing System</h2>
        <a href="{{ route('students.index') }}" class="btn btn-primary mb-3 w-100">Students</a>
        <a href="{{ route('sections.index') }}" class="btn btn-success w-100">Sections</a>
    </div>
</div>
@endsection
