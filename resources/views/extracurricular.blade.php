@extends('layouts.Bone')
@section('title', 'Extracurricular')
@section('content')
    <h1>ini halaman Exctracurricular</h1>
    {{-- <p>
        {{ $studentList }}
    </p> --}}

    <h3>Exctracurricular List </h3>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ekskulList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td><a href="extracurricular-detail/{{ $data->id }}">Detail</a></td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
