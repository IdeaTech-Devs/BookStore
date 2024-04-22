@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Genre</h2>
        <form action="{{ url('updategenre/' . $genre->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $genre->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection