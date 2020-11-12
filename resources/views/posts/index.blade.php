@extends('partials.app')

@section('content')
@foreach ($posts as $post)
<article class="shadow-md mb-4 p-4 rounded-md">
    <a href="{{ route('posts.show', $post) }}">
        <h2 class="text-xl font-bold text-ekigreen hover:text-green-400">{{ $post->title }}</h2>
        <p>{{ $post->shortdescription }}</p>
    </a>
</article>
@endforeach
@endsection
