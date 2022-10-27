<!-- 会社詳細が表示されるページ -->
<x-app-layout>

会社名<br>
{{ $koumten->name }}
住所 <br>
{{ $koumten->address }}
対応可能工事一覧<br>
<ul>
    <li>新築&nbsp;:&nbsp;{{ $koumten->sinchiku }}円~</li>
    <li>リフォーム&nbsp;:&nbsp;{{ $koumten->reform }}円~</li>
    <li>修理(雨漏り)&nbsp;:&nbsp;{{ $koumten->repair_amamori }}円~</li>
    <li>修理(外壁)&nbsp;:&nbsp;{{ $koumten->repair_gaiheki }}円~</li>
    <li>修理(内装)&nbsp;:&nbsp;{{ $koumten->repair_naisou }}円~</li>
    <li>修理(水漏れ)&nbsp;:&nbsp;{{ $koumten->repair_mizumore }}円~</li>
    <li>修理(エアコン)&nbsp;:&nbsp;{{ $koumten->repair_aircon }}円~</li>
</ul>
<form action="{{ route('button1') }}" method="GET" >
    <input type="submit" value="会社一覧に戻る">
</form>

<div id="map" style="width:1000px; height:600px"></div>
@include('partial.map')
    <script>
        @if (!empty($koumten)) 
            L.marker([{{ $koumten->latitude }},{{ $koumten->longitude }}])
                .bindPopup("{{ $koumten->name }}", {closeButton: false})
                .addTo(map);
        @endif
    </script>
</x-app-layout>
