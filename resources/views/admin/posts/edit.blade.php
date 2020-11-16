@extends('admin.partials.app')

@section('content')
<div class="list-none flex flex-col">
    @can('update', $post)
    <livewire:image-upload scope="posts"></livewire:image-upload>
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
        <input type="hidden" id="image" name="image" value="{{ old('image', $post->image) }}">
        <div class=" flex flex-row">
            <button type="submit" class="w-full">Update</button>
            @can('delete', $post)
            <button type="submit" class="w-full" onclick="submit_delete(event)">Delete</button>
            @endcan
        </div>
    </form>
    @can('delete', $post)
    @include('admin.partials.deleteform', ['route' => 'admin.posts.destroy', 'target' => $post])
    @endcan
    @else
    You are not allowed to edit posts by {{ $post->user->name }}
    @endcan
</div>
@endsection
