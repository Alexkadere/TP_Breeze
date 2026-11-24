<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Hello</h2>
    </x-slot>

    <x-card>
        <div class="text-center font-bold text-indigo-600">
            Bonjour {{ Auth::user()->name }} 👋
        </div>
    </x-card>
</x-app-layout>