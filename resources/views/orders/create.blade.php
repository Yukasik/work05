<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('orders.store') }}">
                    @csrf
                    <select name="order_id">
                        @foreach($orders as $order)
                        <option value="{{$order->id}}">{{$order->address}} <br> {{$order->repair_type}} <br> {{$order->date_time}} <br> {{$order->pay_type}}</option>
                        @endforeach
                    </select>
                    <input type="text" name="address" value="{{old('address')}}">
                    <input type="text" name="repair_type" value="{{old('repair_type')}}">
                    <input type="datetime-local" name="date_time" value="{{old('date_time')}}">
                    <input type="text" name="pay_type" value="{{old('pay_type')}}">
                    <button type="submit">Сохранить</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>