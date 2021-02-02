<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Password manager') }}
        </h2>
    </x-slot>
    <div class="py-12">
        @php
            $key = \App\Models\Keys::first();
                if(empty($key)){
                    //key_data	type
                    \App\Http\Controllers\KeysController::makeForApp(100);
                }

                $pass = \App\Models\Password::where('site_name','test')->first();
                if(!empty($pass)){
                $k1 = \App\Models\Keys::find($pass->key_one_id);
                $k2 = \App\Models\Keys::find($pass->key_two_id);

                $decrypted = \App\Http\Controllers\CryptController::decrypt($pass->password,$k1->key_data,$k2->key_data);
                echo $decrypted;
                }
        @endphp

        @livewire('passwords.index')
    </div>
</x-app-layout>
