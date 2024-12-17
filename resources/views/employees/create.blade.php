@extends('layouts.app')

@section('title', 'Add Employee')

@section('content')
<form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Department</label>
        <select name="department" class="form-control" required>
            <option value="IT">IT</option>
            <option value="HR">HR</option>
            <option value="Sales">Sales</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Profile Picture (optional)</label>
        <input type="file" name="profile_picture" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection
