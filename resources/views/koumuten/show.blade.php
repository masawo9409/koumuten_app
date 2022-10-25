<!-- 会社詳細が表示されるページ -->
<x-app-layout>

会社名<br>
{{ $koumten->name }}
住所 <br>
{{ $koumten->address }}
対応可能工事一覧<br>
<ul>
    <li>新築&nbsp;:&nbsp;{{ $koumten->construct->sinchiku }}</li>
    <li>リフォーム&nbsp;:&nbsp;{{ $koumten->construct->reform }}</li>
    <li>修理(雨漏り)&nbsp;:&nbsp;{{ $koumten->construct->repair_amamori }}</li>
    <li>修理(外壁)&nbsp;:&nbsp;{{ $koumten->construct->repair_gaiheki }}</li>
    <li>修理(内装)&nbsp;:&nbsp;{{ $koumten->construct->repair_naisou }}</li>
    <li>修理(水漏れ)&nbsp;:&nbsp;{{ $koumten->construct->repair_mizumore }}</li>
    <li>修理(エアコン)&nbsp;:&nbsp;{{ $koumten->construct->repair_aircon }}</li>
</ul>
</x-app-layout>
