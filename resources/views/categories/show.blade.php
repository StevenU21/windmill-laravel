@extends('layouts.app')
@section('title', 'Category Details')

@section('content')
    <div class="container px-6 mx-auto grid">
        <x-breadcrumb :items="[
            ['label' => 'Categories', 'icon' => 'fa-tags'],
            ['label' => 'Index', 'href' => route('categories.index')],
            ['label' => 'Show'],
        ]" />

        <x-page-header title="Categories" subtitle="Gestiona categorías" icon="fa-tags">
            <x-action-link :href="route('categories.index')" icon="fas fa-arrow-left">
                Back to Categories
            </x-action-link>
        </x-page-header>

        <div
            class="mt-4 w-full overflow-hidden rounded-lg shadow-md bg-white dark:bg-gray-800 hover:shadow-lg transition-shadow duration-150">
            <div class="p-4">
                <h3
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-purple-400 transition-colors duration-150">
                    Category Information
                </h3>
                <div class="mt-4">
                    <p
                        class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-200 transition-colors duration-150 flex items-center">
                        <i class="fas fa-tag text-purple-600 dark:text-purple-400 mr-2"></i>
                        <strong
                            class="text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-purple-400 transition-colors duration-150">Name:</strong>
                        Electronics
                    </p>
                    <p
                        class="text-sm text-gray-600 dark:text-gray-400 mt-2 hover:text-gray-900 dark:hover:text-gray-200 transition-colors duration-150 flex items-center">
                        <i class="fas fa-align-left text-purple-600 dark:text-purple-400 mr-2"></i>
                        <strong
                            class="text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-purple-400 transition-colors duration-150">Description:</strong>
                        Electronics category description goes here.
                    </p>
                    <p
                        class="text-sm text-gray-600 dark:text-gray-400 mt-2 hover:text-gray-900 dark:hover:text-gray-200 transition-colors duration-150 flex items-center">
                        <i class="fas fa-calendar-alt text-purple-600 dark:text-purple-400 mr-2"></i>
                        <strong
                            class="text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-purple-400 transition-colors duration-150">Created
                            At:</strong> 2023-10-01
                    </p>
                    <p
                        class="text-sm text-gray-600 dark:text-gray-400 mt-2 hover:text-gray-900 dark:hover:text-gray-200 transition-colors duration-150 flex items-center">
                        <i class="fas fa-clock text-purple-600 dark:text-purple-400 mr-2"></i>
                        <strong
                            class="text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-purple-400 transition-colors duration-150">Updated
                            At:</strong> 2023-10-01
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
