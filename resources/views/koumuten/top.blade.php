<!-- 依頼内容選択画面 -->

@extends('layouts.main')

@section('title','依頼内容選択')

@section('content')
<p>依頼内容を選択してください</p>
<div class="button01">
    <!-- 新築の会社一覧ページに飛ばしたい -->
    <!-- 理想的には、会社一覧ページのフォーマットを作成して、そこに新築やリフォーム等の該当会社の一覧を表示させたい。 -->
    <!-- リンククリックするとindexのビューを読み込むURLを設置。     -->
    <button type="submit" onclick="location.href='/kmt'">
        <a>新築したい</a>
    </button>
    <br>
    <br>
    <button type="submit" onclick="location.href=' ">
        <a href="">リフォームしたい</a>
    </button>
    <br>
    <br>
    <button type="submit" onclick="location.href=' ">
        <a href="">家の修理をしたい</a>
    </button>
    <br>
    <br>
</div>

@endsection('content')

@section('content')
@include('partial.map')
@endsection('content')
