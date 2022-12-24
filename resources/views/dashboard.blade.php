<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
                    <livewire:create-contact/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
