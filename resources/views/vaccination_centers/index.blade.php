<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vaccination Center') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if(Session::get('success'))
                        <div class="p-3 bg-green-200 mb-6">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <table class="w-full border-r border-b">
                        <tr>
                            <th class="border-l border-t px-2 py-1 text-left">Name</th>
                            <th class="border-l border-t px-2 py-1 text-left">Upazila Id</th>
                            <th class="border-l border-t px-2 py-1 text-left">Vaccine Id</th>
                            <th class="border-l border-t px-2 py-1 text-center">Available</th>
                            <th class="border-l border-t px-2 py-1 text-center">Actions</th>
                        </tr>

                        @foreach($vaccination_centers as $vaccination_center)
                            <tr>
                                <td class="border-l border-t px-2 py-1 text-left">{{ $vaccination_center->name }}</td>
                                <td class="border-l border-t px-2 py-1 text-left">{{ $vaccination_center->upazila_id }}</td>
                                <td class="border-l border-t px-2 py-1 text-left">{{ $vaccination_center->vaccine_id }}</td>
                                <td class="border-l border-t px-2 py-1 text-left">{{ $vaccination_center->available }}</td>
                                <td class="border-l border-t px-2 py-1 text-center">
                                    <a href="{{ route('vaccination-centers.edit', $vaccination_center->id) }}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
