<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form method="POST" action="{{ route('contact.store') }}">
            @csrf  
                <div>
                                      
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />

                </div>
                <div>
                                      
                    <x-input-label for="mobile" :value="__('Mobile')" />
                    <x-text-input id="mobile" class="block mt-1 w-full" type="number" name="mobile" :value="old('mobile')" required autofocus autocomplete="mobile" />

                </div>
                
                <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div>
                                      
                    <x-input-label for="group" :value="__('Group')" />
                    <x-text-input id="group" class="block mt-1 w-full" type="text" name="group" :value="old('group')" required autofocus autocomplete="group" />

        </div>
                

                <div>
                    <x-primary-button class="ml-3">
                        {{ __('Add Contact') }}
                    </x-primary-button>
                </div>

                </form>
           

            </div>
        </div>
    </div>
</x-app-layout>