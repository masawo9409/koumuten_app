<!-- 会社詳細が表示されるページ -->

@extends('layouts.main')
@section('title', '会社詳細')
@section('content')
<!-- <p>{{ 工事内容 }}に対応できる会社</p> -->

<div class=CompanyDtail>
    {{ 会社名 }}
    {{ 住所 }}
    {{ 対応可能工事 }}
    {{ 工事予算 }}
    {{ 対応可能エリア }}
    {{ 連絡先 }}
</div>
@endsection
