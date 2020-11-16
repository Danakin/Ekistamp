<div>
    <select name="prefecture" id="prefecture" wire:model="selected_prefecture_id">
        <option value="0">---</option>
        @foreach ($prefectures as $prefecture)
        <option value="{{ $prefecture->id }}">{{ $prefecture->kanji }} - {{ $prefecture->romaji }}</option>
        @endforeach
    </select>

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
