@extends('layout.app')

@section('title', 'Genre')

@section('content')
    <div class="container mt-4">
        <div class="mb-3">
            <a href="{{ route('genre.create') }}" class="btn btn-success">Create +</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>NO</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $item)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td class="text-center">
                            <a href="{{ route('genre.show', $item->id) }}" class="btn btn-primary">SHOW</a>
                            <a href="{{ route('genre.edit', $item->id) }}" class="btn btn-info">EDIT</a>
                            <a href="{{ route('genre.delete', $item->id) }}" class="btn btn-danger">DELETE</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
