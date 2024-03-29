<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="{{ asset('js/init-alpine.js') }}"></script>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    <!-- Desktop sidebar -->
    <aside class="z-20 hidden w-64 flex-shrink-0 overflow-y-auto bg-white dark:bg-gray-800 md:block">
      <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
          {{ auth()->user()->fullName }}
        </a>
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            <x-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
              <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
              </svg>
              <span class="ml-4">Dashboard</span>
            </x-link>
          </li>
        </ul>
        <ul>
          <li class="relative px-6 py-3">
            <x-link :href="route('users.index')" :active="request()->routeIs('users.index')">
              <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                </path>
              </svg>
              <span class="ml-4">Users</span>
            </x-link>

          </li>
          <li class="relative px-6 py-3">
            <x-link :href="route('clients.index')" :active="request()->routeIs('clients.index')">
              <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                </path>
              </svg>
              <span class="ml-4">Clients</span>
            </x-link>
          </li>

          <li class="relative px-6 py-3">
            <x-link :href="route('projects.index')" :active="request()->routeIs('projects.index')">
              <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                </path>
              </svg>
              <span class="ml-4">Projects</span>
            </x-link>
          </li>

          <li class="relative px-6 py-3">
            <x-link :href="route('tasks.index')" :active="request()->routeIs('tasks.index')">
              <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                </path>
              </svg>
              <span class="ml-4">Tasks</span>
            </x-link>
          </li>
        </ul>

        <div class="my-6 px-6">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}"
              class="focus:shadow-outline-purple flex w-full cursor-pointer items-center justify-center rounded-lg border border-transparent bg-purple-600 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 hover:bg-purple-700 focus:outline-none active:bg-purple-600"
              onclick="event.preventDefault();
                                              this.closest('form').submit();">
              Log Out
            </a>
          </form>
        </div>
      </div>
    </aside>
    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
      x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
    <aside class="fixed inset-y-0 z-20 mt-16 w-64 flex-shrink-0 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
      x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
      x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
      @keydown.escape="closeSideMenu">
      <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
          {{ auth()->user()->full_name }}
        </a>
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            <x-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
              <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
              </svg>
              <span class="ml-4">Dashboard</span>
            </x-link>
          </li>
        </ul>
        <ul>
          <li class="relative px-6 py-3">
            <x-link :href="route('clients.index')" :active="request()->routeIs('clients.index')">
              <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                </path>
              </svg>
              <span class="ml-4">Clients</span>
            </x-link>
          </li>
          <li class="relative px-6 py-3">
            <x-link :href="route('users.index')" :active="request()->routeIs('users.index')">
              <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                </path>
              </svg>
              <span class="ml-4">Users</span>
            </x-link>
          </li>
          <li class="relative px-6 py-3">
            <x-link :href="route('projects.index')" :active="request()->routeIs('projects.index')">
              <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                </path>
              </svg>
              <span class="ml-4">Projects</span>
            </x-link>
          </li>
          <li class="relative px-6 py-3">
            <x-link :href="route('tasks.index')" :active="request()->routeIs('tasks.index')">
              <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                </path>
              </svg>
              <span class="ml-4">Tasks</span>
            </x-link>
          </li>
        </ul>
        <div class="my-6 px-6">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}"
              class="focus:shadow-outline-purple flex w-full cursor-pointer items-center justify-center rounded-lg border border-transparent bg-purple-600 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 hover:bg-purple-700 focus:outline-none active:bg-purple-600"
              onclick="event.preventDefault();
                                              this.closest('form').submit();">
              Log Out
            </a>
          </form>
        </div>
      </div>
    </aside>
    <div class="flex w-full flex-1 flex-col">
      <header class="z-10 bg-white py-4 shadow-md dark:bg-gray-800">
        <div
          class="container mx-auto flex h-full items-center justify-between px-6 text-purple-600 dark:text-purple-300">
          <!-- Mobile hamburger -->
          <button class="focus:shadow-outline-purple mr-5 -ml-1 rounded-md p-1 focus:outline-none md:hidden"
            @click="toggleSideMenu" aria-label="Menu">
            <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <!-- Search input -->
          <div class="flex flex-1 justify-center lg:mr-32">
            <div class="relative mr-6 w-full max-w-xl focus-within:text-purple-500"></div>
          </div>
          <ul class="flex flex-shrink-0 items-center space-x-6">
            <!-- Notifications menu -->
            <li class="relative">
              <button class="focus:shadow-outline-purple relative rounded-md align-middle focus:outline-none">
                <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                  </path>
                </svg>
                <!-- Notification badge -->
                <span aria-hidden="true"
                  class="absolute top-0 right-0 inline-block h-3 w-3 translate-x-1 -translate-y-1 transform rounded-full border-2 border-white bg-red-600 dark:border-gray-800"></span>
              </button>
            </li>
            <!-- Profile menu -->
            <li class="relative">
              <button class="focus:shadow-outline-purple rounded-full align-middle focus:outline-none"
                @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account"
                aria-haspopup="true">
                <img class="h-8 w-8 rounded-full object-cover"
                  src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
                  alt="" aria-hidden="true" />
              </button>
              <template x-if="isProfileMenuOpen">
                <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                  x-transition:leave-end="opacity-0" @click.away="closeProfileMenu"
                  @keydown.escape="closeProfileMenu"
                  class="absolute right-0 mt-2 w-56 space-y-2 rounded-md border border-gray-100 bg-white p-2 text-gray-600 shadow-md dark:border-gray-700 dark:bg-gray-700 dark:text-gray-300"
                  aria-label="submenu">
                  <li class="flex">
                    <a class="inline-flex w-full items-center rounded-md px-2 py-1 text-sm font-semibold transition-colors duration-150 hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                      href="#">
                      <svg class="mr-3 h-4 w-4" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                        </path>
                      </svg>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="flex">
                    <a class="inline-flex w-full items-center rounded-md px-2 py-1 text-sm font-semibold transition-colors duration-150 hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                      href="#">
                      <svg class="mr-3 h-4 w-4" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                          d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                        </path>
                      </svg>
                      <span>Log out</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
          </ul>
        </div>
      </header>
      <main class="h-full overflow-y-auto pb-10">
        {{ $slot }}
      </main>
    </div>
  </div>
</body>

</html>
