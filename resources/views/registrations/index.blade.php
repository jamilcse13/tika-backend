<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vaccines') }}
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
                            <th class="border-l border-t px-2 py-1 text-left">Date of Birth</th>
                            <th class="border-l border-t px-2 py-1 text-left">Id No</th>
                            <th class="border-l border-t px-2 py-1 text-left">Phone</th>
                            <th class="border-l border-t px-2 py-1 text-left">Center Id</th>
                            <th class="border-l border-t px-2 py-1 text-left">Upcoming date</th>
                            <th class="border-l border-t px-2 py-1 text-left">V1 date</th>
                            <th class="border-l border-t px-2 py-1 text-left">V2 date</th>
                            <th class="border-l border-t px-2 py-1 text-left">Diabetes</th>
                            <th class="border-l border-t px-2 py-1 text-center">Actions</th>
                        </tr>

                        @foreach($registrations as $registration)
                            <tr>
                                <td class="border-l border-t px-2 py-1 text-left">{{ $registration->name }}</td>
                                <td class="border-l border-t px-2 py-1 text-left">{{ date('d-m-Y', strtotime($registration->dob)) }}</td>
                                <td class="border-l border-t px-2 py-1 text-left">{{ $registration->id_no }}</td>
                                <td class="border-l border-t px-2 py-1 text-left">{{ $registration->phone_no }}</td>
                                <td class="border-l border-t px-2 py-1 text-left">{{ $registration->center_id }}</td>
                                <td class="border-l border-t px-2 py-1 text-left">{{ date('d-m-Y', strtotime($registration->upcoming_date)) }}</td>
                                <td class="border-l border-t px-2 py-1 text-left">{{ date('d-m-Y', strtotime($registration->v1_date)) }}</td>
                                <td class="border-l border-t px-2 py-1 text-left">{{ date('d-m-Y', strtotime($registration->v2_date)) }}</td>
                                <td class="border-l border-t px-2 py-1 text-left">{{ $registration->diabetes }}</td>
                                <td class="border-l border-t px-2 py-1 text-center">
                                    <a href="{{ route('registrations.edit', $registration->id) }}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
