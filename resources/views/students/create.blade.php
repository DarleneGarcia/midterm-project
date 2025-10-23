@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow rounded-3" style="max-width: 900px; width: 100%;">
        <h2 class="text-center mb-4">Add Student</h2>

        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="row">
                {{-- Left Column --}}
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Student Number</label>
                        <input type="text" name="studentNumber" class="form-control" value="{{ old('studentNumber') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="lname" class="form-control" value="{{ old('lname') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="fname" class="form-control" value="{{ old('fname') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">MI</label>
                        <input type="text" name="mi" class="form-control" value="{{ old('mi') }}">
                    </div>
                </div>

                {{-- Right Column --}}
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contact Number</label>
                        <input type="text" name="contactNumber" class="form-control" value="{{ old('contactNumber') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Year Level</label>
                        <select name="yearLevel" class="form-select" required>
                            <option value="">-- Select Year Level --</option>
                            @foreach($yearLevels as $year)
                                <option value="{{ $year }}" {{ old('yearLevel') == $year ? 'selected' : '' }}>
                                    {{ $year }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Section</label>
                        <select name="section_id" class="form-select" required>
                            <option value="">-- Select Section --</option>
                            @foreach($sections as $section)
                                <option value="{{ $section->id }}" {{ old('section_id') == $section->id ? 'selected' : '' }}>
                                    {{ $section->sectionName }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="m-4">
                <button class="btn btn-success">Save</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
