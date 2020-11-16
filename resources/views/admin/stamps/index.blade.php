@extends('admin.partials.app')

@section('content')
<div class="list-none flex flex-col">
    @foreach ($stamps as $stamp)
    <a class="flex w-full my-2 items-center border-gray-400 border-b-2 border-opacity-25"
        href="{{ route('admin.stamps.show', [$stamp->prefecture, $stamp->city, $stamp->station, $stamp]) }}">
        <div>
            <ruby>{{ $stamp->prefecture->kanji }}<rt>{{ $stamp->prefecture->kana }}</rt></ruby>,
            <ruby>{{ $stamp->city->kanji }}<rt>{{ $stamp->city->kana }}</rt></ruby>,
            <ruby>{{ $stamp->station->kanji }}<rt>{{ $stamp->station->kana }}</rt></ruby>駅
        </div>
        <div class="pl-2">
            {{ $stamp->prefecture->romaji }} Prefecture,
            {{ $stamp->city->romaji }},
            {{ $stamp->station->romaji }} Station
        </div>
        <div class="w-full"></div>
        <div class="w-1/12">{{ $stamp->approved ? "✅" : "❌"}}</div>
    </a>
    @endforeach
</div>
@endsection
