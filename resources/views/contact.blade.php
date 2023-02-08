@extends('layouts.front')

@section('title', '- Nous contacter')

@section('content')
<main id="contact-page">
    <section class="w-full">
        <div class="hero-container">
            <div class="pb-80 pt-32 px-6 max-w-screen-sm mx-auto">
                <h2 class="text-center mb-16">Nous contactez</h2>
            </div>
        </div>

        <div class="form-container max-w-3xl mx-auto px-6 py-24">
            <form class="bg-white" method="POST" action="{{ route('contact.store') }}">
                @csrf
                <div class="overflow-hidden shadow sm:rounded-md">
                    <div class="bg-white px-4 py-5 sm:p-6">

                        @include('components.dashboard.alert')

                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="firstName" class="block text-sm font-medium text-gray-700">Prénom</label>
                                <input type="text" name="firstName" id="firstName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="lastName" class="block text-sm font-medium text-gray-700">Nom</label>
                                <input type="text" name="lastName" id="lastName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="email" class="block text-sm font-medium text-gray-700">Adresse mail</label>
                                <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                                <input type="number" name="phone" id="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                            </div>

                            <div class="col-span-full">
                                <label for="message" class="block text-sm font-medium text-gray-700">Votre demande</label>

                                <textarea name="message" id="message" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"></textarea>
                            </div>



                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection