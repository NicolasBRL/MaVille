@extends('layouts.front')

@section('title', '- Nous contacter')

@section('content')
<main id="actualites-page">
    <section class="w-full">
        <div class="hero-container">
            <div class="pb-80 pt-32 px-6 max-w-screen-sm mx-auto">
                <h2 class="text-center mb-16">Nos actualités</h2>
            </div>
        </div>

        <div class="page-container sm:w-4/5 mx-auto px-6 py-24">
            <div class="overflow-hidden shadow sm:rounded-md">
                <div class="bg-white px-4 py-5 sm:p-6">
                    <div class="p-4 grid gap-8 grid-cols-1 content-center md:grid-cols-2 lg:grid-cols-3">
                        @foreach($posts as $post)

                        <div class="md:max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                            <a href="{{ route('actualites.article', $post->slug) }}">
                                <img class="rounded-t-lg max-h-40 w-full object-cover" src="{{ asset('storage/'.$post->thumb_path) }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="{{ route('actualites.article', $post->slug) }}">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $post->title }}</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700">{{ substr(strip_tags(html_entity_decode($post->content)), 0, 100) }}...</p>

                                <div class="flex justify-between">
                                    <a href="{{ route('actualites.article', $post->slug) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300">
                                        Voir l'article
                                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{$posts->links("pagination::tailwind")}}
                </div>
            </div>
        </div>
    </section>
</main>
@endsection