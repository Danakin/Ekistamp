@extends('partials.app')

@section('content')
<section class="container mx-auto">
    <table class="table-auto w-full">
        <thead>
            <th class="px-4 py-2">Prefecture</th>
            <th class="px-4 py-2">City</th>
            <th class="px-4 py-2">Station</th>
            <th class="px-4 py-2">Stamp</th>
        </thead>
        <tbody>
            @foreach ($stamps as $stamp)
            <tr class="{{ $loop->index % 2 === 0 ? 'bg-gray-200' : '' }}">
                <td class=" border px-4 py2 ">{{ $stamp->prefecture->romaji }}</td>
                <td class=" border px-4 py2">{{ $stamp->city->romaji }}</td>
                <td class="border px-4 py2">{{ $stamp->station->romaji }}</td>
                <td class="border px-4 py2">{{ $stamp->name_eng }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
