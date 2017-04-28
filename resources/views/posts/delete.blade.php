@extends('layouts.app')

@section('content')

    <h1>Create posts</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-warning">{{ session('error') }}</div>
    @endif

    @if ($errors->all())
        <div class="alert alert-warning">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif


    <form action="{{ route('post.update', $post->id) }}" method="POST" name="post_form" class="container">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="DELETE" />
        <fieldset>
            <h1>Are you sure to delete this post?</h1>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
@stop
