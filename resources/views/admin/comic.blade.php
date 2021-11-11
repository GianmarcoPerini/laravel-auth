@extends('layouts.app')

@section('content')
    @foreach ($comics as $comic)
        <img src="{{ $comic->thumb }}" width="150px" alt="">
    @endforeach
@endsection