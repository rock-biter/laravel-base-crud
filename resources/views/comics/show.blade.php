@extends('layouts.main')

@section('content')
    <h1>Io sono comics.show</h1>

    <a href="{{ route('comics.index')}}">Back to comics</a>

    @auth
    
        <a href="{{ route('admin.comics.edit', $comic->id)}}">go to edit</a>
        
    @endauth


    <div>
        <img src="{{$comic->url}}" width="200" alt="">
        <h3>{{$comic->title}}</h3>
        <p>{{$comic->description}}</p>
    </div>

    @auth
        
    <form action="{{ route('admin.comics.destroy', $comic->id) }}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit">elimina</button>
    
    </form>

    @endauth


@endsection


