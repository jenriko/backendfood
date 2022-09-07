<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Foods') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <a href="{{ route('foods.create') }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ">
                    + Create Food
                </a>
            </div>
            <div class="bg-white mt-5">
                <table class="table w-full rounded-md">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="border py-2 px-4">#</th>
                            <th class="border py-2 px-4">Name</th>
                            <th class="border py-2 px-4">Price</th>
                            <th class="border py-2 px-4">Rate</th>
                            <th class="border py-2 px-4">Types</th>
                            <th class="border py-2 px-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($foods as $i => $food)
                            <tr>
                                <td class="border py-3 px-6">{{ $i + $foods->firstItem() }}</td>
                                <td class="border py-3 px-6">{{ $food->name }}</td>
                                <td class="border py-3 px-6">{{ $food->price }}</td>
                                <td class="border py-3 px-6">{{ $food->rate }}</td>
                                <td class="border py-3 px-6">{{ $food->types }}</td>
                                <td class="border py-3 px-6 text-center">
                                    <div class="flex items-center">
                                        <a href="{{ route('foods.edit', $food->id) }}"
                                            class="mr-2 inline-flex bg-indigo-500 hover:bg-indigo-700 text-white py-2 px-4 mx-2 rounded">Edit</a>
                                        <form action="{{ route('foods.destroy', $food->id) }}" method="post">
                                            {!! method_field('delete') . csrf_field() !!}
                                            <button type="submit"
                                                class="inline-flex items-center bg-red-500 hover:bg-red-700 text-white py-2 px-4 mx-2 rounded">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="border text-center p-5">
                                    Data Tidak Ditemukan
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-5">
                {{ $foods->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
