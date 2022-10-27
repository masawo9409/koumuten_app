<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            工務店お探し
        </h2>
    </x-slot>

    <p>{{ $constructs }} に対応できる会社一覧</p>

    @foreach ($koumutens as $koumuten)
        <div >
            <a href="{{ route('koumtens.show',$koumuten) }}">{{ $koumuten->name }}</a>
            <br>
            {{ $koumuten->address }}
            <br>
            {{ $koumuten->avairable_area }}
            <br>
            {{ $koumuten->sinchiku }}
            <br>
            {{ $koumuten->contact_address_phone }}
            <br>
            {{ $koumuten->contact_address_mail }} 
        </div>
        -----------------------------
    @endforeach

    <form action="{{ route('button1') }}">
        <button type="submit" name="top" onclick="location.href='{{ route('button1') }}'">
    </form>

    <!-- map表示したい -->
    <div id="map" style="width:1000px; height:600px"></div>
    @include('partial.map')
    <script>
        @if (!empty($koumutens))
            @foreach ($koumutens as $koumuten)
                L.marker([{{ $koumuten->latitude }},{{ $koumuten->longitude }}])
                    .bindPopup('<a href="{{ route('koumtens.show', $koumuten) }}">{{ $koumuten->name }}</a>', {closeButton: false})
                    .addTo(map);
            @endforeach
        @endif
    </script>
</x-app-layout>
