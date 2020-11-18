@extends('partials.app')

@section('content')
<section class="divide-green-100 divide-y-2 container mx-auto">
    @can('update', $comment)
    <form action="{{ route($route, $args) }}" method="POST" class="flex flex-col">
        @csrf
        @method('PUT')
        <input type="hidden" name="commentable_id" id="commentable_id" value="{{ $id }}">
        <input type="hidden" name="commentable_type" id="commentable_type" value="{{ $type }}">
        <x-input-text name="title" value="{{ old('title', $title) }}">
            Title
        </x-input-text>
        <x-input-textarea name="description" value="{{ old('description', $description) }}">
            Description
        </x-input-textarea>
        <div class="flex justify-end">
            <button type="submit" class="bg-ekigreen hover:bg-green-700 px-4 py-2 text-white">Update Comment</button>
        </div>
    </form>
    @else
    You are not allowed to edit this comment.
    @endcan
</section>
@endsection