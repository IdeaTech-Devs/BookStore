@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Buku</h2>
        <form action="{{ url('updatebuku/' . $buku->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="gambar" class="form-control" id="gambar" name="gambar" value="{{ $buku->gambar }}">
            </div>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $buku->penulis }}">
            </div>
            <div class="form-group">
                <label for="sinopsis">Sinopsis</label>
                <textarea class="form-control" id="sinopsis" name="sinopsis">{{ $buku->sinopsis }}</textarea>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <select class="form-control" id="genre" name="genre_id">
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}" @if ($genre->id == $buku->genre_id) selected @endif>{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $buku->harga }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
