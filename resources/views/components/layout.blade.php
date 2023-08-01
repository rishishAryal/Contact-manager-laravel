<!DOCTYPE html>
<html>
<head>
    <!-- Add the Tailwind CSS CDN link here -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body>

<div class="container   mx-auto mt-8">
    {{$slot}}
</div>
<x-flash />
</body>

</html>
