@extends('layouts.app')

@section('title', '- Dashboard')

@if (isset($post))
    @section('page', 'Modifier un article')
@else
    @section('page', 'Ajouter un article')
@endif

@section('content')

@include('components.dashboard.alert')

@if (isset($post))
<form method="POST" action="{{ route('actualites.update', $post) }}" enctype="multipart/form-data">
    @method('PUT')
@else
<form method="POST" action="{{ route('actualites.store') }}" enctype="multipart/form-data">
@endif
    @csrf

    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">
            <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
            <input 
                type="text" 
                name="title" 
                id="title" 
                value="{{ isset($post->title) ? $post->title : old('title') }}" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
        </div>


        <div class="col-span-6 sm:col-span-3">
            <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
            <input 
                type="text" 
                name="slug" 
                id="slug" 
                value="{{ isset($post->slug) ? $post->slug : old('slug') }}" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
        </div>

        <div class="col-span-full">
            <label for="thumb_path" class="block text-sm font-medium text-gray-700">Image</label>
            <input 
                type="file" 
                name="thumb_path"
                id="thumb_path" 
                class="block w-full text-sm text-slate-500 mt-3 file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-700 hover:file:bg-red-100"/>
        </div>

        <div class="col-span-full">
            <label for="content" class="block text-sm font-medium text-gray-700">Contenue de l'article</label>
            <textarea 
                name="content" 
                id="content"
                rows="5"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">{{ isset($post->content) ? $post->content : old('content') }}</textarea>
        </div>


    </div>

    <div class="px-4 py-3 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
            @if (isset($post))
                Modifier
            @else
                Créer
            @endif
        </button>
    </div>
</form>
@endsection

@section('script')
<script>
    // Write slug automatic
    $('#title').on("input", (e) => {
        var crtVal = e.target.value;
        var chars = [['a', 'áàãäâ'], ['e','éèëê'], ['i','íìïî'], ['o','óòõöô'], ['u','úùüû']];
        
        // Create slug
        let slug = crtVal.toLowerCase().replace(/[^\w-áàãäâéèëêíìïîóòõöôúùüû]+/g, '-'); // Transform any character with not alphanumeric and transform on -
        for (var i in chars) slug = slug.replace(new RegExp('[' + chars[i][1] + ']', 'g'), chars[i][0]); // Convert accent to letter without accent
        
        // Set value in slug input
        $('#slug').val(slug);
    })
</script>
@endsection