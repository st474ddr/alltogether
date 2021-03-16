@extends('layouts.default')
@section('title','艱辛討論攤')
@section('content')
    <div class="float-left m-10">
        <div class="bg-gray-300 card">
            <h1 class="font-thin text-4xl"> {{ $groupPost->topic }}</h1>
            <p class="text-lg text-gray-700 p-2">{{ $groupPost->reservation_date }}</p>
        </div>
    </div>
@endsection
