@extends('app')

@section('content')

    <form action="{{ route('books.store') }}" method="POST">

        @csrf

        <input type="text" name="title" id="title">

        <button type="submit">Créer</button>

    </form>
    
@endsection