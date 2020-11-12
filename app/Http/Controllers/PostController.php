<?php

namespace App\Http\Controllers;

use App\Http\Requests\posts\UpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::latest()
            ->where('published', true)
            ->get();
        return view('posts.index')->with(['posts' => $posts]);
    }

    public function indexAdmin()
    {
        $posts = Post::latest()->get();
        return view('admin.posts.index')->with(['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (
            !auth()->user() ||
            auth()
                ->user()
                ->cant('create', Post::class)
        ) {
            abort(403);
        }
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = '';
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $filename =
                    time() .
                    '-' .
                    Str::lower(
                        str_replace(
                            ' ',
                            '_',
                            $request->image->getClientOriginalName()
                        )
                    );
                $path = $request
                    ->file('image')
                    ->storeAs('posts', $filename, 'public');
                // $request['image']->pathname = $path->getPathname();
            }
        }
        if ($request->published) {
            $request['published'] = true;
        } else {
            $request['published'] = false;
        }
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'image' => $path,
            'published' => $request->published,
        ]);
        return redirect()->route('admin.posts.show', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        if ($post->published === true) {
            return view('posts.show', ["post" => $post]);
        } else {
            abort(404);
        }
    }

    public function showAdmin(Post $post)
    {
        return view('admin.posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }
    public function editAdmin(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePost $request, Post $post)
    {
        //
        $path = '';
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                Storage::disk('public')->delete($post->image);
                $filename =
                    time() .
                    '-' .
                    Str::lower(
                        str_replace(
                            ' ',
                            '_',
                            $request->image->getClientOriginalName()
                        )
                    );
                $path = $request
                    ->file('image')
                    ->storeAs('posts', $filename, 'public');
                // $request['image']->pathname = $path->getPathname();
            }
        }
        if ($request->published) {
            $request['published'] = true;
        } else {
            $request['published'] = false;
        }
        $post->title = $request->title;
        $post->description = $request->description;
        $post->published = $request->published;
        $post->image = $path;
        $post->save();
        // dd($post);
        return redirect()->route('admin.posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}
