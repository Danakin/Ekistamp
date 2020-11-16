<div>
    <section class="flex flex-col mb-4">
        <h2 class="font-bold text-xl">Prefectures</h2>
        <select class="p-2 border-2 focus:outline-none focus:shadow-outline focus:border-blue-400" name="prefecture_id"
            id="prefecture_id" wire:model="selected_prefecture_id" wire:change="load_cities">
            <option value="0">---</option>
            @foreach ($prefectures as $prefecture)
            <option value="{{ $prefecture->id }}">{{ $prefecture->kanji }} - {{ $prefecture->romaji }}</option>
            @endforeach
        </select>
    </section>
    <section class="flex flex-col mb-4">
        <h2 class="font-bold text-xl">Cities</h2>
        <select class="p-2 border-2 focus:outline-none focus:shadow-outline focus:border-blue-400" name="city_id"
            id="city_id" wire:model="selected_city_id" wire:change="load_stations">
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
        <select class="p-2 border-2 focus:outline-none focus:shadow-outline focus:border-blue-400" name="station_id"
            id="station_id" wire:model="selected_station_id">
            <option value="0">---</option>
            @if ($stations)
            @foreach ($stations as $station)
            <option value="{{ $station->id }}">{{ $station->kanji }} - {{ $station->romaji }}</option>
            @endforeach
            @endif
        </select>
    </section>
</div>
