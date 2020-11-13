@extends('partials.app')

@section('content')
<section class="container mx-auto">
    <h2>
        Submit a new Stamp for <span class="font-bold">{{$prefecture->romaji }}, {{$city->romaji }},
            {{ $station->romaji }} Station</span>
    </h2>
    <h2>
        <span class="font-bold"><ruby>{{$prefecture->kanji }}<rt>{{$prefecture->kana }}</rt></ruby>,
            <ruby>{{$city->kanji }}<rt>{{$city->kana }}</rt></ruby>,
            <ruby>{{ $station->kanji }}<rt>{{ $station->kana }}</rt></ruby>駅</span>に新しいスタンプを登録する
    </h2>
    <form action="{{ route('stamps.store', [$prefecture, $city, $station]) }}" method="POST">
        @csrf
        <x-input-text name="name_eng" value="{{ old('name_eng')}}">Name (English)</x-input-text>
        <x-input-text name="name_jap" value="{{ old('name_jap')}}">Name (Japanese)</x-input-text>
        <button type="submit">Submit</button>
    </form>
</section>
@endsection
