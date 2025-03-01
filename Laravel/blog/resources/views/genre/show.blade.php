@extends('layout.app')

@section('title', 'Show Genre')

@section('content')
    <div class="container mt-4">
        <div class="mb-3">
            <a href="{{ route('genre') }}" class="btn btn-danger">Back</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>NO</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">{{ $data->id }}</td>
                    <td class="text-center">{{ $data->name }}</td>
                    <td>{{ $data->description }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
