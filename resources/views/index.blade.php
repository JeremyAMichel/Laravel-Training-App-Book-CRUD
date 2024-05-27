@extends('app')

@section('content')
    <h1>Hello World</h1>

    <a href="{{ route('books.create') }}">Ajouter un livre</a>
@endsection
