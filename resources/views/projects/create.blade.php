@extends('layouts.app')

@section('title', 'Create Project')

@section('content')
<form action="{{ route('projects.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Project Name</label>
        <input type="text" name="project_name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Project Description</label>
        <textarea name="project_description" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label>Assign Employee</label>
        <select name="employee_id" class="form-control" required>
            <option value="">Select Employee</option>
            @foreach($employees as $employee)
            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection