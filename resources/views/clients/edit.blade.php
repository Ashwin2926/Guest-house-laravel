<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Clients List') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          
                <form action="{{ route('current.update',$current->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="mb-4">
                    <label for="textname"
                        class="block mb-2 text-sm font-bold text-gray-700">Name</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="name"
                        value="{{ $current->name }}"
                        placeholder="Enter name">
                    @error('name') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>
                <div class="mb-4">
                    <label for="textemail"
                        class="block mb-2 text-sm font-bold text-gray-700">Phone</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="phone"
                        value="{{ $current->phone }}"
                        placeholder="Enter phone">    
                </div>
                <div class="mb-4">
                    <label for="textemail"
                        class="block mb-2 text-sm font-bold text-gray-700">Check In</label>
                    <input type="date"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="check_in"
                        value="{{ $current->check_in }}">    
                </div>
                <div class="mb-4">
                    <label for="textemail"
                        class="block mb-2 text-sm font-bold text-gray-700">Check Out</label>
                    <input type="date"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="check_out"
                        value="{{ $current->check_out }}">    
                </div>
                <div class="mb-4">
                    <label for="textemail"
                        class="block mb-2 text-sm font-bold text-gray-700">Room</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="room"
                        value="{{ $current->room }}"
                        placeholder="Room number">    
                </div>
                <div class="mb-4">
                    <label for="textemail"
                        class="block mb-2 text-sm font-bold text-gray-700">Items</label>
                    <input type="textarea"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="items"
                        value="{{ $current->items }}"
                        placeholder="Room items">    
                </div>
                <div>
                <div>
                    <button type="submit"
                    class="inline-flex items-center px-4 py-2 my-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                        Save
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
