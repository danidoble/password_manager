<div class="space-y-1">
@php
    $class_a_inactive = 'text-gray-700 hover:text-gray-900 hover:bg-gray-50';
    $class_a_active = 'bg-gray-200 text-gray-900';
@endphp
<!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-700 hover:text-gray-900 hover:bg-gray-50" -->
    <a href="{{ route('dashboard') }}"
       class="{{ request()->routeIs('dashboard') ? $class_a_active : $class_a_inactive }} group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <!-- Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500" -->
        <svg class="text-gray-500 mr-3 h-6 w-6" x-description="Heroicon name: home"
             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
        </svg>
        {{ __('Home') }}
    </a>

    {{--
<a href="#"
   class="{{ request()->routeIs('login') ? $class_a_active : $class_a_inactive }} group flex items-center px-2 py-2 text-sm font-medium rounded-md">
    <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6"
         x-description="Heroicon name: view-list" xmlns="http://www.w3.org/2000/svg"
         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
    </svg>
    My tasks
</a>

<a href="#"
   class="{{ request()->routeIs('register') ? $class_a_active : $class_a_inactive }} group flex items-center px-2 py-2 text-sm font-medium rounded-md">
    <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6"
         x-description="Heroicon name: clock" xmlns="http://www.w3.org/2000/svg"
         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>
    Recent
</a>
--}}
</div>
{{--
<div class="mt-8">
    <!-- Secondary navigation -->
    <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider"
        id="teams-headline">
        Teams
    </h3>
    <div class="mt-1 space-y-1" role="group" aria-labelledby="teams-headline">

        <a href="#"
           class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                        <span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full"
                                              aria-hidden="true"></span>
            <span class="truncate">
                      Engineering
                    </span>
        </a>

        <a href="#"
           class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                        <span class="w-2.5 h-2.5 mr-4 bg-green-500 rounded-full"
                                              aria-hidden="true"></span>
            <span class="truncate">
                      Human Resources
                    </span>
        </a>

        <a href="#"
           class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                        <span class="w-2.5 h-2.5 mr-4 bg-yellow-500 rounded-full"
                                              aria-hidden="true"></span>
            <span class="truncate">
                      Customer Success
                    </span>
        </a>

    </div>
</div>
--}}
<div class="space-y-1 mt-2">
    <div class="text-xs text-gray-500">
        {{ __('Created by') }} {{ __('danidoble') }}
    </div>
</div>
