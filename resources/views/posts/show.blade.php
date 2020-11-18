@extends('partials.app')

@section('content')
@if($post->image)
<div style="background-image: url({{ Storage::url($post->image)}})"
    class="w-full h-80 bg-opacity-50 bg-center bg-cover bg-no-repeat mb-4 flex items-center justify-center">
    <h1 class="text-4xl font-bold bg-gray-200 bg-opacity-75 p-8 ">{{ $post->title }}</h1>
</div>
@else
<h1 class="container mx-auto my-2 text-4xl font-bold">{{ $post->title }}</h1>
@endif
<article class="container mx-auto divide-y-2">
    <p>{{ $post->description }}</p>
    <div class="flex flex-col">
        <h2 class="font-bold">Comments</h2>
        <div class="text-right mb-6">
            <a class="px-4 py-2 bg-ekigreen text-white rounded-md"
                href="{{ route('posts.comments.create', $post) }}">New Comment</a>
        </div>
        @foreach ($post->comments()->orderBy('created_at', 'desc')->get() as $comment)
        <article class="flex flex-col py-3 border-t-2 border-ekigreen">
            <h2 class="font-bold">{{ $comment->title }}</h2>
            <p class="text-right">{{ $comment->user->name }}</p>
            <p>{{ $comment->description }}</p>
        </article>
        @endforeach
    </div>
</article>
@endsection