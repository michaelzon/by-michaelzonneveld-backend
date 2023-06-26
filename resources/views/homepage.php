<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Blog</title>
    <!-- Include Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
<header class="bg-gray-900 text-white">
    <div class="container mx-auto py-4 px-6 flex items-center justify-between">
        <h1 class="text-2xl font-bold">Photo Blog</h1>
        <nav>
            <ul class="space-x-4">
                <li class="inline-block">
                    <a href="#" class="hover:text-gray-400">Home</a>
                </li>
                <li class="inline-block">
                    <a href="#" class="hover:text-gray-400">About</a>
                </li>
                <li class="inline-block">
                    <a href="#" class="hover:text-gray-400">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<main class="container mx-auto py-6">
    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Photo 1 -->
        <div class="bg-white rounded-lg shadow-lg">
            <img src="public/pictures/photo_1.jpeg" alt="Photo 1" class="w-full h-64 object-cover rounded-t-lg">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Photo 1 Title</h2>
                <p class="text-gray-700">Photo 1 description goes here.</p>
            </div>
        </div>

        <!-- Photo 2 -->
        <div class="bg-white rounded-lg shadow-lg">
            <img src="public/pictures/photo2.jpg" alt="Photo 2" class="w-full h-64 object-cover rounded-t-lg">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Photo 2 Title</h2>
                <p class="text-gray-700">Photo 2 description goes here.</p>
            </div>
        </div>

        <!-- Photo 3 -->
        <div class="bg-white rounded-lg shadow-lg">
            <img src="path/to/photo3.jpg" alt="Photo 3" class="w-full h-64 object-cover rounded-t-lg">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Photo 3 Title</h2>
                <p class="text-gray-700">Photo 3 description goes here.</p>
            </div>
        </div>

        <!-- Add more photo entries as needed -->
    </section>
</main>
</body>

</html>
