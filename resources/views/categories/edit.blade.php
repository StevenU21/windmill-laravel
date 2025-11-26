@extends('layouts.app')
@section('title', 'Category Details')

@section('content')
    <div class="container px-6 mx-auto grid">
        <x-breadcrumb :items="[
            ['label' => 'Categories', 'icon' => 'fa-tags'],
            ['label' => 'Index', 'href' => route('categories.index')],
            ['label' => 'Edit'],
        ]" />

        <x-page-header title="Categories" subtitle="Gestiona categorías" icon="fa-tags">
            <x-action-link :href="route('categories.index')" icon="fas fa-arrow-left">
                Back to Categories
            </x-action-link>
        </x-page-header>

        <form action="#" method="POST" class="mt-4">
            @csrf
            @method('PUT')
            @include('categories.form')
        </form>
    </div>
@endsection
