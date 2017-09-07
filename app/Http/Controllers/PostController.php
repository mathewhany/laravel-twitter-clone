<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;
use Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('owner:post', ['only' => ['edit', 'update', 'destroy']]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PostRequest $request)
    {
        Auth::user()->posts()->create($request->all());

        flash()->success('Your post has been published successfully!');

        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post  $post
     * @return Response
     */
    public function edit($post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Post  $post
     * @return Response
     */
    public function update(PostRequest $request, $post)
    {
        $post->update($request->all());

        flash()->success('Your post has been updated successfully!');

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post  $post
     * @return Response
     */
    public function destroy($post)
    {
        $post->delete();

        flash()->success('Your post has been deleted successfully!');

        return back();
    }

    public function share($post)
    {
        Auth::user()->posts()->save(with(new Post)->original()->associate($post));

        flash()->success('Shared successfully.');

        return redirect('/');
    }
}
