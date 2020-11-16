<div class="container mx-auto p-4">
    <section class="flex flex-col mb-4">
        <h2 class="font-bold text-xl">Prefectures</h2>
        <select class="p-2 border-2 focus:outline-none focus:shadow-outline focus:border-blue-400" name="prefecture"
            id="prefecture" wire:model="selected_prefecture_id" wire:change="load_cities" class="">
            <option value="0">---</option>
            @foreach ($prefectures as $prefecture)
            <option value="{{ $prefecture->id }}">{{ $prefecture->kanji }} - {{ $prefecture->romaji }}</option>
            @endforeach
        </select>
    </section>
    <section class="flex flex-col mb-4">
        <h2 class="font-bold text-xl">Cities</h2>
        <select class="p-2 border-2 focus:outline-none focus:shadow-outline focus:border-blue-400" name="city" id="city"
            wire:model="selected_city_id" wire:change="load_stations">
            <option value="0">---</option>
            @if ($cities)
            @foreach ($cities as $city)
            <option value="{{ $city->id }}">{{ $city->kanji }} - {{ $city->romaji }}</option>
            @endforeach
            @endif
        </select>
    </section>
    <section class="flex flex-col mb-4">
        <h2 class="font-bold text-xl">Stations</h2>
        <select class="p-2 border-2 focus:outline-none focus:shadow-outline focus:border-blue-400" name="station"
            id="station" wire:model="selected_station_id" wire:change="load_stamps">
            <option value="0">---</option>
            @if ($stations)
            @foreach ($stations as $station)
            <option value="{{ $station->id }}">{{ $station->kanji }} - {{ $station->romaji }}</option>
            @endforeach
            @endif
        </select>
    </section>

    @if(intval($selected_prefecture_id) > 0 && intval($selected_city_id) > 0 && intval($selected_station_id) > 0)
    <a href="{{ route('stamps.create', [$selected_prefecture_id, $selected_city_id, $selected_station_id]) }}"
        class="px-4 py-2 bg-ekigreen rounded-md">Submit a new Stamp</a>
    @endif

    @if($stamps)
    @if(count($stamps) > 0)
    <section class="mt-4 flex flex-col">
        @foreach($stamps as $stamp)
        <a
            href="{{ route('stamps.show', [$selected_prefecture, $selected_city, $selected_station, $stamp]) }}">{{ $stamp->name_eng }}</a>
        @endforeach
    </section>
    @else
    No stamps
    @endif
    @else
    Nothing here yet
    @endif
</div>
