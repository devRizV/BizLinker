<div class="p-2 m-2 justify-end">
    <div>
        <form action="{{route('search', )}}" method="GET">
            @method('get')

            <div class="flex mb-2"> 
                <x-checkbox id="searchByName" name="searchByName" :hover='true' label="By name" :checked="request('searchByName')"/>
                
                <x-checkbox id="searchByAddress" name="searchByAddress" :hover='true' label="By address" :checked="request('searchByAddress')" />
                
                <x-checkbox id="searchByDomain" name="searchByDomain" :hover='true' label="By domain" :checked="request('searchByDomain')"/>
                
                <x-checkbox id="searchByPhoneNo" name="searchByPhoneNo" :hover='true' label="By phone number" :checked="request('searchByPhone')"/>
            </div>
            <div class="flex mb-2">
                <x-text-input name="query" id="searchBar" placeholder="Search..." class="w-full mx-1"></x-text-input>
                
                
                <x-primary-button class="hover:shadow-modern hover:shadow-blue-500">{{__(('Search'))}}</x-primary-button>
            </div>
            <x-input-error :messages="$errors->get('query')" />
        </form>        
    </div>
</div>