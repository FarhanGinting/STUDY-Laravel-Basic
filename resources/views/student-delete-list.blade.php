@extends('layouts.Bone')
@section('title', 'Student | Delete List')
@section('content')
    <h1>Ini Halaman Student Yang Sudah Di Delete</h1>
    <div class="my-1">
        <a href="/students" class="btn btn-primary mt-5">Kembali</a>
    </div>
    
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>NIS</th>
                    <th>Deleted At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>{{ $item->nis }}</td>
                        <td>{{ $item->deleted_at }}</td>
                        <td>
                            <a href="/student/{{ $item->id }}/restore">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
