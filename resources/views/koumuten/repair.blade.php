<x-app-layout>
    <!-- 依頼内容選択画面 -->
    <p>依頼内容を選択してください</p>
    <div class="button01">
        <form action="{{ route('button1') }}" method='get'>
            @csrf
            <button type="submit" name="repair" onclick="location.href='{{ route('button1') }}'">
                <a>修理(雨漏り)</a>
            </button>
            <br>
            <br>
            <button type="submit" name="reform" onclick="location.href='{{ route('button1') }}'">
                <a>修理(外壁修理)</a>
            </button>
            <br>
            <br>
            <button type="submit" name="reform" onclick="location.href='{{ route('button1') }}'">
                <a>修理(内装修理)</a>
            </button>
            <br>
            <br>
            <button type="submit" name="reform" onclick="location.href='{{ route('button1') }}'">
                <a>修理(水漏れ)</a>
            </button>
            <br>
            <br>
            <button type="submit" name="reform" onclick="location.href='{{ route('button1') }}'">
                <a>修理(エアコン修理)</a>
            </button>
            <br>
            <br>
        </form>
    </div>

    {{-- 地図 --}}
    <div id="map" style="width:1000px; height:600px"></div>
</x-app-layout>
