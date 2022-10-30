<!-- 会社詳細が表示されるページ -->
<x-app-layout>
    <div class="px-4 md:px-12 pb-3 mt-5 ml-3 mr-3 bg-white shadow-md">
        <div class="container text-lg pt-3 pb-3 font-bold text-gray-700">
            <p>{{ $koumten->name }}</p>
        </div>
        <div class="container flex">
            <div>
                <div class="block text-gray-700  mt-5 border-l-2 pl-2 mb-2 mr-5">住所</div>
                {{ $koumten->address }}
                <div class="block text-gray-700  mt-5 mb-1 border-l-2 pl-2 mb-2">対応可能工事一覧 (単位:万円)</div>
                <table>
                    <tr>
                        <td>新築&nbsp;&nbsp;</td>
                        <td>{{ $koumten->sinchiku }}&nbsp;~</td>
                    </tr>
                    <tr>
                        <td>リフォーム&nbsp;&nbsp;</td>
                        <td>{{ $koumten->reform }}&nbsp;~</td>
                    </tr>
                    <tr>
                        <td>修理(雨漏り)&nbsp;&nbsp;</td>
                        <td>{{ $koumten->repair_amamori }}&nbsp;~</td>
                    </tr>
                    <tr>
                        <td>修理(外壁)&nbsp;&nbsp;</td>
                        <td>{{ $koumten->repair_gaiheki }}&nbsp;~</td>
                    </tr>
                    <tr>
                        <td>修理(内装)&nbsp;&nbsp;</td>
                        <td>{{ $koumten->repair_naisou }}&nbsp;~</td>
                    </tr>
                    <tr>
                        <td>修理(水漏れ)&nbsp;&nbsp;</td>
                        <td>{{ $koumten->repair_mizumore }}&nbsp;~</td>
                    </tr>
                    <tr>
                        <td>修理(エアコン)&nbsp;&nbsp;</td>
                        <td>{{ $koumten->repair_aircon }}&nbsp;~</td>
                    </tr>
                </table>
                <div class="block text-gray-700  mt-5 border-l-2 pl-2 mb-2">対応可能エリア</div>
                <h3>{{ $koumten->avairable_area }}</h3>
                <div class="block text-gray-700  mt-5 border-l-2 pl-2 mb-2">電話番号</div>
                <h3>{{ $koumten->contact_address_phone }}</h3>
                <div class="block text-gray-700 mt-5 border-l-2 pl-2 mb-2">メールアドレス</div>
                <h3>{{ $koumten->contact_address_mail }}</h3>
                {{-- <form action="{{ route('button1') }}" method="GET">
            <input type="submit" value="会社一覧に戻る">
        </form> --}}
            </div>
            <br>
            <div class="mt-3 ml-3 max-w-full">
                <div id="map" style="width:1000px; height:600px"></div>
            </div>
        </div>
        <div class="flex justfy-content">
            @auth
                <div class="block text-gray-700 text-sm mb-7 mt-5 hover:text-gray-500 mr-3 ">
                    <form action="{{ route('koumtens.edit', $koumten) }}">
                        <button type="submit" name="top" onclick="location.href=">会社情報を編集する</button>
                    </form>
                </div>
            @endauth
            @auth
            <div class="block text-gray-700 mb-7 mt-5 hover:text-gray-500 mr-3 ">
                <form action="{{ route('koumtens.destroy', $koumten) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" name="top" onclick="location.href=">会社情報を削除する</button>
                </form>
            </div>
            @endauth
            <div class="block text-gray-700 text-sm mb-7 mt-5 hover:text-gray-500 mr-3 ">
            <a href="{{ url()->previous() }}">戻る</a>
            </div>
        </div>

        @include('partial.map')
        <script>
            @if (!empty($koumten))
                L.marker([{{ $koumten->latitude }}, {{ $koumten->longitude }}])
                    .bindPopup("{{ $koumten->name }}", {
                        closeButton: false
                    })
                    .addTo(map);
            @endif
        </script>
</x-app-layout>
