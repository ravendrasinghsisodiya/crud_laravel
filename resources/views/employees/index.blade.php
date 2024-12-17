@extends('layouts.app')

@section('title', 'Employees')

@section('content')
<a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Add Employee</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Profile Picture</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Department</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
        <tr>
            <td>
                @if($employee->profile_picture)
                <img src="{{ asset('storage/' . $employee->profile_picture) }}" alt="Profile Picture" width="80" height="80" class="rounded-5">
                @else
                <span>No Image</span>
                @endif
            </td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->phone }}</td>
            <td>{{ $employee->department }}</td>
            <td>
                <a href="{{ route('employees.edit', $employee) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('employees.destroy', $employee) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection