<x-app-layout>
    <!-- 依頼内容選択画面 -->
    <div class="container max-w-7xl px-4 md:px-12 pb-3 mt-5 ml-3 mr-3 bg-white shadow-md">
        <div class="container pt-3 pb-3 font-bold text-gray-700">
            <p>依頼内容を選択してください</p>
        </div>
        <div class="button01">
            <form action="{{ route('button1') }}" method='get'>
                @csrf
                <!-- 新築の会社一覧ページに飛ばしたい -->
                <!-- 理想的には、会社一覧ページのフォーマットを作成して、そこに新築やリフォーム等の該当会社の一覧を表示させたい。 -->
                <!-- リンククリックするとindexのビューを読み込むURLを設置。     -->
                <!-- 変数を受け取りたい。 -->
                <button type="submit" name="sinchiku" onclick="location.href='{{ route('button1') }}'">
                    <a>新築したい</a>
                </button>
                <br>
                <br>
                <button type="submit" name="reform" onclick="location.href='{{ route('button1') }}'">
                    <a>リフォームしたい</a>
                </button>
                <br>
                <br>
                <button type="submit" name="repair" onclick="location.href='{{ route('button1') }}'">
                    <a>家の修理をしたい</a>
                </button>
                <br>
                <br>
            </form>
        </div>
    </div>
</x-app-layout>
