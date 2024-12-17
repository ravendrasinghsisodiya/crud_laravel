@extends('layouts.app')

@section('title', 'Edit Employee')

@section('content')
<form action="{{ route('employees.update', $employee) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $employee->name) }}" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $employee->email) }}" required>
    </div>

    <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" value="{{ old('phone', $employee->phone) }}" required>
    </div>

    <div class="mb-3">
        <label>Department</label>
        <select name="department" class="form-control" required>
            <option value="IT" {{ old('department', $employee->department) == 'IT' ? 'selected' : '' }}>IT</option>
            <option value="HR" {{ old('department', $employee->department) == 'HR' ? 'selected' : '' }}>HR</option>
            <option value="Sales" {{ old('department', $employee->department) == 'Sales' ? 'selected' : '' }}>Sales</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Profile Picture</label>
        <input type="file" name="profile_picture" class="form-control">
        @if ($employee->profile_picture)
        <img src="{{ asset('storage/' . $employee->profile_picture) }}" alt="Profile Picture" width="100" class="mt-2">
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection