@if (session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 1000)"
         x-show="show"
         class=" fixed w-fit bg-blue-500 text-white py-2 px-4 rounded-xl bottom-20 left-3  text-sm"
    >
        <p>{{ session('success') }}</p>
    </div>
@endif
