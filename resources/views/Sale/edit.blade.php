@extends('layouts.main')
@section('content')
    <form action="{{ route('flat.update', $livingSpace->id) }}" method="post">
        @csrf
        @method('patch')
        <input type="text" id="title" name="title" value="{{ $livingSpace->title }}">
        <button type="submit">Изменить</button>
    </form>
@endsection
