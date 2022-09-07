<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {!! __('Food &raquo; create') !!}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <form class="w-full" action="{{ route('foods.store') }}" method="post"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    @include('foods._form')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
