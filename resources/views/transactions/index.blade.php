<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaction') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white mt-5">
                <table class="table-auto w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="border py-2 px-4">#</th>
                            <th class="border py-2 px-4">User</th>
                            <th class="border py-2 px-4">Food</th>
                            <th class="border py-2 px-4">Quantity</th>
                            <th class="border py-2 px-4">Total</th>
                            <th class="border py-2 px-4">Status</th>
                            <th class="border py-2 px-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transactions as $i => $item)
                            <tr>
                                <td class="border py-3 px-6">{{ $i + $transactions->firstItem() }}</td>
                                <td class="border py-3 px-6">{{ $item->user->name }}</td>
                                <td class="border py-3 px-6">{{ $item->food->name }}</td>
                                <td class="border py-3 px-6">{{ $item->quantity }}</td>
                                <td class="border py-3 px-6">{{ number_format($item->total) }}</td>
                                <td class="border py-3 px-6">{{ $item->status }}</td>
                                <td class="border py-3 px-6 text-center">
                                    <div class="flex items-center">
                                        <a href="{{ route('transactions.show', $item->id) }}"
                                            class="mr-2 inline-flex bg-indigo-500 hover:bg-indigo-700 text-white py-2 px-4 mx-2 rounded">VIEW</a>
                                        <form action="{{ route('transactions.destroy', $item->id) }}" method="post">
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
                {{ $transactions->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
