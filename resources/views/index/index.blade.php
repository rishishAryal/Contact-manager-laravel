
<x-layout>

    <a  class="text-2xl text-white px-4 py-2 bg-blue-500 hover:bg-blue-800 m-2 block w-fit border-0 rounded-full  " href="/contacts/create">+</a>

    <table class="w-full border-collapse table-auto">
        <thead>
        <tr class="bg-gray-200 w-full">
            <th class="px-4 py-2">Username</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Address</th>
            <th class="px-4 py-2">Number</th>
            <th class="px-4 py-2"></th>
            <th class="px-4 py-2">Actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr class="border">
                <td class="px-2 py-2">{{$contact->name}}</td>
                <td class="px-2 py-2">{{$contact->email}}</td>
                <td class="px-2 py-2">{{$contact->address}}</td>
                <td class="px-2 py-2">{{$contact->phone_number}}</td>
                <td class="px-2 py-2">
                    <form method="POST" action="/contacts/delete/{{$contact->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </form>
                </td>
                <td class="px-4 py-2">
                    <a href="/contacts/{{$contact->id}}/edit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">Edit</a>
                </td>
            </tr>
        @endforeach
        <!-- Add more rows as needed -->
        </tbody>
    </table>



</x-layout>
