@extends('layouts.main')
@section('content')
    @foreach($livingSpaces as $livingSpace)
        @if($livingSpace->type_id === 2)
            {{ $livingSpace->title }}
        @endif
    @endforeach
@endsection
