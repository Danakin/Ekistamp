@extends('admin.partials.app')

@section('content')
<div class="list-none flex flex-col">
    @can('create', 'App\Models\Post')
    <livewire:image-upload scope="posts"></livewire:image-upload>
    <form method="post" action="{{ route('admin.posts.store')}}" class="flex flex-col">
        @csrf
        <x-input-text name="title" value="{{ old('title')}}">
            Title
        </x-input-text>
        <x-input-textarea name="description">
            <x-slot name="value">{{ old('description')  }}</x-slot>
            Description
        </x-input-textarea>
        <x-input-checkbox name="published" checked="{{ old('published') }}">
            Published
        </x-input-checkbox>
        <input type="hidden" id="image" name="image">
        <button type="submit">Post</button>
    </form>
    @else
    NO
    @endcan
</div>

<script>
    const filename = document.getElementById('filename')
    const image = document.getElementById('image')

    function setFilename(event) {
        image.value = filename.value
    }
</script>
@endsection
