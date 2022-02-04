<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="w-full font-semibold text-xl text-gray-800 leading-tight">
                {{ __('People Edit') }}
            </h2>
            <div class="min-w-max">
                <a href="{{ route('peoples.index') }}" class="p-2 bg-gray-800 text-white">Back</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('peoples.update', $people->id) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <p class="mb-6">
                            <label for="id_no" class="w-full text-gray-600 text-sm uppercase">Id No</label>
                            <input id="id_no" name="id_no" type="text" class="border p-3 w-full" value="{{ $people->id_no }}">
                            @error('id_no')
                            <span class="block text-red-600">{{ $message }}</span>
                            @enderror
                        </p>

                        <p class="mb-6">
                            <label for="dob" class="w-full text-gray-600 text-sm uppercase">Id No</label>
                            <input id="dob" name="dob" type="date" class="border p-3 w-full" value="{{ date('Y-m-d', strtotime($people->dob)) }}">
                            @error('dob')
                            <span class="block text-red-600">{{ $message }}</span>
                            @enderror
                        </p>

                        <p class="mb-6">
                            <label for="office" class="w-full text-gray-600 text-sm uppercase">Office</label>
                            <input id="office" name="office" type="text" class="border p-3 w-full" value="{{ $people->office }}">
                            @error('office')
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
