@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Sections</h2>
    <a href="{{ route('sections.create') }}" class="btn btn-primary">Add Section</a>
</div>
<div class="card p-4">
<table class="table table-bordered table-striped rounded-3 shadow">
    <thead class="table-info">
        <tr>
            <th>ID</th>
            <th>Section Name</th>
            <th>Year Level</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sections as $section)
        <tr>
            <td>{{ $section->id }}</td>
            <td>{{ $section->sectionName }}</td>
            <td>{{ $section->yearLevel }}</td>
            <td>
                <a href="{{ route('sections.edit', $section->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('sections.destroy', $section->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this section?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
