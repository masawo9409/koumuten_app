<!-- 会社表示の一覧ページ -->
<!-- 新築、リフォーム、修理内容に応じた表示ができるようにする -->
@extends('layouts.main')
@section('title', '店舗一覧')

@section('content')
    <p>{{  }}に対応できる会社一覧</p>
    <br>
    <!-- このdivセクションを会社の数だけ表示させたい。 -->
    薄いグレーを背景に反映させたい
    <div class = CompanyIndex >
        {{ 会社名 }}
        {{ 住所 }}
        対応可能工事
        {{ 対応可能工事 }}
    </div>

    <!-- map表示したい -->
@endsection
