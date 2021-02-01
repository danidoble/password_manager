<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ mb_convert_case($password->site_name,MB_CASE_TITLE,'UTF-8') }}
        </h2>
    </x-slot>
    <div class="py-12">

        <header>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight text-gray-900">
                    {{ __('history') }}
                </h1>
            </div>
        </header>
        <main>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flow-root">
                    @php
                        $total_old_passwords = !empty($old_passwords) ? count($old_passwords) : 0;
                    @endphp

                    <ul class="-mb-8">
                        <li>
                            <div class="relative pb-8">
                                @if($total_old_passwords > 0)
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                @endif
                                <div class="relative flex space-x-3">
                                    <div>
                                        <div
                                            class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                            <!-- Heroicon name: check -->
                                            <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                        <div>
                                            <p class="text-sm text-gray-500">{{ __('This password is the most recent') }}
                                                - <span href="#" class="font-medium text-gray-900">
                                                    {{ $password->updated_at->diffForHumans() }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                            <time datetime="{{ date('Y-m-d',strtotime($password->updated_at)) }}">
                                                {{ date('M d',strtotime($password->updated_at)) }}
                                            </time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        @foreach($old_passwords as $key => $old)
                            <li>
                                <div class="relative pb-8">
                            @if(($key+1) < $total_old_passwords)
                                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    @endif
                                    <div class="relative flex space-x-3">
                                        <div>
                                            <div
                                                class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
                                                <!-- Heroicon name: user -->
                                                <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20" fill="currentColor"
                                                     aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">
                                                    {{ __('Password changed') }}
                                                    <span class="font-medium text-gray-900">
                                                        {{ $old->deleted_at->diffForHumans() }}
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                <time datetime="{{ date('Y-m-d',strtotime($old->deleted_at)) }}">
                                                    {{ date('M d',strtotime($old->deleted_at)) }}
                                                </time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </main>

    </div>
</x-app-layout>
