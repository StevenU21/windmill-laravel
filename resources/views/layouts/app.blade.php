<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @yield('title') - {{ config('app.name') }}
    </title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMt23cez/3paNdF+Z4p6F5r5V6M1fE7y3eG5eDk"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css')}}" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="{{ asset('js/init-alpine.js')}}"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <script src="{{ asset('js/charts-lines.js')}}" defer></script>
    <script src="{{ asset('js/charts-pie.js')}}" defer></script>
  </head>
  <body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
      <!-- Desktop sidebar -->
       @include('navigations.sidebar')
      <!-- Mobile sidebar -->
      <!-- Backdrop -->
       @include('navigations.mobile-sidebar')

      <div class="flex flex-col flex-1 w-full">
        @include('navigations.header')
        <main class="h-full overflow-y-auto">
            @yield('content')
        </main>
      </div>
    </div>
  </body>
</html>
