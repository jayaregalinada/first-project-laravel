<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Requests\PostRequestUpdate;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index')->with('posts', Post::all());
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        Post::create($request->only(['body', 'title']));

        return redirect(route('post.index'))->withSuccess('Post is successfully created!');
    }

    public function update(PostRequestUpdate $request, Post $post)
    {
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        try {
            if (! $post->save()) {
                return redirect(route('post.edit', $post->id))->with('error', 'Something bad happen')->withErrors();
            }

            return redirect(route('post.edit', $post->id))->withSuccess('Successfully updated!');
        } catch(QueryException $e) {
            // dd($e);
            return redirect(route('post.edit', $post->id))->with('error', 'Something bad happen');
        }
    }

    public function edit(Post $post)
    {
        return view('posts.update')->with('post', $post);
    }

    public function destroy(Post $post)
    {
        // Post::delete($id);
        $post->delete();

        return redirect(route('post.index'))->with('success', 'Successfully deleted!');
    }

    public function delete(Post $post)
    {
        return view('posts.delete')->with('post', $post);
    }
}
