<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Messages') }}
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
                            <th class="px-4 py-2 border">Subject</th>
                            <th class="px-4 py-2 border">Message</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($contacts))
                            @foreach($contacts as $row)
                                <tr>
                                    <td class="px-4 py-2 border">{{ $row->name }}</td>
                                    <td class="px-4 py-2 border">{{ $row->email }}</td>
                                    <td class="px-4 py-2 border">{{ $row->subject }}</td>
                                    <td class="px-4 py-2 border">{{ $row->message }}</td>
                                       
                                </tr>
                            @endforeach
                        @else
                        <tr>
                            <td class="px-4 py-2 border text-red-500" colspan="3">No messages found.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $contacts->links() }}
                </div>
        </div>
    </div>
</x-app-layout>
