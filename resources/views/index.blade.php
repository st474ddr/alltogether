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
        <div>

        </div>
    </div>
    <div class="sidebar">
        <br>
    </div>
    <div class="clearfix"></div>
@endsection
