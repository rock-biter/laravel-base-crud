@extends('layouts.main')

@section('content')
    <h1>Io sono comics.show</h1>

    <a href="{{ route('comics.index')}}">Back to comics</a>

    <a href="{{ route('comics.edit', $comic->id)}}">go to edit</a>

    <div>
        <img src="{{$comic->url}}" width="200" alt="">
        <h3>{{$comic->title}}</h3>
        <p>{{$comic->description}}</p>
    </div>

    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit">elimina</button>
    
    </form>

@endsection


