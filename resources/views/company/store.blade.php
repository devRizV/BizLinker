    
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8" >

        <h1 class="bg-gray-50 p-4 my-4 mx-0 ">Add Company Details</h1>


        <form method="POST" action="{{ route('company.store') }}">
            @csrf

            {{--  --}}
             <x-input-label for="company_title" :value="__('Company Name')"></x-input-label>
             <x-text-input id="company_title" class="block mt-1 w-full"
                            type="text"
                            name="company_title"
                            />
             {{--  --}}
             <x-input-label for="mobile_no" :value="__('Mobile Number')"></x-input-label>
             <x-text-input id="mobile_no" class="block mt-1 w-full"
                            type="text"
                            name="mobile_no"
                            />
             {{--  --}}
             <x-input-label for="email" :value="__('Email')"></x-input-label>
             <x-text-input id="email" class="block mt-1 w-full"
                            type="email"
                            name="email"
                            />
             {{--  --}}
             <x-input-label for="domain" :value="__('Domain name')"></x-input-label>
             <x-text-input id="domain" class="block mt-1 w-full"
                            type="text"
                            name="domain"
                            />
             {{--  --}}
             <x-input-label for="url" :value="__('URL')"></x-input-label>
             <x-text-input id="url" class="block mt-1 w-full"
                            type="text"
                            name="url"
                            />
             {{--  --}}
             <x-input-label for="company_type" :value="__('Company Type')"></x-input-label>
             <x-text-input id="company_type" class="block mt-1 w-full"
                            type="text"
                            name="company_type"
                            />
            {{--  --}}
             <x-input-label for="meta_desc" :value="__('Meta Description')"></x-input-label>
             <x-textarea-input id="meta_desc" class="block mt-1 w-full"
                            type="text"
                            name="meta_desc"
                            >
             </x-textarea-input>
             {{--  --}}
             <x-input-label for="address" :value="__('Address')"></x-input-label>
             <x-textarea-input id="address" class="block mt-1 w-full"
                            type="textarea"
                            name="address"
                            >
             </x-textarea-input>
             
            <x-primary-button class="mt-4 justify-end">{{ __('Save') }}</x-primary-button>
        </form>
    </div>