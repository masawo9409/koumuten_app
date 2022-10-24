<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            工務店お探し
        </h2>
    </x-slot>

<p>test に対応できる会社一覧</p>
<br>
<!-- このdivセクションを会社の数だけ表示させたい。 -->
<!-- 薄いグレーを背景に反映させたい -->
<div class=CompanyIndex>
<!-- データベースの内容を受け取りたい。 -->
    {{-- <!-- 会社名 -->
    {{ $company->name }}
    <!-- 住所 -->
    {{ $company->name }}
    <!-- 対応可能工事 -->
    {{ $company->name }}
    <!-- 対応可能工事 -->
    {{ $company->name }} --}}
</div>

<!-- map表示したい -->


</x-app-layout>
