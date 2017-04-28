@extends('layouts.app')

@section('content')

    <h1>Create posts</h1>

    <form action="{{ route('post.store') }}" method="POST" name="post_form" class="container">
        {!! csrf_field() !!}
        <fieldset>
            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Title of my post">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control" placeholder="Body of my post"></textarea>
            </div>
            <button type="Submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
@stop
