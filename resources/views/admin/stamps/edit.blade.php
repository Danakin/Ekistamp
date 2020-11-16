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
    <form action="{{ route('admin.stamps.update', [$prefecture, $city, $station, $stamp]) }}" method="POST"
        id="updateForm">
        @csrf
        @method('PUT')
        <x-input-text name="name_eng" id="name_eng" value="{{ old('name_eng', $stamp->name_eng)}}">Name (English)
        </x-input-text>
        <x-input-text name="name_jap" id="name_jap" value="{{ old('name_jap', $stamp->name_jap)}}">Name (Japanese)
        </x-input-text>
        <x-input-checkbox name="approved" id="approved" checked="{{ old('approved', $stamp->approved) }}">Show
        </x-input-checkbox>
        <input type="hidden" name="image" id="image" value="{{ old('image', $stamp->image) }}">
        <div class="flex flex-row flex-wrap">
            <button class="w-full md:w-6/12 bg-blue-400 hover:bg-blue-600 px-4 py-2 rounded-md text-white"
                type="submit">Update</button>
            @can('delete', $stamp)
            <button class="w-full md:w-6/12 bg-red-400 hover:bg-red-600 px-4 py-2 rounded-md text-white" type="submit"
                onclick="submit_delete(event)">Delete</button>
            @endcan
        </div>
    </form>

    @else
    You are not allowed to update this stamp
    @endcan
    @can('delete', $stamp)
    @include('admin.partials.deleteform', ['route' => 'admin.stamps.destroy', 'target' => [$prefecture, $city, $station,
    $stamp]])
    @endcan
</section>
@endsection
