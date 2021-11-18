@extends('layouts.main')

@section('content')

    <form action="{{ route('admin.comics.store') }}" method="POST">

        @csrf

        <input type="text" name="title" id="title" placeholder="Titolo">

        <input type="text" name="author" id="author" placeholder="Autore">

        <input type="text" name="description" id="description" placeholder="Descrizione">

        <input type="text" name="url" id="url" placeholder="url copertina">

        <button type="reset">cancella tutti i campi</button>
        <button type="submit">crea nuovo comic</button>
    
    
    </form>

@endsection