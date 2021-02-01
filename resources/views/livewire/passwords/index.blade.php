<div>
    <!-- Page title & actions -->
    <div class="border-b border-gray-200 px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
        <div class="flex-1 min-w-0">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">
                Home
            </h1>
        </div>
        <div class="mt-4 flex sm:mt-0 sm:ml-4">
            <button type="button"
                    class="order-1 ml-3 inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:order-0 sm:ml-0">
                Share
            </button>
            <button type="button"
                    class="order-0 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:order-1 sm:ml-3">
                Create
            </button>
        </div>
    </div>
    <!-- Pinned projects -->
    <div class="px-4 mt-6 sm:px-6 lg:px-8">
        <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Pinned Projects</h2>
        <ul class="grid grid-cols-1 gap-4 sm:gap-6 sm:grid-cols-2 xl:grid-cols-4 mt-3" x-max="1">

            <li x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                class="relative col-span-1 flex shadow-sm rounded-md">
                <div
                    class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">
                    GA
                </div>
                <div
                    class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                        <a href="#" class="text-gray-900 font-medium hover:text-gray-600">
                            GraphQL API
                        </a>
                        <p class="text-gray-500">12 Members</p>
                    </div>
                    <div class="flex-shrink-0 pr-2">
                        <button @click="open = !open" id="pinned-project-options-menu-0" aria-haspopup="true"
                                :aria-expanded="open"
                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            <span class="sr-only">Open options</span>
                            <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="z-10 mx-3 origin-top-right absolute right-10 top-3 w-48 mt-1 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                             role="menu" aria-orientation="vertical" aria-labelledby="pinned-project-options-menu-0"
                             style="display: none;">
                            <div class="py-1" role="none">
                                <a href="#"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                   role="menuitem">View</a>
                            </div>
                            <div class="py-1" role="none">
                                <a href="#"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                   role="menuitem">Removed from pinned</a>
                                <a href="#"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                   role="menuitem">Share</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                class="relative col-span-1 flex shadow-sm rounded-md">
                <div
                    class="flex-shrink-0 flex items-center justify-center w-16 bg-purple-600 text-white text-sm font-medium rounded-l-md">
                    NB
                </div>
                <div
                    class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                        <a href="#" class="text-gray-900 font-medium hover:text-gray-600">
                            New Benefits Plan
                        </a>
                        <p class="text-gray-500">8 Members</p>
                    </div>
                    <div class="flex-shrink-0 pr-2">
                        <button @click="open = !open" id="pinned-project-options-menu-1" aria-haspopup="true"
                                :aria-expanded="open"
                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            <span class="sr-only">Open options</span>
                            <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="z-10 mx-3 origin-top-right absolute right-10 top-3 w-48 mt-1 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                             role="menu" aria-orientation="vertical" aria-labelledby="pinned-project-options-menu-1"
                             style="display: none;">
                            <div class="py-1" role="none">
                                <a href="#"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                   role="menuitem">View</a>
                            </div>
                            <div class="py-1" role="none">
                                <a href="#"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                   role="menuitem">Removed from pinned</a>
                                <a href="#"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                   role="menuitem">Share</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                class="relative col-span-1 flex shadow-sm rounded-md">
                <div
                    class="flex-shrink-0 flex items-center justify-center w-16 bg-yellow-500 text-white text-sm font-medium rounded-l-md">
                    OE
                </div>
                <div
                    class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                        <a href="#" class="text-gray-900 font-medium hover:text-gray-600">
                            Onboarding Emails
                        </a>
                        <p class="text-gray-500">14 Members</p>
                    </div>
                    <div class="flex-shrink-0 pr-2">
                        <button @click="open = !open" id="pinned-project-options-menu-2" aria-haspopup="true"
                                :aria-expanded="open"
                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            <span class="sr-only">Open options</span>
                            <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="z-10 mx-3 origin-top-right absolute right-10 top-3 w-48 mt-1 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                             role="menu" aria-orientation="vertical" aria-labelledby="pinned-project-options-menu-2"
                             style="display: none;">
                            <div class="py-1" role="none">
                                <a href="#"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                   role="menuitem">View</a>
                            </div>
                            <div class="py-1" role="none">
                                <a href="#"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                   role="menuitem">Removed from pinned</a>
                                <a href="#"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                   role="menuitem">Share</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                class="relative col-span-1 flex shadow-sm rounded-md">
                <div
                    class="flex-shrink-0 flex items-center justify-center w-16 bg-green-500 text-white text-sm font-medium rounded-l-md">
                    IA
                </div>
                <div
                    class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                        <a href="#" class="text-gray-900 font-medium hover:text-gray-600">
                            iOS App
                        </a>
                        <p class="text-gray-500">2 Members</p>
                    </div>
                    <div class="flex-shrink-0 pr-2">
                        <button @click="open = !open" id="pinned-project-options-menu-3" aria-haspopup="true"
                                :aria-expanded="open"
                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            <span class="sr-only">Open options</span>
                            <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="z-10 mx-3 origin-top-right absolute right-10 top-3 w-48 mt-1 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                             role="menu" aria-orientation="vertical" aria-labelledby="pinned-project-options-menu-3"
                             style="display: none;">
                            <div class="py-1" role="none">
                                <a href="#"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                   role="menuitem">View</a>
                            </div>
                            <div class="py-1" role="none">
                                <a href="#"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                   role="menuitem">Removed from pinned</a>
                                <a href="#"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                   role="menuitem">Share</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>

    <!-- Projects list (only on smallest breakpoint) -->
    <div class="mt-10 sm:hidden">
        <div class="px-4 sm:px-6">
            <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Projects</h2>
        </div>
        <ul class="mt-3 border-t border-gray-200 divide-y divide-gray-100" x-max="1">

            <li>
                <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                  <span class="flex items-center truncate space-x-3">
                    <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-pink-600" aria-hidden="true"></span>
                    <span class="font-medium truncate text-sm leading-6">
                      GraphQL API
                      <span class="truncate font-normal text-gray-500">in Engineering</span>
                    </span>
                  </span>
                    <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                         x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>

            <li>
                <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                  <span class="flex items-center truncate space-x-3">
                    <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-purple-600" aria-hidden="true"></span>
                    <span class="font-medium truncate text-sm leading-6">
                      New Benefits Plan
                      <span class="truncate font-normal text-gray-500">in Human Resources</span>
                    </span>
                  </span>
                    <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                         x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>

            <li>
                <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                  <span class="flex items-center truncate space-x-3">
                    <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-yellow-500" aria-hidden="true"></span>
                    <span class="font-medium truncate text-sm leading-6">
                      Onboarding Emails
                      <span class="truncate font-normal text-gray-500">in Customer Success</span>
                    </span>
                  </span>
                    <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                         x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>

            <li>
                <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                  <span class="flex items-center truncate space-x-3">
                    <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-green-500" aria-hidden="true"></span>
                    <span class="font-medium truncate text-sm leading-6">
                      iOS App
                      <span class="truncate font-normal text-gray-500">in Engineering</span>
                    </span>
                  </span>
                    <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                         x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>

            <li>
                <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                  <span class="flex items-center truncate space-x-3">
                    <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-pink-600" aria-hidden="true"></span>
                    <span class="font-medium truncate text-sm leading-6">
                      Marketing Site Redesign
                      <span class="truncate font-normal text-gray-500">in Engineering</span>
                    </span>
                  </span>
                    <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                         x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>

            <li>
                <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                  <span class="flex items-center truncate space-x-3">
                    <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-purple-600" aria-hidden="true"></span>
                    <span class="font-medium truncate text-sm leading-6">
                      Hire CFO
                      <span class="truncate font-normal text-gray-500">in Human Resources</span>
                    </span>
                  </span>
                    <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                         x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>

            <li>
                <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                  <span class="flex items-center truncate space-x-3">
                    <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-yellow-500" aria-hidden="true"></span>
                    <span class="font-medium truncate text-sm leading-6">
                      Android App
                      <span class="truncate font-normal text-gray-500">in Engineering</span>
                    </span>
                  </span>
                    <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                         x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>

            <li>
                <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                  <span class="flex items-center truncate space-x-3">
                    <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-green-500" aria-hidden="true"></span>
                    <span class="font-medium truncate text-sm leading-6">
                      New Customer Portal
                      <span class="truncate font-normal text-gray-500">in Engineering</span>
                    </span>
                  </span>
                    <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                         x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>

            <li>
                <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                  <span class="flex items-center truncate space-x-3">
                    <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-pink-600" aria-hidden="true"></span>
                    <span class="font-medium truncate text-sm leading-6">
                      Co-op Program
                      <span class="truncate font-normal text-gray-500">in Human Resources</span>
                    </span>
                  </span>
                    <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                         x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>

            <li>
                <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                  <span class="flex items-center truncate space-x-3">
                    <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-purple-600" aria-hidden="true"></span>
                    <span class="font-medium truncate text-sm leading-6">
                      Implement NPS
                      <span class="truncate font-normal text-gray-500">in Customer Success</span>
                    </span>
                  </span>
                    <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                         x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>

            <li>
                <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                  <span class="flex items-center truncate space-x-3">
                    <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-yellow-500" aria-hidden="true"></span>
                    <span class="font-medium truncate text-sm leading-6">
                      Employee Recognition Program
                      <span class="truncate font-normal text-gray-500">in Human Resources</span>
                    </span>
                  </span>
                    <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                         x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>

            <li>
                <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                  <span class="flex items-center truncate space-x-3">
                    <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-green-500" aria-hidden="true"></span>
                    <span class="font-medium truncate text-sm leading-6">
                      Open Source Web Client
                      <span class="truncate font-normal text-gray-500">in Engineering</span>
                    </span>
                  </span>
                    <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                         x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>

        </ul>
    </div>

    <!-- Projects table (small breakpoint and up) -->
    <div class="hidden mt-8 sm:block">
        <div class="align-middle inline-block min-w-full border-b border-gray-200">
            <table class="min-w-full">
                <thead>
                <tr class="border-t border-gray-200">
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <span class="lg:pl-2">{{ __('site name') }}</span>
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('number of passwords') }}
                    </th>
                    <th class="hidden md:table-cell px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('Last updated') }}
                    </th>
                    <th class="pr-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100" x-max="1">
                @foreach($passwords as $password)
                    <tr>
                        <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                            <div class="flex items-center space-x-3 lg:pl-2">
                                <a href="{{ route('admin.password.site_name',['site_name'=>$password->site_name]) }}" class="truncate hover:text-gray-600">
                                    <div>
                                        <span
                                            class="uppercase text-gray-900 font-bold">{{ $password->site_name }}</span>
                                        <span class="ml-2 text-gray-500 font-xs ">{{ $password->url }}</span>
                                    </div>
                                </a>
                            </div>
                        </td>
                        <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                            <div class="flex items-center space-x-2">
                                <div class="flex flex-shrink-0 -space-x-1">

                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                         src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                         alt="">

                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                         src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                         alt="">

                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                         src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                         alt="">

                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                         src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                         alt="">

                                </div>

                                <span class="flex-shrink-0 text-xs leading-5 font-medium">+8</span>
                            </div>
                        </td>
                        <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                            March 17, 2020
                        </td>
                        <td class="pr-6">
                            <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                                 class="relative flex justify-end items-center">
                                <button id="project-options-menu-0" aria-haspopup="true" :aria-expanded="open"
                                        type="button" @click="open = !open"
                                        class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                    <span class="sr-only">Open options</span>
                                    <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         aria-hidden="true">
                                        <path
                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                    </svg>
                                </button>
                                <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                                     x-transition:enter="transition ease-out duration-100"
                                     x-transition:enter-start="transform opacity-0 scale-95"
                                     x-transition:enter-end="transform opacity-100 scale-100"
                                     x-transition:leave="transition ease-in duration-75"
                                     x-transition:leave-start="transform opacity-100 scale-100"
                                     x-transition:leave-end="transform opacity-0 scale-95"
                                     class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                     role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-0"
                                     style="display: none;">
                                    <div class="py-1" role="none">
                                        <a href="#"
                                           class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                           role="menuitem">
                                            <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                 x-description="Heroicon name: pencil-alt"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                                <path fill-rule="evenodd"
                                                      d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                            Edit
                                        </a>
                                        <a href="#"
                                           class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                           role="menuitem">
                                            <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                 x-description="Heroicon name: duplicate"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                                                <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                                            </svg>
                                            Duplicate
                                        </a>
                                        <a href="#"
                                           class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                           role="menuitem">
                                            <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                 x-description="Heroicon name: user-add"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                            </svg>
                                            Share
                                        </a>
                                    </div>
                                    <div class="py-1" role="none">
                                        <a href="#"
                                           class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                           role="menuitem">
                                            <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                 x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach


                <tr>
                    <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                        <div class="flex items-center space-x-3 lg:pl-2">
                            <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-purple-600" aria-hidden="true"></div>
                            <a href="#" class="truncate hover:text-gray-600">
                          <span>
                            New Benefits Plan
                            <span class="text-gray-500 font-normal">in Human Resources</span>
                          </span>
                            </a>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                        <div class="flex items-center space-x-2">
                            <div class="flex flex-shrink-0 -space-x-1">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                            </div>

                            <span class="flex-shrink-0 text-xs leading-5 font-medium">+4</span>
                        </div>
                    </td>
                    <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                        April 4, 2020
                    </td>
                    <td class="pr-6">
                        <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                             class="relative flex justify-end items-center">
                            <button id="project-options-menu-1" aria-haspopup="true" :aria-expanded="open" type="button"
                                    @click="open = !open"
                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                <span class="sr-only">Open options</span>
                                <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                 role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-1"
                                 style="display: none;">
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: pencil-alt"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                            <path fill-rule="evenodd"
                                                  d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                                            <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                                        </svg>
                                        Duplicate
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                        </svg>
                                        Share
                                    </a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                        <div class="flex items-center space-x-3 lg:pl-2">
                            <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-yellow-500" aria-hidden="true"></div>
                            <a href="#" class="truncate hover:text-gray-600">
                          <span>
                            Onboarding Emails
                            <span class="text-gray-500 font-normal">in Customer Success</span>
                          </span>
                            </a>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                        <div class="flex items-center space-x-2">
                            <div class="flex flex-shrink-0 -space-x-1">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                            </div>

                            <span class="flex-shrink-0 text-xs leading-5 font-medium">+10</span>
                        </div>
                    </td>
                    <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                        March 30, 2020
                    </td>
                    <td class="pr-6">
                        <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                             class="relative flex justify-end items-center">
                            <button id="project-options-menu-2" aria-haspopup="true" :aria-expanded="open" type="button"
                                    @click="open = !open"
                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                <span class="sr-only">Open options</span>
                                <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                 role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-2"
                                 style="display: none;">
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: pencil-alt"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                            <path fill-rule="evenodd"
                                                  d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                                            <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                                        </svg>
                                        Duplicate
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                        </svg>
                                        Share
                                    </a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                        <div class="flex items-center space-x-3 lg:pl-2">
                            <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-green-500" aria-hidden="true"></div>
                            <a href="#" class="truncate hover:text-gray-600">
                          <span>
                            iOS App
                            <span class="text-gray-500 font-normal">in Engineering</span>
                          </span>
                            </a>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                        <div class="flex items-center space-x-2">
                            <div class="flex flex-shrink-0 -space-x-1">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                            </div>
                        </div>
                    </td>
                    <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                        March 30, 2020
                    </td>
                    <td class="pr-6">
                        <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                             class="relative flex justify-end items-center">
                            <button id="project-options-menu-3" aria-haspopup="true" :aria-expanded="open" type="button"
                                    @click="open = !open"
                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                <span class="sr-only">Open options</span>
                                <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                 role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-3"
                                 style="display: none;">
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: pencil-alt"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                            <path fill-rule="evenodd"
                                                  d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                                            <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                                        </svg>
                                        Duplicate
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                        </svg>
                                        Share
                                    </a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                        <div class="flex items-center space-x-3 lg:pl-2">
                            <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600" aria-hidden="true"></div>
                            <a href="#" class="truncate hover:text-gray-600">
                          <span>
                            Marketing Site Redesign
                            <span class="text-gray-500 font-normal">in Engineering</span>
                          </span>
                            </a>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                        <div class="flex items-center space-x-2">
                            <div class="flex flex-shrink-0 -space-x-1">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                            </div>

                            <span class="flex-shrink-0 text-xs leading-5 font-medium">+3</span>
                        </div>
                    </td>
                    <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                        June 17, 2020
                    </td>
                    <td class="pr-6">
                        <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                             class="relative flex justify-end items-center">
                            <button id="project-options-menu-4" aria-haspopup="true" :aria-expanded="open" type="button"
                                    @click="open = !open"
                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                <span class="sr-only">Open options</span>
                                <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                 role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-4"
                                 style="display: none;">
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: pencil-alt"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                            <path fill-rule="evenodd"
                                                  d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                                            <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                                        </svg>
                                        Duplicate
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                        </svg>
                                        Share
                                    </a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                        <div class="flex items-center space-x-3 lg:pl-2">
                            <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-purple-600" aria-hidden="true"></div>
                            <a href="#" class="truncate hover:text-gray-600">
                          <span>
                            Hire CFO
                            <span class="text-gray-500 font-normal">in Human Resources</span>
                          </span>
                            </a>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                        <div class="flex items-center space-x-2">
                            <div class="flex flex-shrink-0 -space-x-1">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                            </div>

                            <span class="flex-shrink-0 text-xs leading-5 font-medium">+4</span>
                        </div>
                    </td>
                    <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                        July 11, 2020
                    </td>
                    <td class="pr-6">
                        <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                             class="relative flex justify-end items-center">
                            <button id="project-options-menu-5" aria-haspopup="true" :aria-expanded="open" type="button"
                                    @click="open = !open"
                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                <span class="sr-only">Open options</span>
                                <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                 role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-5"
                                 style="display: none;">
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: pencil-alt"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                            <path fill-rule="evenodd"
                                                  d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                                            <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                                        </svg>
                                        Duplicate
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                        </svg>
                                        Share
                                    </a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                        <div class="flex items-center space-x-3 lg:pl-2">
                            <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-yellow-500" aria-hidden="true"></div>
                            <a href="#" class="truncate hover:text-gray-600">
                          <span>
                            Android App
                            <span class="text-gray-500 font-normal">in Engineering</span>
                          </span>
                            </a>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                        <div class="flex items-center space-x-2">
                            <div class="flex flex-shrink-0 -space-x-1">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                            </div>

                            <span class="flex-shrink-0 text-xs leading-5 font-medium">+8</span>
                        </div>
                    </td>
                    <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                        July 17, 2020
                    </td>
                    <td class="pr-6">
                        <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                             class="relative flex justify-end items-center">
                            <button id="project-options-menu-6" aria-haspopup="true" :aria-expanded="open" type="button"
                                    @click="open = !open"
                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                <span class="sr-only">Open options</span>
                                <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                 role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-6"
                                 style="display: none;">
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: pencil-alt"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                            <path fill-rule="evenodd"
                                                  d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                                            <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                                        </svg>
                                        Duplicate
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                        </svg>
                                        Share
                                    </a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                        <div class="flex items-center space-x-3 lg:pl-2">
                            <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-green-500" aria-hidden="true"></div>
                            <a href="#" class="truncate hover:text-gray-600">
                          <span>
                            New Customer Portal
                            <span class="text-gray-500 font-normal">in Engineering</span>
                          </span>
                            </a>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                        <div class="flex items-center space-x-2">
                            <div class="flex flex-shrink-0 -space-x-1">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                            </div>
                        </div>
                    </td>
                    <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                        July 29, 2020
                    </td>
                    <td class="pr-6">
                        <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                             class="relative flex justify-end items-center">
                            <button id="project-options-menu-7" aria-haspopup="true" :aria-expanded="open" type="button"
                                    @click="open = !open"
                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                <span class="sr-only">Open options</span>
                                <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                 role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-7"
                                 style="display: none;">
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: pencil-alt"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                            <path fill-rule="evenodd"
                                                  d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                                            <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                                        </svg>
                                        Duplicate
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                        </svg>
                                        Share
                                    </a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                        <div class="flex items-center space-x-3 lg:pl-2">
                            <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600" aria-hidden="true"></div>
                            <a href="#" class="truncate hover:text-gray-600">
                          <span>
                            Co-op Program
                            <span class="text-gray-500 font-normal">in Human Resources</span>
                          </span>
                            </a>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                        <div class="flex items-center space-x-2">
                            <div class="flex flex-shrink-0 -space-x-1">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                            </div>

                            <span class="flex-shrink-0 text-xs leading-5 font-medium">+8</span>
                        </div>
                    </td>
                    <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                        August 3, 2020
                    </td>
                    <td class="pr-6">
                        <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                             class="relative flex justify-end items-center">
                            <button id="project-options-menu-8" aria-haspopup="true" :aria-expanded="open" type="button"
                                    @click="open = !open"
                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                <span class="sr-only">Open options</span>
                                <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                 role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-8"
                                 style="display: none;">
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: pencil-alt"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                            <path fill-rule="evenodd"
                                                  d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                                            <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                                        </svg>
                                        Duplicate
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                        </svg>
                                        Share
                                    </a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                        <div class="flex items-center space-x-3 lg:pl-2">
                            <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-purple-600" aria-hidden="true"></div>
                            <a href="#" class="truncate hover:text-gray-600">
                          <span>
                            Implement NPS
                            <span class="text-gray-500 font-normal">in Customer Success</span>
                          </span>
                            </a>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                        <div class="flex items-center space-x-2">
                            <div class="flex flex-shrink-0 -space-x-1">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                            </div>

                            <span class="flex-shrink-0 text-xs leading-5 font-medium">+4</span>
                        </div>
                    </td>
                    <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                        August 8, 2020
                    </td>
                    <td class="pr-6">
                        <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                             class="relative flex justify-end items-center">
                            <button id="project-options-menu-9" aria-haspopup="true" :aria-expanded="open" type="button"
                                    @click="open = !open"
                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                <span class="sr-only">Open options</span>
                                <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                 role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-9"
                                 style="display: none;">
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: pencil-alt"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                            <path fill-rule="evenodd"
                                                  d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                                            <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                                        </svg>
                                        Duplicate
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                        </svg>
                                        Share
                                    </a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                        <div class="flex items-center space-x-3 lg:pl-2">
                            <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-yellow-500" aria-hidden="true"></div>
                            <a href="#" class="truncate hover:text-gray-600">
                          <span>
                            Employee Recognition Program
                            <span class="text-gray-500 font-normal">in Human Resources</span>
                          </span>
                            </a>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                        <div class="flex items-center space-x-2">
                            <div class="flex flex-shrink-0 -space-x-1">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                            </div>

                            <span class="flex-shrink-0 text-xs leading-5 font-medium">+8</span>
                        </div>
                    </td>
                    <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                        August 14, 2020
                    </td>
                    <td class="pr-6">
                        <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                             class="relative flex justify-end items-center">
                            <button id="project-options-menu-10" aria-haspopup="true" :aria-expanded="open"
                                    type="button" @click="open = !open"
                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                <span class="sr-only">Open options</span>
                                <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                 role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-10"
                                 style="display: none;">
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: pencil-alt"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                            <path fill-rule="evenodd"
                                                  d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                                            <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                                        </svg>
                                        Duplicate
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                        </svg>
                                        Share
                                    </a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                        <div class="flex items-center space-x-3 lg:pl-2">
                            <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-green-500" aria-hidden="true"></div>
                            <a href="#" class="truncate hover:text-gray-600">
                          <span>
                            Open Source Web Client
                            <span class="text-gray-500 font-normal">in Engineering</span>
                          </span>
                            </a>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                        <div class="flex items-center space-x-2">
                            <div class="flex flex-shrink-0 -space-x-1">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                                <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                     alt="">

                            </div>

                            <span class="flex-shrink-0 text-xs leading-5 font-medium">+8</span>
                        </div>
                    </td>
                    <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                        September 21, 2020
                    </td>
                    <td class="pr-6">
                        <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                             class="relative flex justify-end items-center">
                            <button id="project-options-menu-11" aria-haspopup="true" :aria-expanded="open"
                                    type="button" @click="open = !open"
                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                <span class="sr-only">Open options</span>
                                <svg class="w-5 h-5" x-description="Heroicon name: dots-vertical"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state."
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                 role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-11"
                                 style="display: none;">
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: pencil-alt"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                            <path fill-rule="evenodd"
                                                  d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                                            <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                                        </svg>
                                        Duplicate
                                    </a>
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                                        </svg>
                                        Share
                                    </a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#"
                                       class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                       role="menuitem">
                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                             x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
