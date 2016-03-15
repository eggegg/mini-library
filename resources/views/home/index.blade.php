@extends('layouts.master')

@section('content')

@if(count($books)>0)
    <p class="help">共有 {{ count($books) }} 本书</p>
    <div class="row">
    @foreach($books as $book)
        <div class="indexBookItem col-md-2 col-sm-3 col-xs-4">

            <a href="{{ URL::route('book.show', $book->id)}}">
                <div class="my_book_cover">
                    <img src="{{ $book->pic }}" /></a>
                </div>
            <a href="{{ URL::route('book.show', $book->id)}}"><span class="bookTitle">{{ $book->title }}</span></a>
            <p>{{ $book->author }}</p>
        </div>
    @endforeach
    </div>
@endif

@endsection