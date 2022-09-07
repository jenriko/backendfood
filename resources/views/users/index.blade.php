<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <a href="{{ route('users.create') }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ">
                    + Create User
                </a>
            </div>
            <div class="bg-white mt-5">
                <table class="table w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="border py-2 px-4">#</th>
                            <th class="border py-2 px-4">Name</th>
                            <th class="border py-2 px-4">Email</th>
                            <th class="border py-2 px-4">Roles</th>
                            <th class="border py-2 px-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($user as $i => $item)
                            <tr>
                                <td class="border py-3 px-6">{{ $i + $user->firstItem() }}</td>
                                <td class="border py-3 px-6">{{ $item->name }}</td>
                                <td class="border py-3 px-6">{{ $item->email }}</td>
                                <td class="border py-3 px-6">{{ $item->roles }}</td>
                                <td class="border py-3 px-6 text-center">
                                    <div class="flex items-center">
                                        <a href="{{ route('users.edit', $item->id) }}"
                                            class="mr-2 inline-flex bg-indigo-500 hover:bg-indigo-700 text-white py-2 px-4 mx-2 rounded">Edit</a>
                                        <form action="{{ route('users.destroy', $item->id) }}" method="post">
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
                {{ $user->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
