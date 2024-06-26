    
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 text-black">

        <h1 class="bg-gray-50 p-4 my-4 mx-0 font-medium text-lg">Edit Company Details</h1>


        <form method="POST" action="{{ route('company.update', $company) }}">
            @csrf
            @method('patch')

            {{--  --}}
             <x-input-label for="company_title" :value="__('Company Name')"></x-input-label>
             <x-text-input id="company_title" class="block mt-1 w-full"
                            type="text"
                            name="company_title"
                            value="{{ $company->company_title }}"
                            />
             {{--  --}}
             <x-input-label for="mobile_no" :value="__('Mobile Number')"></x-input-label>
             <x-text-input id="mobile_no" class="block mt-1 w-full"
                            type="text"
                            name="mobile_no"
                            value="{{ $company->mobile_no }}"
                            />
             {{--  --}}
             <x-input-label for="email" :value="__('Email')"></x-input-label>
             <x-text-input id="email" class="block mt-1 w-full"
                            type="email"
                            name="email"
                            value="{{ $company->email }}"
                            />
             {{--  --}}
             <x-input-label for="domain" :value="__('Domain name')"></x-input-label>
             <x-text-input id="domain" class="block mt-1 w-full"
                            type="text"
                            name="domain"
                            value="{{ $company->domain }}"
                            />
             {{--  --}}
             <x-input-label for="url" :value="__('URL')"></x-input-label>
             <x-text-input id="url" class="block mt-1 w-full"
                            type="text"
                            name="url"
                            value="{{ $company->url }}"
                            />
             {{--  --}}
             <x-input-label for="company_type" :value="__('Company Type')"></x-input-label>
             <x-text-input id="company_type" class="block mt-1 w-full"
                            type="text"
                            name="company_type"
                            value="{{ $company->company_type }}"
                            />
            {{--  --}}
             <x-input-label for="meta_desc" :value="__('Meta Description')"></x-input-label>
             <textarea id="meta_desc" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="meta_desc"
                            >{{ $company->meta_desc }}</textarea>
             {{--  --}}
             <x-input-label for="address" :value="__('Address')"></x-input-label>
             <textarea id="address" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="address"
                            >{{ $company->address }}</textarea>
             
            <x-primary-button class="mt-4">{{ __('Update') }}</x-primary-button>
        </form>
    </div>