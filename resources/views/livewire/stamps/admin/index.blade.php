<div>
    <div class="flex flex-col">
        <label class="w-full" for="prefecture">Prefecture</label>
        <select
            class="w-full border-2 rounded-md border-gray-200 focus:outline-none focus:shadow-outline focus:border-blue-400 p-2 "
            name="prefecture" id="prefecture" wire:model="selected_prefecture_id" wire:change="load_cities">
            <option value="0">---</option>
            @foreach ($prefectures as $prefecture)
            <option value="{{ $prefecture->id }}">{{ $prefecture->kanji }} - {{ $prefecture->romaji }}</option>
            @endforeach
        </select>
    </div>
    <div class="flex flex-col">
        <label class="w-full" for="city">City</label>
        <select
            class="w-full border-2 rounded-md border-gray-200 focus:outline-none focus:shadow-outline focus:border-blue-400 p-2 "
            name="city" id="city" wire:model="selected_city_id" wire:change="load_stations">
            <option value="0">---</option>
            @foreach ($cities as $city)
            <option value="{{ $city->id }}">{{ $city->kanji }} - {{ $city->romaji }}</option>
            @endforeach
        </select>
    </div>
    <div class="flex flex-col">
        <label class="w-full" for="station">Station</label>
        <select
            class="w-full border-2 rounded-md border-gray-200 focus:outline-none focus:shadow-outline focus:border-blue-400 p-2 "
            name="station" id="station" wire:model="selected_station_id">
            <option value="0">---</option>
            @foreach ($stations as $station)
            <option value="{{ $station->id }}">{{ $station->kanji }} - {{ $station->romaji }}</option>
            @endforeach
        </select>
    </div>

    <div class="list-none flex flex-col">
        @foreach ($stamps as $stamp)
        <a class="flex flex-wrap w-full my-2 items-center border-gray-400 border-b-2 border-opacity-25 md:divide-x-2"
            href="{{ route('admin.stamps.show', [$stamp->prefecture, $stamp->city, $stamp->station, $stamp]) }}">
            <div class="w-full md:w-3/12 px-2">
                <ruby>{{ $stamp->prefecture->kanji }}<rt>{{ $stamp->prefecture->kana }}</rt></ruby>,
                <ruby>{{ $stamp->city->kanji }}<rt>{{ $stamp->city->kana }}</rt></ruby>,
                <ruby>{{ $stamp->station->kanji }}<rt>{{ $stamp->station->kana }}</rt></ruby>駅
            </div>
            <div class="w-full md:w-8/12 px-2">
                {{ $stamp->prefecture->romaji }} Prefecture,
                {{ $stamp->city->romaji }},
                {{ $stamp->station->romaji }} Station
            </div>
            <div class="w-full md:w-1/12 px-2">{{ $stamp->approved ? "✅" : "❌"}}</div>
        </a>
        @endforeach
        {{ $stamps->links() }}
    </div>
</div>
