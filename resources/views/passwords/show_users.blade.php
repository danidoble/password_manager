<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users of this site') }}
        </h2>
    </x-slot>
    <div class="py-12">

        <header>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight text-gray-900">
                    {{ __('Users of this site') }}
                </h1>
            </div>
        </header>
        <main>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div>
                    <div class="flow-root mt-6">
                        <ul class="-my-5 divide-y divide-gray-200">
                            @foreach($passwords as $password)
                                <li class="py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="h-8 w-8 rounded-full" src="https://icdn3.digitaltrends.com/image/digitaltrends_es/bleach-382x215.jpg" alt="">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-gray-900 truncate">
                                                <span class="font-bold">
                                                    &#64;{{ $password->username === null ? 'Unknown' : $password->username }}
                                                </span>
                                            </p>
                                            <p class="text-xs text-gray-500 truncate">
                                                {{ __('Url') }}: {{ $password->url }}
                                            </p>
                                        </div>
                                        <div>
                                            <a href="{{ route('admin.password.id',['id'=>$password->id]) }}"
                                               class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">
                                                {{ __('View') }}
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </main>

    </div>
</x-app-layout>
