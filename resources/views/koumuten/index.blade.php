<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-indigo-800 leading-tight">
            工務店お探し
        </h2>
    </x-slot>
    <div class="container max-w-7xl px-4 md:px-12 pb-3 mt-5 ml-3 mr-3 bg-white shadow-md">
        <div class="container pt-3 pb-3">
            <div class="font-bold pb-5">
                <p>{{ $constructs }} に対応できる会社一覧</p>
            </div>

            @foreach ($koumutens as $koumuten)
                <div class="bg-gray-100 max-w-2xl py-4 px-4">
                    <div class="font-bold">
                        <a href="{{ route('koumtens.show', $koumuten) }}">{{ $koumuten->name }}</a>
                    </div>
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
                <br>
            @endforeach

            <form action="{{ route('button1') }}">
                <button type="submit" name="top" onclick="location.href='{{ route('button1') }}'">
            </form>
        </div>
        <div id="map" style="width:1000px; height:600px"></div>
    </div>


    @include('partial.map')
    <script>
        @if (!empty($koumutens))
            @foreach ($koumutens as $koumuten)
                L.marker([{{ $koumuten->latitude }}, {{ $koumuten->longitude }}])
                    .bindPopup('<a href="{{ route('koumtens.show', $koumuten) }}">{{ $koumuten->name }}</a>', {
                        closeButton: false
                    })
                    .addTo(map);
            @endforeach
        @endif
    </script>
</x-app-layout>
