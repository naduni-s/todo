<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto text-white">
            <h1 class="text-xl font-bold">Task Manager</h1>
            <div class="mt-2">
                <a href="{{ route('tasks.create') }}" class="text-white hover:bg-blue-700 px-4 py-2 rounded-lg">Add Task</a>
                <a href="{{ route('tasks.index') }}" class="text-white hover:bg-blue-700 px-4 py-2 rounded-lg ml-2">View Tasks</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto p-8">
        @yield('content')
    </div>

</body>
</html>
