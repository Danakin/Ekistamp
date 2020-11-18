<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Prefecture;
use App\Models\City;
use App\Models\Station;
use App\Models\Stamp;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPost(Post $post)
    {
        //
        return view('comments.create', [
            'id' => $post->id,
            'route' => 'posts.comments.store',
            'args' => $post,
            'type' => Post::class,
        ]);
    }
    public function createStamp(
        Prefecture $prefecture,
        City $city,
        Station $station,
        Stamp $stamp
    ) {
        //
        return view('comments.create', [
            'id' => $stamp->id,
            'route' => 'stamps.comments.store',
            'args' => [$prefecture, $city, $station, $stamp],
            'type' => Stamp::class,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePost(Request $request, Post $post)
    {
        //
        if (
            auth()
                ->user()
                ->can('create', Comment::class)
        ) {
            $request->validate([
                'commentable_id' => 'required|integer',
                'commentable_type' => 'required|string',
                'title' => 'required|string',
                'description' => 'required|string',
            ]);
            $request['user_id'] = auth()->user()->id;

            $comment = Comment::create($request->all());
            return redirect()->route('posts.show', $post);
        }
    }
    public function storeStamp(
        Request $request,
        Prefecture $prefecture,
        City $city,
        Station $station,
        Stamp $stamp
    ) {
        //
        if (
            auth()
                ->user()
                ->can('create', Comment::class)
        ) {
            $request->validate([
                'commentable_id' => 'required|integer',
                'commentable_type' => 'required|string',
                'title' => 'required|string',
                'description' => 'required|string',
            ]);
            $request['user_id'] = auth()->user()->id;

            $comment = Comment::create($request->all());
            return redirect()->route('stamps.show', [
                $prefecture,
                $city,
                $station,
                $stamp,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function editPost(Post $post, Comment $comment)
    {
        //
        return view('comments.edit', [
            'id' => $post->id,
            'comment' => $comment,
            'route' => 'posts.comments.update',
            'args' => [$post, $comment],
            'type' => Post::class,
            'title' => $comment->title,
            'description' => $comment->description,
        ]);
    }
    public function editStamp(
        Prefecture $prefecture,
        City $city,
        Station $station,
        Stamp $stamp,
        Comment $comment
    ) {
        //
        return view('comments.edit', [
            'id' => $stamp->id,
            'comment' => $comment,
            'route' => 'stamps.comments.update',
            'args' => [$prefecture, $city, $station, $stamp, $comment],
            'type' => Stamp::class,
            'title' => $comment->title,
            'description' => $comment->description,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function updatePost(Request $request, Post $post, Comment $comment)
    {
        //
        if (
            auth()
                ->user()
                ->can('update', $comment)
        ) {
            $request->validate([
                'title' => 'required|string',
                'description' => 'required|string',
            ]);
            $comment->title = $request->title;
            $comment->description = $request->description;
            $comment->save();
            return redirect()->route('posts.show', [
                $post,
                "title" => $comment->title,
                "description" => $comment->description,
            ]);
        }
    }

    public function updateStamp(
        Request $request,
        Prefecture $prefecture,
        City $city,
        Station $station,
        Stamp $stamp,
        Comment $comment
    ) {
        //
        if (
            auth()
                ->user()
                ->can('update', $comment)
        ) {
            $request->validate([
                'title' => 'required|string',
                'description' => 'required|string',
            ]);

            $comment->title = $request->title;
            $comment->description = $request->description;
            $comment->save();
            return redirect()->route('stamps.show', [
                $prefecture,
                $city,
                $station,
                $stamp,
                "title" => $comment->title,
                "description" => $comment->description,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
