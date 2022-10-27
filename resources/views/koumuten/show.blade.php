<!-- 会社詳細が表示されるページ -->
<x-app-layout>

会社名<br>
{{ $koumten->name }}
住所 <br>
{{ $koumten->address }}
対応可能工事一覧<br>
<ul>
    <li>新築&nbsp;:&nbsp;{{ $koumten->sinchiku }}</li>
    <li>リフォーム&nbsp;:&nbsp;{{ $koumten->reform }}</li>
    <li>修理(雨漏り)&nbsp;:&nbsp;{{ $koumten->repair_amamori }}</li>
    <li>修理(外壁)&nbsp;:&nbsp;{{ $koumten->repair_gaiheki }}</li>
    <li>修理(内装)&nbsp;:&nbsp;{{ $koumten->repair_naisou }}</li>
    <li>修理(水漏れ)&nbsp;:&nbsp;{{ $koumten->repair_mizumore }}</li>
    <li>修理(エアコン)&nbsp;:&nbsp;{{ $koumten->repair_aircon }}</li>
</ul>
<div id="map" style="width:1000px; height:600px"></div>
</x-app-layout>
