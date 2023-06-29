@extends('layouts.main')
@section('content')
    @foreach($livingSpaces as $livingSpace)
        @if($livingSpace->type_id === 3)
            {{ $livingSpace->title }}
        @endif
    @endforeach
@endsection
