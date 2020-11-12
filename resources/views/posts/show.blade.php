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
<article class="container mx-auto">
    <p>{{ $post->description }}</p>
</article>
@endsection
