@extends('partials.app')

@section('content')
<article class="shadow-md mb-4 p-4 rounded-md">
    <h2 class="text-xl font-bold">{{ $post->title }}</h2>
    <p>{{ $post->description }}</p>
</article>
@endsection
