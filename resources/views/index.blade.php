@extends('layouts.default')
@section('title','艱辛討論攤')
@section('content')
    @if(session()->has('notice'))
        <div class="bg-green-300 px-3 py-2 rounded">
            {{ session()->get('notice') }}
        </div>
    @endif
    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
            @foreach($groupPosts as $groupPost)
                <article class=" shadow my-4 min-w-full">
                    <div class="bg-white  p-6">
                        <a href="#" class="group text-s font-bold bg-blue-100 text-blue-500">吃飯</a>
                        <br>
                        <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $groupPost->topic }}</a>
                        <p href="#" class="text-sm pb-3">
                            由 <a href="#" class="font-semibold hover:text-gray-800">{{ $groupPost->user }}</a> 於 {{ $groupPost->created_at }}發表
                        </p>
                    </div>
                </article>
            @endforeach

            <!-- Pagination -->
            <div class="flex items-center py-8">
                {{ $groupPosts->links() }}
            </div>

        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">About Us</p>
                <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                    Get to know us
                </a>
            </div>

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Instagram</p>
                <div class="grid grid-cols-3 gap-3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
                </div>
                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                    <i class="fab fa-instagram mr-2"></i> Follow @dgrzyb
                </a>
            </div>

        </aside>

    </div>

@endsection
