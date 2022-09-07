<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User &raquo; {{ $user->name }} &raquo; Edit
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <form class="w-full" action="{{ route('users.update', $user->id) }}" method="post"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('put')
                    @include('users._form')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
