<x-app-layout>
    <div class="flex w-full">
        <div class="flex justify-start m-auto ml-10 w-full">
            <h1 class="flex justify-center content-center text-center text-2xl font-bold text-gray-300 p-2 w-auto">
                BizLinker
            </h1>
        </div>
         <div class="flex justify-end w-full">
             <x-searchbar/>
         </div>
    </div>

    
    <div class="flex justify-center w-full mt-1 border-t border-t-gray-300">
        <div class="mt-2 mb-4 bg-gray-800 w-3/4 rounded-md hover:border-b hover:border-blue-900">
            <h3 class="text-md text-blue-600 dark:text-blue-400 space-y-1">Search results for <b>"{{ $searchQuery }}"</b></h3>
            <p class="text-sm text-red-600 dark:text-red-400 space-y-1">
                About {{ count($searchResults) }} results in {{ $executionTime }} second(s)
            </p>
            <div class="block content-center justify-center text-center">
                <div class="flex content-center justify-end text-center p-2 mx-6">
                    <x-select id="filter" name="filter" placeholder="Select filter" class="dark:text-red-500" :options="[
                        'searchByName' => 'Name',
                        'searchByAddress' => 'Address',
                        'searchByDomain' => 'Domain',
                        'searchByPhoneNo' => 'Phone Number',
                    ]" />
                </div>

                <div class="justify-start content-start text-left p-2 mt-2 mb-4">
                    <div id="content">
                        {{-- searched content here --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@include('js/customJS')