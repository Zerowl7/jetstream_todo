<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My To-Do List') }}
        </h2>
    </x-slot>

    {{-- Подключаем форму --}}
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('toda.form')
        </div>
    </div>

    {{-- Подключаем представление --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('toda.show')
            </div>
        </div>
    </div>
</x-app-layout>
