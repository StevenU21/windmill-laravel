@extends('layouts.app')
@section('title', 'Categories')

@section('content')
    <div class="container grid px-6 mx-auto">
        <!-- Breadcrumbs -->
        <x-breadcrumb :parents="[['label' => 'Categories', 'href' => route('categories.index'), 'icon' => 'fa-tags']]" current="Index" />

        <!-- Page header component -->
        <x-page-header title="Categories" subtitle="Gestiona categorías" icon="fa-tags">
            <x-action-link :href="route('categories.create')" icon="fas fa-plus">
                Create Category
            </x-action-link>
        </x-page-header>

        <!-- Success Messages -->
        <x-session-message />
        <!-- End Success Messages -->

        <div class="mt-4 w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">
                                <i class="fas fa-hashtag mr-2"></i>ID
                            </th>
                            <th class="px-4 py-3">
                                <i class="fas fa-tag mr-2"></i>Name
                            </th>
                            <th class="px-4 py-3">
                                <i class="fas fa-align-left mr-2"></i>Description
                            </th>
                            <th class="px-4 py-3">
                                <i class="fas fa-calendar-alt mr-2"></i>Register Date
                            </th>
                            <th class="px-4 py-3">
                                <i class="fas fa-tools mr-2"></i>Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-50 divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-white bg-purple-600 rounded-full dark:bg-purple-700 dark:text-white">
                                    1
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                Electronics
                            </td>
                            <td class="px-4 py-3 text-sm">
                                Electronics category description goes here.
                            </td>
                            <td class="px-4 py-3 text-sm">
                                2023-10-01
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">

                                    <a href="{{ route('categories.show') }}"
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Show">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <a href="{{ route('categories.edit') }}"
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <button type="submit"
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <!-- pagination -->
            </div>
        </div>
    </div>
@endsection
