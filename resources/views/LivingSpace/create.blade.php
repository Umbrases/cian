@extends('layouts.main')
@section('content')
    <form action="" method="post">
        @csrf
        @method('patch')
        <input type="text" id="title" name="title" value="">
        <button type="submit">Изменить</button>
    </form>
@endsection
