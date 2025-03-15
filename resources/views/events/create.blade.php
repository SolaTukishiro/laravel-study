@extends('layouts.default')

@section('title', 'イベント登録')
@section('content')
    @if(session()->has('success'))
        <p>{{ session()->get( 'success' )}}</p>
    @endif
    <form action="{{ route('events.store') }}" method=post>
        @csrf
        <lavel>イベント名: <input type="text" name="title"></lavel>
        <button type="submit">登録</button>
    </form>
@endsection
