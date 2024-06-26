
<!-- resources/views/components/sidebar.blade.php -->
<div x-data="{ open: false }" class="flex flex-col h-screen">
    <!-- Mobile menu button -->
    <div class="md:hidden p-4">
        <button @click="open = !open" class="text-gray-500 focus:outline-none focus:text-gray-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Sidebar -->
    <div :class="{'block': open, 'hidden': !open}" class="md:block flex-shrink-0 w-full md:w-64 bg-gray-800 text-white">
        <div class="p-4">
            <a href="#" class="text-lg font-semibold">Logo</a>
        </div>
        <nav class="mt-4">
            {{$slot}}
        </nav>
    </div>
</div>
