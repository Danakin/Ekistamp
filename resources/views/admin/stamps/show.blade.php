@extends('admin.partials.app')

@section('content')
<div class="list-none flex flex-col">
    <div class="flex flex-row flex-wrap w-full my-2 items-center">
        @if($stamp->image)
        {{ Storage::url($stamp->image) }}
        <div class="w-full">
            <img src="{{ Storage::url($stamp->image) }}" alt="" class="max-h-64">
        </div>
        @endif
        <div class="w-full md:w-3/12">
            {{ $stamp->name_jap }}
        </div>
        <div class="w-full md:w-8/12">
            {{ $stamp->name_eng }}
        </div>
        <div class="w-full md:w-1/12 text-right">Published: {{ $stamp->approved ? "✅" : "❌"}}</div>
        @can('update', $stamp)
        <a class="w-full bg-green-400 px-4 py-2 text-center text-white rounded-md hover:bg-green-600"
            href="{{ route('admin.stamps.edit', [$prefecture, $city, $station, $stamp]) }}">Edit</a>
        @endcan
    </div>
</div>
@endsection
