@extends('admin.partials.app')

@section('content')
<div class="list-none flex flex-col">
    @can('update', $post)
    <div class="flex flex-col w-full my-2 items-center" href="{{ route('admin.posts.show', $post) }}">
        <div class="w-full">
            {{ $post->title }}
        </div>
        <div class="w-full">
            {{ $post->description }}
        </div>
        <div class="w-full text-right">Published: {{ $post->published ? "✅" : "❌"}}</div>
        <a href="{{ route('admin.posts.edit', $post) }}">Edit</a>
    </div>
    @else
    NO
    @endcan
</div>
@endsection
