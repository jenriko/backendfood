<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Food &raquo; {{ $food->name }} &raquo; Edit
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <form class="w-full" action="{{ route('foods.update', $food->id) }}" method="post"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('put')
                    @include('foods._form')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
