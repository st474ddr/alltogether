@extends('layouts.default')
@section('content')
    <div class="flex items-center h-screen w-full bg-green-300">
        <div class="w-full border-2 bg-white rounded shadow-lg p-8 m-2 md:max-w-3xl md:mx-auto">
            <h1 class="block w-full text-3xl text-center text-gray-700 mb-6">揪團頁面</h1>
            <form class="mb-6" method="post" action="{{ url('GroupCreate') }}">
                @csrf
                <div class="flex flex-col mb-6">
                    <label for="topic" class="mb-2 font-bold text-lg text-gray-700">主題名稱</label>
                    <input type="text" name="topic" class="border-2 py-2 px-3 text-gray-400">
                </div>
                <div class="flex flex-col mb-4">
                    <label for="reservation_date" class="mb-2 font-bold text-lg text-gray-700">揪團日期</label>
                    <input type="text" name="reservation_date" class="border-2 py-2 px-3 text-gray-400" autocomplete="off">
                </div>
                <div class="flex flex-wrap flex-row mb-4">
                    <label for="reservation_time" class="w-full mb-2 font-bold text-lg text-gray-700">時段</label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="reservation_time" class="h-5 w-5 text-gray-600" checked><span class="pr-2 ml-2 text-gray-700">早上</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="reservation_time" class="h-5 w-5 text-gray-600" checked><span class="pr-2 ml-2 text-gray-700">中午</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="reservation_time" class="h-5 w-5 text-gray-600" checked><span class="pr-2 ml-2 text-gray-700">下午</span>
                    </label><label class="inline-flex items-center">
                        <input type="checkbox" name="reservation_time" class="h-5 w-5 text-gray-600" checked><span class="pr-2 ml-2 text-gray-700">晚上</span>
                    </label>

                </div>
                <div class="flex flex-col mb-4">
                    <label for="remark" class="mb-2 font-bold text-lg text-gray-700">備註</label>
                    <textarea rows="10" name="remark" class="rounded-md border-2 py-2 px-3 text-gray-400"></textarea>
                </div>
                <button type="submit"
                        class="block bg-green-500 hover:bg-green-400 text-white text-lg mx-auto p-4 rounded">發出揪團
                </button>
                @if ($errors->any())
                    <div class="text-red-600">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>

@endsection
