@extends('layout.app')

@section('title', 'Edit Genre')

@section('content')
    <div class="container mt-4">
        <div class="mb-3">
            <a href="{{ route('genre') }}" class="btn btn-danger">Back</a>
        </div>
        <form action="{{ route('genre.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $data->name }}">
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" cols="30" rows="10" class="form-control">{{ $data->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
