<x-app-layout>
    <!-- 依頼内容選択画面 -->
    <div class="container max-w-7xl px-4 md:px-12 pb-3 mt-5 ml-3 mr-3 bg-white shadow-md">
        <div class="container pt-3 pb-3 font-bold text-gray-700">
            <p>依頼内容を選択してください</p>
        </div>
        <div class="button01">
            <form action="{{ route('button1') }}" method='get'>
                @csrf
                <button type="submit" name="repair_amamori" onclick="location.href='{{ route('button1') }}'">
                    <a>修理(雨漏り)</a>
                </button>
                <br>
                <br>
                <button type="submit" name="repair_gaiheki" onclick="location.href='{{ route('button1') }}'">
                    <a>修理(外壁修理)</a>
                </button>
                <br>
                <br>
                <button type="submit" name="repair_naisou" onclick="location.href='{{ route('button1') }}'">
                    <a>修理(内装修理)</a>
                </button>
                <br>
                <br>
                <button type="submit" name="repair_mizumore" onclick="location.href='{{ route('button1') }}'">
                    <a>修理(水漏れ)</a>
                </button>
                <br>
                <br>
                <button type="submit" name="repair_aircon" onclick="location.href='{{ route('button1') }}'">
                    <a>修理(エアコン修理)</a>
                </button>
                <br>
                <br>
            </form>
        </div>
        <div class="block text-gray-700 text-sm mb-2 hover:text-gray-500">
            <button input="submit" onclick="location.href='{{ route('top') }}'">TOPページに戻る</button>
        </div>
    </div>

    {{-- 地図 --}}
    <div id="map" style="width:1000px; height:600px"></div>
</x-app-layout>
