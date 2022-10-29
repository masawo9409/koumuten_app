<x-app-layout>
    <div class="relative py-16 bg-gradient-to-br from-sky-50 to-gray-200">
        <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
            <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
                <div class="rounded-xl bg-white shadow-xl">
                    <div class="p-6 sm:p-16">
                        <div class="space-y-4">

                            <h2 class="mb-8 text-2xl text-cyan-900 font-bold">お近くの工務店を探します<br>
                                依頼内容を選択してください。</h2>
                        </div>

                        <form action="{{ route('button1') }}" method="get">
                        @csrf
                        <div class="mt-16 grid space-y-4">
                            <button  type="submit" name="sinchiku"
                                class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                <div class="relative flex items-center space-x-4 justify-center">
                                    <a href='/b1'>
                                        <span
                                            class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">新築をつくりたい</span>
                                    </a>
                                </div>
                            </button>
                            <button type="submit" name="reform"
                                class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                <div class="relative flex items-center space-x-4 justify-center">

                                    <a href="">
                                        <span
                                            class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">リフォームをしたい
                                        </span>
                                    </a>
                                </div>
                            </button>
                            <button type="submit" name="repair"
                                class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
                                hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                <div class="relative flex items-center space-x-4 justify-center">

                                    <a href="">
                                        <span
                                            class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">家の修理をしたい
                                            </span>
                                    </a>
                                </div>
                            </button>
                        </form>

                        <div class="mt-32 space-y-4 text-gray-600 text-center sm:-mb-8">
                            <p class="text-xs">By proceeding, you agree to our <a href=""
                                    class="underline">Disclaimer</a> and confirm you have read our <a href=""
                                    class="underline">Privacy and Cookie Statement</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
