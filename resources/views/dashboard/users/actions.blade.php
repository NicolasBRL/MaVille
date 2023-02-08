@extends('layouts.app')

@section('title', '- Dashboard')

@if (isset($user))
    @section('page', 'Modifier un utilisateur')
@else
    @section('page', 'Ajouter un utilisateur')
@endif

@section('content')

@include('components.dashboard.alert')

@if (isset($user))
<form method="POST" action="{{ route('users.update', $user) }}">
    @method('PUT')
@else
<form method="POST" action="{{ route('users.store') }}">
@endif
    @csrf

    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">
            <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                value="{{ isset($user->name) ? $user->name : old('name') }}" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
        </div>

        <div class="col-span-6 sm:col-span-3">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input 
                type="email" 
                name="email" 
                id="email" 
                value="{{ isset($user->email) ? $user->email : old('email') }}" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
        </div>


        <div class="col-span-6 sm:col-span-3">
            <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
            <input 
                type="password" 
                name="password" 
                id="password" 
                value="{{old('password')}}" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
        </div>

    </div>
    <div class="px-4 py-3 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
            @if (isset($user))
                Modifier
            @else
                Créer
            @endif
        </button>
    </div>
</form>
@endsection