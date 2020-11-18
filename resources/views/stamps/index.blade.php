@extends('partials.app')

@section('content')
<section class="container mx-auto">
    <div class="flex flex-row flex-wrap">
        <div class="w-full md:w-2/12 font-bold py-2 px-4 md:px-0">
            Preview
        </div>
        <div class="w-full md:w-3/12 font-bold px-4 py-2">Prefecture</div>
        <div class="w-full md:w-3/12 font-bold px-4 py-2">City</div>
        <div class="w-full md:w-2/12 font-bold px-4 py-2">Station</div>
        <div class="w-full md:w-2/12 font-bold px-4 py-2">Stamp</div>
    </div>
    @foreach ($stamps as $stamp)
    <a href="{{ route('stamps.show', [$stamp->prefecture, $stamp->city, $stamp->station, $stamp]) }}"
        class="flex flex-row flex-wrap {{ $loop->index % 2 === 0 ? 'bg-gray-200' : '' }} hover:bg-gray-300">
        <div class="w-full md:w-2/12 flex justify-center md:justify-start">
            <img src="{{ Storage::url($stamp->image) }}" alt="Stamp preview"
                class="max-w-full block max-h-48 md:max-h-32">
        </div>
        <div class="flex flex-row justify-center items-center md:flex-col w-full md:w-3/12 px-4 py2">
            <p class="w-full">{{ $stamp->prefecture->romaji }}</p>
            <p class="w-full">{{ $stamp->prefecture->kanji }}</p>
        </div>
        <div class="flex flex-row justify-center items-center md:flex-col w-full md:w-3/12 px-4 py2">
            <p class="w-full">{{ $stamp->city->romaji }}</p>
            <p class="w-full">{{ $stamp->city->kanji }}</p>
        </div>
        <div class="flex flex-row justify-center items-center md:flex-col w-full md:w-2/12 px-4 py2">
            <p class="w-full">{{ $stamp->station->romaji }}</p>
            <p class="w-full">{{ $stamp->station->kanji }}</p>
        </div>
        <div class="flex flex-row justify-center items-center md:flex-col w-full md:w-2/12 px-4 py2">
            <p class="w-full">{{ $stamp->name_eng }}</p>
            <p class="w-full">{{ $stamp->name_jap }}</p>
        </div>
    </a>
    @endforeach
    {{ $stamps->links() }}
</section>

@endsection