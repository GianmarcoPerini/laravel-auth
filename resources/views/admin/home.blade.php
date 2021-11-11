@extends('layouts.app')

@section('content')
    <h1 class="text-center">HOME PAGE</h1>

    <a class="text-center d-block" href="{{route('admin.comic.index')}}"> Comics</a>
@endsection
