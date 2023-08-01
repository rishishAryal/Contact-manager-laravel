<x-layout>
<h1 class="text-3xl font-bold text-green-500
">Add a new Contact</h1>
    <form method="post" action="/contacts/create" class="w-full max-w-lg bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input name="name" class="shadow appearance-none border rounded w-full
             py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                   id="name" type="text"
                   required
                   value="{{old('name', ' ')}}">
            @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>

            <input name="email"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700
             leading-tight focus:outline-none focus:shadow-outline"
                   id="email"
                   type="email"

                   required
                   value="{{old('email', ' ')}}"
                   >
            @error('email`')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone_number">
                Number
            </label>
            <input name="phone_number"
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                   id="number" type="text"
                   placeholder="123-456-7890"
                   required
                   value="{{old('phone_number', ' ')}}"
                   >
            @error('phone_number')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                Address
            </label>
            <textarea name="address" class="shadow appearance-none border rounded
             w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
              focus:shadow-outline" id="address" placeholder="123 Main St, City"
                      required >{{old('address', ' ')}}</textarea>
            @error('address')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center justify-start">
            <x-button>Create</x-button>
            <a  href="/" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Cancel
            </a>
        </div>

    </form>






</x-layout>
