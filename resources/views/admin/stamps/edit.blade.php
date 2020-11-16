@extends('admin.partials.app')

@section('content')
<section class="container mx-auto">
    <h2>
        Edit a Stamp {{ $stamp->name_eng }} for <span class="font-bold">{{$prefecture->romaji }}, {{$city->romaji }},
            {{ $station->romaji }} Station</span>
    </h2>
    <h2>
        <span class="font-bold"><ruby>{{$prefecture->kanji }}<rt>{{$prefecture->kana }}</rt></ruby>,
            <ruby>{{$city->kanji }}<rt>{{$city->kana }}</rt></ruby>,
            <ruby>{{ $station->kanji }}<rt>{{ $station->kana }}</rt></ruby>駅</span>の{{ $stamp->name_jap }}スタンプを編集する
    </h2>
    @can('update', $stamp)
    <livewire:image-upload scope="stamps"></livewire:image-upload>
    <form action="{{ route('admin.stamps.update', [$prefecture, $city, $station, $stamp]) }}" method="POST">
        @csrf
        @method('PUT')
        <x-input-text name="name_eng" id="name_eng" value="{{ old('name_eng', $stamp->name_eng)}}">Name (English)
        </x-input-text>
        <x-input-text name="name_jap" id="name_jap" value="{{ old('name_jap', $stamp->name_jap)}}">Name (Japanese)
        </x-input-text>
        <x-input-checkbox name="approved" id="approved" checked="{{ old('approved', $stamp->approved) }}">Show
        </x-input-checkbox>
        <input type="hidden" name="image" id="image" value="{{ old('image', $stamp->image) }}">
        <button class="w-full bg-blue-400 hover:bg-blue-600 px-4 py-2 rounded-md text-white"
            type="submit">Submit</button>
    </form>
    @else
    You are not allowed to update this stamp
    @endcan
</section>
@endsection
