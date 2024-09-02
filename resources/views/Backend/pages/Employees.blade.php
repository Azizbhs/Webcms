@extends('backend.layouts.app')
@section('content')
    <h1>Employees List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->age }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->salary }}</td>
                    <td>
                        <button class="btn btn-sm btn-outline-warning">
                            <i class="fas fa-edit"></i>
                        </button>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this employee?');">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $employees->links() }}
    <div class="flex-row">
        <button class="button_employee"><a href="/add-employee">Add Employee</a></button>
        <button class="button_employee ms-2">Modify</button>
    </div>
@endsection
