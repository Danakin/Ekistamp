@extends('admin.partials.app')

@section('content')
<div class="list-none flex flex-col">
    @can('update', $post)
    <form method="post" action="{{ route('admin.posts.update', $post)}}" class="flex flex-col">
        @csrf
        @method('PUT')
        <x-input-text name="title" value="{{ old('title', $post->title)}}">
            Title
        </x-input-text>
        <x-input-textarea name="description">
            <x-slot name="value">{{ old('description', $post->description)  }}</x-slot>
            Description
        </x-input-textarea>
        <x-input-checkbox name="published" checked="{{ old('published', $post->published) }}">
            Published
        </x-input-checkbox>
        <button type="submit">Update</button>
    </form>
    @else
    NO
    @endcan
</div>
@endsection
