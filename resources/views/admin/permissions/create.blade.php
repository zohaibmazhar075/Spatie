<x-admin-layout>
    <div class="w-full p-5">
        {{-- <div class="flex justify-end mb-6">
            <a href=""
                class="bg-blue-500 rounded-lg font-bold text-white text-center px-4 py-2 transition duration-300 ease-in-out hover:bg-blue-600">Create
                Role</a>
        </div> --}}
        <div>
            <form method="POST" action="{{route('admin.permissions.store')}}" class="border border-gray-200 shadow-xs mx-auto rounded-lg p-10 bg-white space-y-6 flex-grow">
                @csrf
                <div class="">
                    <div class="">
                        <label for="name" class="self-start mb-2 font-medium text-gray-800">Name</label>
                    </div>
                    <div class="">
                        <input type="text" id="name" placeholder="Enter name" name="name"
                        class="w-full outline-none px-2 py-2 border shadow-sm placeholder-gray-500 opacity-50 rounded"
                        autocomplete="off" />
                    </div>
                        @error('name') <span class="error text-red-400 text-sm">{{$message}}</span> @enderror
                </div>

                <button type="submit" class="bg-blue-500 rounded-lg font-bold text-white text-center px-4 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                    Create
                </button>
            </form>
        </div>
    </div>
</x-admin-layout>
