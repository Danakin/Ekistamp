@extends('partials.app')

@section('content')
@foreach ($posts as $post)
<article>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->shortdescription }}</p>
</article>
@endforeach
@endsection
