@extends('app')

@section('content')

    <form action="{{ route('books.update', $book) }}" method="POST">

        @csrf

        @method('PUT')

        <input type="text" name="title" id="title" value="{{ $book->title }}">

        <button type="submit">Éditer</button>

        <button type="submit">Supprimer</button>

    </form>
    
@endsection