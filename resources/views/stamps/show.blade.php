@extends('partials.app')

@section('content')
<section class="container mx-auto">
    <h2>
        Stamp <span class="font-bold">{{ $stamp->name_eng }}</span> for {{$prefecture->romaji }}, {{$city->romaji }},
        {{ $station->romaji }} Station</span>
    </h2>
    @if(!$stamp->approved)
    <h2 class="text-red-500 font-bold">Waiting for approval</h2>
    @endif
    <h2>
        <ruby>{{$prefecture->kanji }}<rt>{{$prefecture->kana }}</rt></ruby>,
        <ruby>{{$city->kanji }}<rt>{{$city->kana }}</rt></ruby>,
        <ruby>{{ $station->kanji }}<rt>{{ $station->kana }}</rt></ruby>駅の<span
            class="font-bold">{{ $stamp->name_jap }}</span>のスタンプ
    </h2>
    <article>
        <img src="{{ Storage::url($stamp->image) }}" alt="Stamp {{ $stamp->name_eng }}">
        <livewire:own-stamp :stamp="$stamp"></livewire:own-stamp>
    </article>
</section>
@endsection
