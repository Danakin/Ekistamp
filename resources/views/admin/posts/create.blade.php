@extends('admin.partials.app')

@section('content')
<div class="list-none flex flex-col">
    @can('create', 'App\Models\Post')
    <form method="post" action="{{ route('admin.posts.store')}}" class="flex flex-col" enctype="multipart/form-data">
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
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
        <button type="submit">Post</button>
    </form>
    @else
    NO
    @endcan
</div>
@endsection
