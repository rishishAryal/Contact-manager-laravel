<!DOCTYPE html>
<html>
<head>
    <!-- Add the Tailwind CSS CDN link here -->
    @vite('resources/css/app.css')
</head>
<body>

<div class="container   mx-auto mt-8">
    {{$slot}}
</div>
<x-flash />
</body>

</html>
