<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-indigo-800 leading-tight">
            工務店お探し
        </h2>
    </x-slot>

    <div class="h-2">
        <div class="px-4 md:px-12 pb-3 mt-5 ml-3 mr-3 bg-white shadow-md">
            <div class="font-bold pb-5 text-lg pt-3 pb-3 font-bold text-gray-700">
                <p>{{ $constructs }} に対応できる会社一覧</p>
            </div>
            <div class="flex">
                <div class="overflow-y-auto h-50">
                    <div class="pt-3 pb-3">
                        @foreach ($koumutens as $koumuten)
                            <div class="bg-gray-100 py-4 px-4 mr-5 hover:text-gray-500">
                                <a href="{{ route('koumtens.show', $koumuten) }}">
                                    <div class="font-bold">
                                        {{ $koumuten->name }}
                                    </div>
                                    <div class="block text-gray-700 text-sm mt-2">{{ $koumuten->address }}</div>
                                    <div class="block text-gray-700 text-sm mt-2">対応可能エリア</div>
                                    <h3>{{ $koumuten->avairable_area }}</h3>
                                    {{-- 工事中 --}}
                                    <div class="block text-gray-700 text-sm mt-2">{{ $constructs }}工事の予算(万円)</div>
                                    @if ($constructs == '新築')
                                        <h3>{{ $koumuten->sinchiku }}~</h3>
                                    @elseif ($constructs == 'リフォーム')
                                        <h3>{{ $koumuten->reform }}~</h3>
                                    @elseif ($constructs == '修繕(雨漏り)')
                                        <h3>{{ $koumuten->repair_amamori }}~</h3>
                                    @elseif ($constructs == '修繕(外壁修理)')
                                        <h3>{{ $koumuten->repair_gaiheki }}~</h3>
                                    @elseif ($constructs == '修繕(内装修理)')
                                        <h3>{{ $koumuten->repair_naisou }}~</h3>
                                    @elseif ($constructs == '修繕(水漏れ)')
                                        <h3>{{ $koumuten->repair_mizumore }}~</h3>
                                    @elseif ($constructs == '修繕(エアコン修理)')
                                        <h3>{{ $koumuten->repair_aircon }}~</h3>
                                    @endif

                                    <div class="block text-gray-700 text-sm mt-2">電話番号</div>
                                    <h3>{{ $koumuten->contact_address_phone }}</h3>
                                    <div class="block text-gray-700 text-sm mt-2">メールアドレス</div>
                                    <h3>{{ $koumuten->contact_address_mail }}</h3>
                                </a>
                            </div>
                            <br>
                        @endforeach
                        <div class="block text-gray-700 text-sm mb-2 hover:text-gray-500">
                            <button input="submit" onclick="location.href='{{ route('top') }}'">TOPページに戻る</button>
                        </div>

                        <form action="{{ route('button1') }}">
                            <button type="submit" name="top" onclick="location.href='{{ route('button1') }}'">
                        </form>
                    </div>
                </div>
                <div class="mt-3 h-2">
                    {{-- <input type="text" id="address" />
                <button id="search">検索</button> --}}
                    <div id="map" style="width:1000px; height:600px" class="flex"></div>
                </div>
            </div>
        </div>
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
