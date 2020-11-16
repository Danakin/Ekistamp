@extends('admin.partials.app')

@section('content')
<div class="list-none flex flex-col">
    <div class="flex flex-col w-full my-2 items-center"
        href="{{ route('admin.stamps.show', [$stamp->prefecture, $stamp->city, $stamp->station, $stamp]) }}">
        @if($stamp->image)
        <img src="{{ Storage::url($stamp->image) }}" alt="">
        @endif
        <div class="w-full">
            {{ $stamp->title }}
        </div>
        <div class="w-full">
            {{ $stamp->description }}
        </div>
        <div class="w-full text-right">Published: {{ $stamp->published ? "✅" : "❌"}}</div>
        @can('update', $stamp)
        <a href="{{ route('admin.stamps.edit', $stamp) }}">Edit</a>
        @endcan
    </div>
</div>
@endsection
