<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients Waiting List') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <x-validation-errors />
                <x-success-message />
                
                <table class="w-full table-fixed">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 border">Name</th>
                            <th class="px-4 py-2 border">Email</th>
                            <th class="px-4 py-2 border">Phone</th>
                            <th class="px-4 py-2 border">Number of Guests</th>
                            <th class="px-4 py-2 border">Check in Date</th>
                            <th class="px-4 py-2 border">Check out Date</th>
                             <th class="px-4 py-2 border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($clients))
                            @foreach($clients as $row)
                                <tr>
                                    <td class="px-4 py-2 border">{{ $row->name }}</td>
                                    <td class="px-4 py-2 border">{{ $row->email }}</td>
                                    <td class="px-4 py-2 border">{{ $row->phone }}</td>
                                    <td class="px-4 py-2 border">{{ $row->guest_list }}</td>
                                    <td class="px-4 py-2 border">{{ $row->check_in }}</td>
                                    <td class="px-4 py-2 border">{{ $row->check_out }}</td>
                                     <td class="px-4 py-2 border">
                                        @method('delete')
                                        @csrf
                                            <a href="{{ route('shift', $row->id) }}" class="inline-flex items-center px-4 py-2 mx-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                                               accept
                                            </a>
                                            <br>
                                            <br>
                                           
                                            <a href="{{ route('clients.show', $row->id) }}" class="inline-flex items-center px-4 py-2 mx-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                                               view
                                            </a>
                                                                                    
                                        
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        <tr>
                            <td class="px-4 py-2 border text-red-500" colspan="3">No clients found.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $clients->links() }}
                </div>
        </div>
    </div>
</x-app-layout>
