@extends('layouts.default')

@section('title', 'イベント登録')
@section('content')
<form action="{{ route('events.store') }}" method=post>
    @csrf
    <lavel>イベント名: <input type="text" name="title"></lavel>
    <button type="submit">登録</button>
</form>
@endsection
