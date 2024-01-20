@extends('layouts.Bone')
@section('title', 'Teacher')
@section('content')
    <h1>ini halaman Teacher</h1>
    <h3>Teacher List</h3>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacherList as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td><a href="teacher-detail/{{ $item->id }}">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
