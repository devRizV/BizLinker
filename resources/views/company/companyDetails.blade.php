{{-- company is a js variable that is in company_details function --}}

<div class="company-details flex bg-gray-900 p-1 rounded-lg mb-1 transition duration-300 ease-in-out transform hover:shadow-modern hover:shadow-blue-500">
    <div class="flex w-full rounded-md m-1 bg-indigo-400 dark:bg-indigo-800">
        <div class="company-title text-center content-center rounded-md  dark:text-gray-300 p-1 w-1/2 ">
            <div class="">
                <h3 class="text-2xl font-semibold mb-2">${company.company_title}</h3>
            </div>
            <a href="https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(company.address)}" target="_blank" class="">
                <div class="content-center text-center hover:bg-indigo-900 h-1/2 w-full rounded-md p-0 m-0 text-sm mt-2 transition duration-300 ease-in-out hover:-translate-y-1">
                    ${company.address}
                </div>
            </a>

        </div>
        <div class="company-info block justify-end mx-0 w-1/2 rounded-md text-gray-600   dark:text-gray-300">
            <a href="tel: ${company.mobile_no }" class="flex justify-start p-1 ml-3 transition duration-500 ease-in-out hover:-translate-y-1 hover:bg-indigo-900 hover:text-cyan-600 hover:dark:text-cyan-300 rounded-md">
                    ${ company.mobile_no }
            </a>
            <a href="mailto:${ company.email }" class="flex justify-start p-1 ml-3 transition duration-500 ease-in-out hover:-translate-y-1 hover:bg-indigo-900 hover:text-cyan-600 hover:dark:text-cyan-300 rounded-md">
                    ${ company.email }
            </a>
            <a href="${ company.url }" target="_blank" class="flex justify-start p-1 ml-3 transition duration-500 ease-in-out hover:-translate-y-1 hover:bg-indigo-900 hover:text-cyan-600 hover:dark:text-cyan-300 rounded-md">
                Visit Website
            </a>
     
        </div>
    </div>
</div>
