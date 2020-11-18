<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Prefecture;
use App\Models\City;
use App\Models\Station;
use App\Models\Stamp;
use Illuminate\Database\Eloquent\Relations\Relation;
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
    public function create($model, $id)
    {
        return view('comments.create', ['model' => $model, 'id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $model, $id)
    {
        $comment = new Comment([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->user()->id,
        ]);
        if ($model === 'posts') {
            $post = Post::find($id);
            $post->comments()->save($comment);
            return redirect()->route('posts.show', $post);
        } elseif ($model === 'stamps') {
            $stamp = Stamp::find($id);
            $stamp->comments()->save($comment);
            return redirect()->route('stamps.show', [
                $stamp->prefecture,
                $stamp->city,
                $stamp->station,
                $stamp,
            ]);
        }
        return redirect('home');
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
    public function edit(Comment $comment)
    {
        return view('comments.edit', [
            'comment' => $comment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
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

            if ($comment->commentable_type === Post::class) {
                return redirect()->route('posts.show', $comment->commentable);
            } elseif ($comment->commentable_type === Stamp::class) {
                return redirect()->route('stamps.show', [
                    $comment->commentable->prefecture_id,
                    $comment->commentable->city_id,
                    $comment->commentable->station_id,
                    $comment->commentable->id,
                ]);
            } else {
                return redirect()->route('home');
            }
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
