@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <h1>All the posts</h1>
</div>

<div class="container">
    @include('templates.errors-and-success')
    <ul class="list-group">
    @foreach($posts as $post)

        <li class="list-group-item"><a href="{{ route('post.edit', $post->id) }}">{{ $post->title }}</a></li>

    @endforeach
    </ul>
</div>

@stop
