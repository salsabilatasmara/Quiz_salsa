@extends('layouts.app')
@section('content')
    <div class="container">

        <h3>Daftar Played
        <a href="{{ url('/played/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a></h3>        

        <table class="table table-bordered">    
            <tr>
                <td>ID ARTIST</td>
                <td>ID ALBUM</td>
                <td>ID TRACK</td>
                <td>PLAYED</td>
                <td>EDIT</td>
                <td>DELETE</td>
            </tr>
            @foreach($rows as $row)
            <tr>
                <td>{{ $row->artist_id }}</td>
                <td>{{ $row->album_id }}</td>
                <td>{{ $row->track_id }}</td>
                <td>{{ $row->played }}</td>
                <td><a href="{{ url('played/' . $row->artist_id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>
                <td>
                    <form action="{{ url('/played/' . $row->artist_id) }}" method="POST">
                    <input name="_method" type="hidden" value="DELETE">
                        @csrf
                        <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection