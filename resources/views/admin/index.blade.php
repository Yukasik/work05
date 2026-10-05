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
                    {{$order -> address}}<br>
                    {{$order -> repair_type}}<br>
                    {{$order -> date_time}}<br>
                    {{$order -> pay_type}}<br>
                    {{$order -> status}}<br>
                    </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>