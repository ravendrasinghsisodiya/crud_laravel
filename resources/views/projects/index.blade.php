@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Add Project</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Project Name</th>
            <th>Description</th>
            <th>Assigned Employee</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
        <tr>
            <td>{{ $project->project_name }}</td>
            <td>{{ $project->project_description }}</td>
            <td>{{ $project->employee->name }}</td>
            <td>
                <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline">
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
