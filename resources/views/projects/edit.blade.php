@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')
<form action="{{ route('projects.update', $project) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Project Name</label>
        <input type="text" name="project_name" class="form-control" value="{{ old('project_name', $project->project_name) }}" required>
    </div>

    <div class="mb-3">
        <label>Project Description</label>
        <textarea name="project_description" class="form-control" required>{{ old('project_description', $project->project_description) }}</textarea>
    </div>

    <div class="mb-3">
        <label>Assign Employee</label>
        <select name="employee_id" class="form-control" required>
            <option value="">Select Employee</option>
            @foreach($employees as $employee)
            <option value="{{ $employee->id }}" {{ old('employee_id', $project->employee_id) == $employee->id ? 'selected' : '' }}>
                {{ $employee->name }}
            </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection