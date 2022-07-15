@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Edit Data Track</h3>
    <form action="{{ url('/track/' . $row->track_id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf
        <div class="form-group">
            <label for="">ID TRACK</label>
            <input type="text" name="track_id" class="form-control" value="{{ $row->track_id }}">
        </div>
        <div class="form-group">
            <label for="">JUDUL TRACK</label>
            <input type="text" name="track_name" class="form-control" value="{{ $row->track_name }}">
        </div>
        <div class="form-group">
            <label for="">ID ARTIST</label>
            <input type="text" name="artist_id" class="form-control" value="{{ $row->artist_id }}">
        </div>
        <div class="form-group">
            <label for="">ID ALBUM</label>
            <input type="text" name="album_id" class="form-control" value="{{ $row->album_id }}">
        </div>
        <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
</div>

@endsection