<x-app-layout>
    <div class="container lg:w-1/2 md:w-4/5 w-11/12 mx-auto mt-8 px-8 bg-white shadow-md">
        <h2 class="text-center text-lg font-bold pt-6 tracking-widest">会社情報登録</h2>

        {{-- バリデーション --}}
        {{-- @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 my-2" role="alert">
                <p>
                    <b>{{ count($errors) }}件のエラーがあります。</b>
                </p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('koumtens.store') }}" method="POST" enctype="multipart/form-data"
        class="rounded pt-3 pb-8 mb-4">
        @csrf
        {{-- 会社 --}}
        <div class="mb-4">
            <label class="block text-gray-700 text-sm mb-2" for="name">
                会社名
            </label>
            <input type="text" name="name"
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                placeholder="会社名" value="{{ old('name') }}">
        </div>
        {{-- 住所 --}}
        <div class="mb-4">
            <label class="block text-gray-700 text-sm mb-2" for="address">
                住所
            </label>
            <textarea name="address" rows="1"
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                >{{ old('address') }}</textarea>
        </div>
        {{-- 対応可能エリア --}}
        <div class="mb-4">
            <label class="block text-gray-700 text-sm mb-2" for="avairable_area">
                対応可能エリア
            </label>
            <textarea name="avairable_area" rows="1"
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                >{{ old('avairable_area') }}</textarea>
        </div>
        {{-- 電話番号 --}}
        <div class="mb-4">
            <label class="block text-gray-700 text-sm mb-2" for="contact_address_phone">
                電話番号
            </label>
            <textarea name="contact_address_phone" rows="1"
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                >{{ old('contact_address_phone') }}</textarea>
        </div>
        {{-- メールアドレス --}}
        <div class="mb-4">
            <label class="block text-gray-700 text-sm mb-2" for="contact_address_mail">
                メールアドレス
            </label>
            <textarea name="contact_address_mail" rows="1"
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                >{{ old('contact_address_mail') }}</textarea>
        </div>
        {{-- 画像アップロード --}}
        {{-- <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="image">
                    ブログ用画像
                </label>
                <input type="file" name="image" class="border-gray-300">
            </div>--}}
            {{-- <input type="submit" value="登録"
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> 
        </form> --}}

        <h2 class="text-center text-lg font-bold pt-6 tracking-widest">対応工事/費用の登録</h2>
        <p class="text-gray-700 pt-6 tracking-widest">対応可能な工事項目の最低予算を記入してください</p>

        {{-- <form action=""> --}}
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="sinchiku">
                    新築
                </label>
                <textarea name="sinchiku" rows="1"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    >{{ old('sinchiku') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="reform">
                    リフォーム
                </label>
                <textarea name="reform" rows="1"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    >{{ old('reform') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="repair_amamori">
                    修理(雨漏り)
                </label>
                <textarea name="repair_amamori" rows="1"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    >{{ old('repair_amamori') }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="repair_gaiheki">
                    修理(外壁修理)
                </label>
                <textarea name="repair_gaiheki" rows="1"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    >{{ old('repair_gaiheki') }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="repair_naisou">
                    修理(内装修理)
                </label>
                <textarea name="repair_naisou" rows="1"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    >{{ old('repair_naisou') }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="repair_mizumore">
                    修理(水漏れ)
                </label>
                <textarea name="repair_mizumore" rows="1"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    >{{ old('repair_mizumore') }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="repair_aircon">
                    修理(エアコン修理)
                </label>
                <textarea name="repair_aircon" rows="1"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    >{{ old('repair_aircon') }}</textarea>
            </div>
            <input type="submit" value="登録"
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </form>


    </div>
</x-app-layout>
