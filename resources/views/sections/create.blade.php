@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow rounded-3" style="width: 28rem;">
        <h2 class="text-center mb-3">Add Section</h2>
        <form action="{{ route('sections.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Section Name</label>
                <input type="text" name="sectionName" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Year Level</label>
                <select name="yearLevel" class="form-select" required>
                    <option value="">-- Select Year Level --</option>
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                </select>
            </div>
            <button class="btn btn-success w-100">Save</button>
            <a href="{{ route('sections.index') }}" class="btn btn-secondary w-100 mt-2">Back</a>
        </form>
    </div>
</div>
@endsection
