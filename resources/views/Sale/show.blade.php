@extends('layouts.main')
@section('content')
    {{ $livingSpace->title }}
    <a href="{{ route("flat.edit", $livingSpace->id) }}">sadd</a>
@endsection
