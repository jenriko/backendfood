<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Transaction &raquo; {{ $item->food->name }} by {{ $item->user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full rounded overflow-hidden shadow-lg px-6 py-6 bg-white">
                <div class="flex flex-wrap -mx-4 md:mb-0">
                    <div class="w-full md:w-1/6 px-4 mb-4 md:mb-0">
                        <img src="{{ $item->food->picturePath }}" alt=""
                            class="w-full rounded">
                    </div>
                    <div class="w-full md:w-5/6 px-4 mb-4 md:mb-0">
                        <div class="flex flex-wrap mb-3">
                            <div class="w-2/6">
                                <div class="text-sm">Product Name</div>
                                <div class="text-xl font-bold">{{ $item->food->name }}</div>
                            </div>
                            <div class="w-1/6">
                                <div class="text-sm">Quantity</div>
                                <div class="text-xl font-bold">{{ number_format($item->quantity) }}</div>
                            </div>
                            <div class="w-1/6">
                                <div class="text-sm">Total</div>
                                <div class="text-xl font-bold">{{ $item->total }}</div>
                            </div>
                            <div class="w-1/6">
                                <div class="text-sm">Status</div>
                                <div class="text-xl font-bold">{{ $item->status }}</div>
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-3">
                            <div class="w-2/6">
                                <div class="text-sm">User Name</div>
                                <div class="text-xl font-bold">{{ $item->user->name }}</div>
                            </div>
                            <div class="w-3/6">
                                <div class="text-sm">Email</div>
                                <div class="text-xl font-bold">{{ $item->user->email }}</div>
                            </div>
                            <div class="w-1/6">
                                <div class="text-sm">City</div>
                                <div class="text-xl font-bold">{{ $item->user->city }}</div>
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-5">
                            <div class="w-2/6">
                                <div class="text-sm">Address</div>
                                <div class="text-xl font-bold">{{ $item->user->address }}</div>
                            </div>
                            <div class="w-2/6">
                                <div class="text-sm">House Number</div>
                                <div class="text-xl font-bold">{{ $item->user->house_number }}</div>
                            </div>
                            <div class="w-2/6">
                                <div class="text-sm">Phone Number</div>
                                <div class="text-xl font-bold">{{ $item->user->phone_number }}</div>
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-3">
                            <div class="w-5/6">
                                <div class="text-sm">Paymen Url</div>
                                <div class="text-lg">
                                    <a href="{{ $item->payment_url }}">{{ $item->payment_url }}</a>
                                </div>
                            </div>
                            <div class="w-1/6">
                                <div class="text-sm mb-1">Change Status</div>
                                <a href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'ON_DELIVERY']) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 rounded block mb-1 text-center w-full">
                                    ON DELIVERY
                                </a>
                                <a href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'DELIVERED']) }}"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block mb-1 text-center w-full">
                                    DELIVERED
                                </a>
                                <a href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'CANCELED']) }}"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold px-2 rounded block mb-1 text-center w-full">
                                    CANCELED
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
