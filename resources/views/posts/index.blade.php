@extends('partials.app')

@section('content')
<section class="divide-green-100 divide-y-2 container mx-auto">
    @foreach ($posts as $post)
    <article class="mb-4 p-4 transform duration-150 hover:scale-110">
        <a href="{{ route('posts.show', $post) }}">
            <h2 class="text-xl font-bold text-ekigreen hover:text-green-400">{{ $post->title }}</h2>
            <p>{{ $post->shortdescription }}</p>
        </a>
    </article>
    @endforeach
</section>
@endsection
