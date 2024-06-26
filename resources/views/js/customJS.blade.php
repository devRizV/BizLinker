
<script type="text/javascript">
    /*
    * 
    *   for filtering search results
    * 
    */
    const content = document.getElementById('content');
    const searchResults = @json($searchResults);
    


    document.getElementById('filter').addEventListener('change', function(){

        const filter = this.value;
        content.innerHTML = '';

        ( typeof(searchResults[filter]) != undefined ? 
            (searchResults[filter].length > 0 ? 
                searchResults[filter].forEach(results => {
                    content.innerHTML += company_details(results);}) 
                        : content.innerHTML = showNoResultFound() ) 
                            :  content.innerHTML = showNoResultFound() );
    });
    
    
    function company_details(company) {
        return `@include('company.companyDetails')`;
    }

    function showNoResultFound() {
        return `<div class="flex sm:justify-center items-center w-full pt-2 sm:pt-0 bg-gray-100 dark:bg-gray-900">
                    <div class="-full sm:max-w-md mt-6 px-6 py-4 text-red-900 dark:text-red-500 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                        <p> NO RESULTS FOUND </p>
                    </div>
                </div>
                `;
    }

</script>