@extends('layouts.app')
@section('title', 'Profile')

@section('content')
    <div class="container px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Profile
        </h2>
        <div class="w-full bg-white dark:bg-gray-800 rounded-lg shadow-md">
            <!-- Cover Photo -->
            <div class="relative">
                <img class="w-full object-cover rounded-t-lg" style="height: 240px;"
                    src="https://images.unsplash.com/photo-1503264116251-35a269479413?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                    alt="Cover Photo">
                <!-- Edit Profile Button -->
                <a href="{{ route('profile.edit') }}"
                    class="absolute top-4 right-4 bg-purple-600 hover:bg-purple-700 text-white text-sm font-medium py-2 px-4 rounded shadow flex items-center">
                    <i class="fas fa-edit mr-2"></i> 
                    Edit Profile
                </a>
            </div>

            <!-- Profile Details -->
            <div class="p-6">
                <div class="text-center">
                    <!-- Profile Image -->
                    <img class="w-24 h-24 rounded-full object-cover border-4 border-white dark:border-gray-800 mx-auto -mt-8"
                        src="https://randomuser.me/api/portraits/men/75.jpg" alt="User Avatar">
                    <!-- Name and Email -->
                    <h3 class="mt-4 text-lg font-semibold text-gray-700 dark:text-gray-200">John Doe</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">johndoe@example.com</p>
                    <!-- Bio -->
                    <p class="mt-2 text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit.
                        Vivamus lacinia odio vitae vestibulum.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
