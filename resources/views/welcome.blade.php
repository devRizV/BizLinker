<x-app-layout>
    <x-slot name="header">
        <div class="shrink-0 flex items-center text-white">
            <h1 class="mx-4 text-xl font-bold">Welcome to BizLinker</h1>
        </div>
    </x-slot>
    <div class="flex sm:justify-center items-center pt-2 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <x-searchbar/>
        </div>
    </div>
</x-app-layout>