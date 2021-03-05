@extends('layouts.default')
@section('title','艱辛討論攤')
@section('content')
    @if(session()->has('notice'))
        <div class="bg-pink-300 px-3 py-2 rounded">
            {{ session()->get('notice') }}
        </div>
    @endif
    <div class="body">
        <h1 class="text-4xl font-bold">現 正 揪 團 中</h1>
        <div class="space-y-4 border-t-4 border-green-500">
            @foreach($groupPosts as $groupPost)
                <div class="block mb-1.5 mt-1.5 border-b-2 border-gray-300" @click="">
                    <h3 class="font-bold text-2xl"> {{ $groupPost->topic }} </h3>
                    <div>
                        {{ $groupPost->reservation_date }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="sidebar">
        <br>
    </div>
    <div class="clearfix"></div>
@endsection
