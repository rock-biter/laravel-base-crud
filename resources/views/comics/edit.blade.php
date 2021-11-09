@extends('layouts.main')

@section('content')


    <form action="{{ route('comics.update', $comic->id) }}" method="POST">

        @csrf
        @method('PATCH')

        <input value="{{ $comic->title }}" type="text" name="title" id="title" placeholder="Titolo">

        <input value="{{ $comic->author }}" type="text" name="author" id="author" placeholder="Autore">

        <input value="{{ $comic->description }}" type="text" name="description" id="description" placeholder="Descrizione">

        <input value="{{ $comic->url }}" type="text" name="url" id="url" placeholder="url copertina">

        <button type="reset">cancella tutti i campi</button>
        <button type="submit">modifica</button>
    
    
    </form>

@endsection