<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('админка') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   @foreach($orders as $order)
                    <div class="border border-solid border-black">
                    {{$order -> user -> name}}<br>
                    {{$order -> user -> lastname}}<br>
                    {{$order -> user -> middlename}}<br>
                    {{$order -> user -> tel}}<br>
                    {{$order -> user -> email}}<br>
                    {{$order -> address}}<br>
                    {{$order -> repair_type}}<br>
                    {{$order -> pay_type}}<br>
                    {{$order -> date_time}}<br>

                    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select name="status" onchange="this.form.submit()">
                            <option value="Новая" {{ $order->status == 'Новая' ? 'selected' : '' }}>Новая</option>
                            <option value="В процессе" {{ $order->status == 'В процессе' ? 'selected' : '' }}>В процессе</option>
                            <option value="Завершена" {{ $order->status == 'Завершена' ? 'selected' : '' }}>Завершена</option>
                            <option value="Отменена" {{ $order->status == 'Отменена' ? 'selected' : '' }}>Отменена</option>
                        </select>
                    </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>