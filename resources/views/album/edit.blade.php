@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Edit Data Album</h3>
    <form action="{{ url('/album/' . $row->album_id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf
        <div class="form-group">
            <label for="">ID ALBUM</label>
            <input type="text" name="album_id" class="form-control" value="{{ $row->album_id }}">
        </div>
        <div class="form-group">
            <label for="">ID ARTIST</label>
            <input type="text" name="artist_id" class="form-control" value="{{ $row->artist_id }}">
        </div>
        <div class="form-group">
            <label for="">NAMA ALBUM</label>
            <input type="text" name="album_name" class="form-control" value="{{ $row->album_name }}">
        </div>
        <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
</div>

@endsection