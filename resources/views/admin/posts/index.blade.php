@extends('admin.partials.app')

@section('content')
<div class="list-none flex flex-col">
    @foreach ($posts as $post)
    <a class="flex w-full my-2 items-center border-gray-400 border-b-2 border-opacity-25"
        href="{{ route('admin.posts.show', $post) }}">
        <div class="w-full">
            {{ $post->title }}
        </div>
        <div class="w-1/12">{{ $post->published ? "✅" : "❌"}}</div>
    </a>
    @endforeach
</div>
@endsection
