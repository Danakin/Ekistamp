@extends('partials.app')

@section('content')
<article>
    <h2 class="text-xl font-bold">{{ $post->title }}</h2>
    <p>{{ $post->description }}</p>
</article>
@endsection
