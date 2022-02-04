<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="w-full font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Vaccination Center') }}
            </h2>
            <div class="min-w-max">
                <a href="{{ route('vaccination-centers.index') }}" class="p-2 bg-gray-800 text-white">Back</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('vaccination-centers.update', $vaccination_center->id) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <p class="mb-6">
                            <label for="name" class="w-full text-gray-600 text-sm uppercase">Name</label>
                            <input id="name" name="name" type="text" class="border p-3 w-full" value="{{ $vaccination_center->name }}">
                            @error('name')
                            <span class="block text-red-600">{{ $message }}</span>
                            @enderror
                        </p>

                        <p class="mb-6">
                            <label for="upazila_id" class="w-full text-gray-600 text-sm uppercase">Upazila Id</label>
                            <input id="upazila_id" name="upazila_id" type="number" min="1" max="491" class="border p-3 w-full" value="{{ $vaccination_center->upazila_id }}">
                            @error('upazila_id')
                            <span class="block text-red-600">{{ $message }}</span>
                            @enderror
                        </p>

                        <p class="mb-6">
                            <label for="vaccine_id" class="w-full text-gray-600 text-sm uppercase">Vaccine Id</label>
                            <input id="vaccine_id" name="vaccine_id" type="number" min="1" max="5" class="border p-3 w-full" value="{{ $vaccination_center->vaccine_id }}">
                            @error('vaccine_id')
                            <span class="block text-red-600">{{ $message }}</span>
                            @enderror
                        </p>

                        <p class="mb-6">
                            <label for="available" class="w-full text-gray-600 text-sm uppercase">Available</label>
                            <input id="available" name="available" type="text" class="border p-3 w-full" value="{{ $vaccination_center->available }}">
                            @error('name')
                            <span class="block text-red-600">{{ $message }}</span>
                            @enderror
                        </p>

                        <button type="submit" class="py-3 px-6 bg-gray-800 text-white">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
