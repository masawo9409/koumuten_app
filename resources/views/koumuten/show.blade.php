<!-- 会社詳細が表示されるページ -->
<x-app-layout>

    <!-- <p>{{ 工事内容 }}に対応できる会社</p> -->

    <div class=CompanyDtail>
        @foreach ($koumutens as $koumuten)
            <div>
                <a href="{{ route('koumuten.show', $koumuten) }}">{{ $koumuten->name }}</a>
                {{ $koumuten->address }}
                {{ $koumuten->avairable area }}
                {{ $koumuten-> }}
            </div>
        @endforeach


        {{ 会社名 }}
        {{ 住所 }}
        {{ 対応可能工事 }}
        {{ 工事予算 }}
        {{ 対応可能エリア }}
        {{ 連絡先 }}
    </div>

</x-app-layout>
