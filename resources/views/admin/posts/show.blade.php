@extends('admin.partials.app')

@section('content')
<div class="list-none flex flex-col">
    <div class="flex flex-col w-full my-2 items-center" href="{{ route('admin.posts.show', $post) }}">
        @if($post->image)
        <img src="{{ Storage::url($post->image) }}" alt="">
        @endif
        <div class="w-full">
            {{ $post->title }}
        </div>
        <div class="w-full">
            {{ $post->description }}
        </div>
        <div class="w-full text-right">Published: {{ $post->published ? "✅" : "❌"}}</div>
        @can('update', $post)
        <a href="{{ route('admin.posts.edit', $post) }}">Edit</a>
        @endcan
    </div>
</div>
@endsection
