@extends('layouts.Bone')
@section('title', 'Students | Add New')
@section('content')

    <div class="mt-5 col-8 m-auto">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="student-store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="">Select One</option>
                    <option value="L">Laki Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" name="nis" id="nis" required>
            </div>
            <div class="mb-3">
                <label for="class">Class</label>
                <select name="class_id" id="class" class="form-control" required>
                    <option value="">Select One</option>
                    @foreach ($class as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <div class="input-group">
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-success mt-3 " type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
