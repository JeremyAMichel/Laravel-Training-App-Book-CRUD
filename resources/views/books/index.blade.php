@extends('app')

@section('content')
    @foreach ($books as $book)
        {{ $book->title }} de {{ $book->user->name }}
    @endforeach
@endsection
