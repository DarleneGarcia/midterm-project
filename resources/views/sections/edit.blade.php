@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow rounded-3" style="width: 28rem;">
        <h2 class="text-center mb-3">Edit Section</h2>
        <form action="{{ route('sections.update', $section->id) }}" method="POST">
            @csrf @method('PUT')
            <div class="mb-3">
                <label class="form-label">Section Name</label>
                <input type="text" name="sectionName" class="form-control" value="{{ $section->sectionName }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Year Level</label>
                <select name="yearLevel" class="form-select" required>
                    <option value="1" {{ $section->yearLevel == '1' ? 'selected' : '' }}>1st Year</option>
                    <option value="2" {{ $section->yearLevel == '2' ? 'selected' : '' }}>2nd Year</option>
                    <option value="3" {{ $section->yearLevel == '3' ? 'selected' : '' }}>3rd Year</option>
                    <option value="4" {{ $section->yearLevel == '4' ? 'selected' : '' }}>4th Year</option>
                </select>
            </div>
            <button class="btn btn-primary w-100">Update</button>
            <a href="{{ route('sections.index') }}" class="btn btn-secondary w-100 mt-2">Back</a>
        </form>
    </div>
</div>
@endsection
