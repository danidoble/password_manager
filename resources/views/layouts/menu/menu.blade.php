<div class="" style="">
    <div style="min-height: 640px;">
        <div class="h-screen flex overflow-hidden bg-white" x-data="{ sidebarOpen: false }"
             @keydown.window.escape="sidebarOpen = false">
            <div x-show="sidebarOpen" class="lg:hidden"
                 x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state."
                 style="display: none;">
                <div class="fixed inset-0 flex z-40">
                    <div @click="sidebarOpen = false" x-show="sidebarOpen"
                         x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state."
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0"
                         aria-hidden="true" style="display: none;">
                        <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
                    </div>
                    <div x-show="sidebarOpen" x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                         x-transition:enter="transition ease-in-out duration-300 transform"
                         x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                         x-transition:leave="transition ease-in-out duration-300 transform"
                         x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                         class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white"
                         style="display: none;">
                        <div class="absolute top-0 right-0 -mr-12 pt-2">
                            <button x-show="sidebarOpen" @click="sidebarOpen = false"
                                    class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                                    style="display: none;">
                                <span class="sr-only">Close sidebar</span>
                                <svg class="h-6 w-6 text-white" x-description="Heroicon name: x"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="flex-shrink-0 flex items-center px-4">
                            <span class="h-8 w-auto text-xl font-bold">Password Manager</span>
                        </div>
                        <div class="mt-5 flex-1 h-0 overflow-y-auto">
                            <nav class="px-2">
                                @include('layouts.menu.responsive')
                            </nav>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-14" aria-hidden="true">
                        <!-- Dummy element to force sidebar to shrink to fit close icon -->
                    </div>
                </div>
            </div>

            <!-- Static sidebar for desktop -->
            <div class="hidden lg:flex lg:flex-shrink-0">
                <div class="flex flex-col w-64 border-r border-gray-200 pt-5 pb-4 bg-gray-100">
                    <div class="flex items-center flex-shrink-0 px-6">
                        <span class="h-8 w-auto text-xl font-bold">Password Manager</span>
                    </div>
                    <!-- Sidebar component, swap this element with another sidebar if you like -->
                    <div class="h-0 flex-1 flex flex-col overflow-y-auto">
                        <!-- User account dropdown -->
                        <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                             class="px-3 mt-6 relative inline-block text-left">
                            <div
                                x-description="Dropdown menu toggle, controlling the show/hide state of dropdown menu.">
                                <button @click="open = !open" type="button"
                                        class="group w-full bg-gray-100 rounded-md px-3.5 py-2 text-sm font-medium text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-purple-500"
                                        id="options-menu" aria-haspopup="true" x-bind:aria-expanded="open">
                <span class="flex w-full justify-between items-center">
                  <span class="flex min-w-0 items-center justify-between space-x-3">
                    <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                         src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                    <span class="flex-1 min-w-0">
                      <span class="text-gray-500 text-xs font-medium truncate">{{ Auth::user()->email }}</span>
                      <span class="text-gray-700 text-sm truncate">&#64;{{ Auth::user()->name }}</span>
                    </span>
                  </span>
                  <svg class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                       x-description="Heroicon name: selector" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                       fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd"
        d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
        clip-rule="evenodd"></path>
</svg>
                </span>
                                </button>
                            </div>
                            <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="z-10 mx-3 origin-top absolute right-0 left-0 mt-1 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                 role="menu" aria-orientation="vertical" aria-labelledby="options-menu"
                                 style="display: none;">
                                @include('layouts.menu.user')
                            </div>
                        </div>
                        <!-- Sidebar Search -->
                        <div class="px-3 mt-5">
                            <label for="search" class="sr-only">Search</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                                     aria-hidden="true">
                                    <svg class="mr-3 h-4 w-4 text-gray-400" x-description="Heroicon name: search"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" name="search" id="search"
                                       class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-9 sm:text-sm border-gray-300 rounded-md"
                                       placeholder="Search">
                            </div>
                        </div>
                        <!-- Navigation -->
                        <nav class="px-3 mt-6">
                            @include('layouts.menu.responsive')
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Main column -->
            <div class="flex flex-col w-0 flex-1 overflow-hidden">
                <!-- Search header -->
                <div class="relative z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:hidden">
                    <button x-description="Sidebar toggle, controls the 'sidebarOpen' sidebar state."
                            @click.stop="sidebarOpen = true"
                            class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500 lg:hidden">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="h-6 w-6" x-description="Heroicon name: menu-alt-1"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h8m-8 6h16"></path>
                        </svg>
                    </button>
                    <div class="flex-1 flex justify-between px-4 sm:px-6 lg:px-8">
                        <div class="flex-1 flex">
                            <form class="w-full flex md:ml-0" action="#" method="GET">
                                <label for="search_field" class="sr-only">Search</label>
                                <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5" x-description="Heroicon name: search"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input id="search_field" name="search_field"
                                           class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent focus:placeholder-gray-400 sm:text-sm"
                                           placeholder="Search" type="search">
                                </div>
                            </form>
                        </div>
                        <div class="flex items-center">
                            <!-- Profile dropdown -->
                            <div @click.away="open = false" class="ml-3 relative" x-data="{ open: false }">
                                <div>
                                    <button @click="open = !open"
                                            class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500"
                                            id="user-menu" aria-haspopup="true" x-bind:aria-expanded="open">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                             src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                                    </button>
                                </div>
                                <div x-show="open"
                                     x-description="Profile dropdown panel, show/hide based on dropdown state."
                                     x-transition:enter="transition ease-out duration-100"
                                     x-transition:enter-start="transform opacity-0 scale-95"
                                     x-transition:enter-end="transform opacity-100 scale-100"
                                     x-transition:leave="transition ease-in duration-75"
                                     x-transition:leave-start="transform opacity-100 scale-100"
                                     x-transition:leave-end="transform opacity-0 scale-95"
                                     class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                     role="menu" aria-orientation="vertical" aria-labelledby="user-menu"
                                     style="display: none;">
                                    @include('layouts.menu.user')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0" x-data=""
                      x-init="$el.focus()">
