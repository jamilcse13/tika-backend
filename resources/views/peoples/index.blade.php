<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Peoples') }}
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
                            <th class="border-l border-t px-2 py-1 text-left">Id No</th>
                            <th class="border-l border-t px-2 py-1 text-center">Date of Birth</th>
                            <th class="border-l border-t px-2 py-1 text-center">Office</th>
                            <th class="border-l border-t px-2 py-1 text-center">Actions</th>
                        </tr>

                        @foreach($peoples as $people)
                            <tr>
                                <td class="border-l border-t px-2 py-1 text-left">{{ $people->id_no }}</td>
                                <td class="border-l border-t px-2 py-1 text-center">{{ date('d-m-Y', strtotime($people->dob)) }}</td>
                                <td class="border-l border-t px-2 py-1 text-center">{{ $people->office }}</td>
                                <td class="border-l border-t px-2 py-1 text-center">
                                    <a href="{{ route('peoples.edit', $people->id) }}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
