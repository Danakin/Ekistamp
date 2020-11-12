@extends('admin.partials.app')

@section('content')
<div class="list-none flex flex-col">
    @can('update', $post)
    <form method="post" action="{{ route('admin.posts.update', $post)}}" class="flex flex-col"
        enctype="multipart/form-data">
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
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
        <div class="flex flex-row">
            <button type="submit" class="w-full">Update</button>
            <button type="submit" class="w-full" onclick="submit_delete(event)">Delete</button>
        </div>
    </form>
    @can('delete', $post)
    <form method="post" action="{{ route('admin.posts.destroy', $post)}}" id="delete-post">
        @csrf
        @method('DELETE')
    </form>
    <script>
        function submit_delete(e) {
            e.preventDefault()
            const deleteForm = document.getElementById('delete-post');
            deleteForm.submit();
        }

    </script>
    @endcan
    @else
    You are not allowed to edit posts by {{ $post->user->name }}
    @endcan
</div>
@endsection
