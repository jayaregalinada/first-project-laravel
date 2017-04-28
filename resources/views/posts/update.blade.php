@extends('layouts.app')

@section('content')

    <h1>Edit post #{{ $post->id }}</h1>

    @include('templates.errors-and-success')


    <form action="{{ route('post.update', $post->id) }}" method="POST" name="post_form" class="container">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT" />
        <fieldset>
            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Title of my post" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control" placeholder="Body of my post">{{ $post->body }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('post.delete', $post->id) }}" class="btn btn-warning">Delete</a>
        </fieldset>
    </form>
@stop
