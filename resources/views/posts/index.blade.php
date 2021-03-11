@extends('template')

@section('content')
    <h1>Blog</h1>

    @foreach($posts as $posts)
        <h2>{{ $posts->title }}<i>({{ $posts->created_at }})</i></h2>
        <p>{{ $posts->content }}</p>
    @endforeach
@endsection