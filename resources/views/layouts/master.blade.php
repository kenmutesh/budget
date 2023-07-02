<!-- app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head section content -->
</head>
@vite('resources/css/app.css')
<body>
    <!-- Sidebar -->
    <div x-data="{ sidebarOpen: true }" class="flex overflow-x-hidden h-screen">
        <aside class="flex-shrink-0 w-64 flex flex-col border-r transition-all duration-300" :class="{ '-ml-64': !sidebarOpen }">
            <div class="h-64 bg-gray-900"></div>
            <nav class="flex-1 flex flex-col bg-gray-900 text-white">
                <a href="#" class="p-2">Nav Link 1</a>
                <a href="#" class="p-2">Nav Link 2</a>
                <a href="#" class="p-2">Nav Link 3</a>
            </nav>
        </aside>
        <div class="flex-1">
            <header class="flex items-center p-4 text-semibold text-gray-100 bg-gray-900">
                <button class="p-1 mr-4" @click="sidebarOpen = !sidebarOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                Header
            </header>
            <main class="p-4">
                @yield('content')
            </main>
        </div>
    </div>

<!-- Additional Scripts -->
</body>

</html>
