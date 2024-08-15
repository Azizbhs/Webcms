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
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
