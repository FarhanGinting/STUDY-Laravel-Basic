@extends('layouts.Bone')
@section('title', 'Student Detail')
@section('content')

    <h2>Anda sedang melihat data dari siswa yang bernama {{ $student->name }}</h2>

    <div class="mt-5">
        <table class="table table-bordered">
            <tr>
                <th>NIS</th>
                <th>Gender</th>
                <th>Class</th>
                <th>Homeroom Teacher</th>
            </tr>
            <tr>
                <td>{{ $student->nis }}</td>
                <td>
                    @if ($student->gender == 'P')
                        Perempuan
                    @else
                        Laki Laki
                    @endif
                </td>
                <td>{{ $student->class->name }}</td>
                <td>{{ $student->class->homeroomTeacher->name }}</td>
            </tr>
        </table>
    </div>

    <div>
        <h3>Extracurriculars</h3>
        <ol>
            @foreach ($student->extracurriculars as $item)
            <li>{{ $item->name }}</li>
            @endforeach
        </ol>

    </div>
    <style>
        th {
            width: 25%
        }
    </style>

@endsection
