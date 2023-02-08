@extends('layouts.front')

@section('title')
- {{$post->title}}
@endsection

@section('content')
<main id="single-actualite-page">
    <section class="w-full">
        <div class="hero-container" style="background-image: url('{{ asset('storage/'.$post->thumb_path) }}')">
            <div class="pb-80 pt-32 px-6 max-w-screen-sm mx-auto">

            </div>
        </div>

        <div class="page-container max-w-3xl mx-auto px-6 py-24">
            <div class="overflow-hidden shadow sm:rounded-md">
                <div class="bg-white px-4 py-5 sm:p-6">
                    <h1 class="mb-6 text-center">{{ $post->title }}</h1>
                    <span class="text-gray-400 flex gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>

                        Publié le {{$post->created_at->translatedFormat('j F Y')}}
                    </span>

                    <div class="post-content my-6 text-justify">
                        {!! nl2br($post->content) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="last-posts-container w-11/12 mx-auto">
            <h2>Nos derniers articles</h2>
            <div class="p-4 grid gap-8 grid-cols-3">
                @foreach($lastPosts as $post)

                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
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
        </div>
    </section>
</main>
@endsection