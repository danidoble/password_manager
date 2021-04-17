<div class="py-1">
    <a href="{{ route('profile.show') }}"
       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
       role="menuitem">{{ __('Profile') }}</a>
    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
        <a href="{{ route('api-tokens.index') }}"
           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
           role="menuitem">{{ __('API Tokens') }}</a>
    @endif
    {{--
    <a href="#"
       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
       role="menuitem">Settings</a>
    <a href="#"
       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
       role="menuitem">Notifications</a>

</div>
<div class="py-1">
        <a href="#"
       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
       role="menuitem">Get desktop app</a>
    <a href="#"
       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
       role="menuitem">Support</a>
       --}}
</div>
<div class="py-1">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
           role="menuitem">{{ __('Logout') }}</a>
    </form>
</div>
