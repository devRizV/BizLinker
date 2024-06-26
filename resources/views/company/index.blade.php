<x-app-layout>
    <div  x-data="{ animateButton: 'transition duration-150 hover:scale-105 hover:rounded-full ease-in-out' }" class="flex content-center justify-center m-0 p-2 bg-orange-900">
        <div class="w-3/4 content-center justify-center">
            <div class="block mb-2">
                <div class="flex bg-slate-400 p-4 rounded-sm justify-start">
                    <div class="flex w-1/2">
                        <h3>Companies list</h3>
                    </div>
                    <div class="flex w-1/2 justify-end">
                        <x-secondary-button 
                                        x-on:click.prevent="
                                            $dispatch('open-modal' , 'add-company');"
                                            class="transition duration-150 hover:scale-105 hover:rounded-full ease-in-out">
                            {{__("Add a Company")}}
                        </x-secondary-button>
                    </div>
                </div>
            </div>
            
            <x-modal name='add-company'>
                @include('company.store')
            </x-modal>
            
            <div class="block mt-2">
                <div class="flex flex-col">
                  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                      <div class="overflow-hidden">
                        <table class="min-w-full text-white text-left text-sm font-light text-surface dark:text-white">
                          <thead
                            class="border-b border-neutral-200 font-medium dark:border-white/10">
                            <tr>
                              <th scope="col" class="px-6 py-4">SL#</th>
                              <th scope="col" class="px-6 py-4">Company Name</th>
                              <th scope="col" class="px-6 py-4">Company Email</th>
                              <th scope="col" class="px-6 py-4">Company Number</th>
                              <th scope="col" class="px-6 py-4">Company Address</th>
                              <th scope="col" class="px-6 py-4">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($companies as $company)
                                <tr class="border-b border-neutral-200 dark:border-white/10">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $loop->iteration }}</td>
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $company->company_title }}</td>
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $company->email }}</td>
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $company->mobile_no }}</td>
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $company->address }}</td>
                                    <td class="whitespace-nowrap px-6 py-4 font-medium sca">
                                        <div class="flex">
                                            <x-secondary-button 
                                                        x-data="{modalType:''}" 
                                                        x-on:click.prevent="console.log(modalType);$dispatch('open-modal' , 'edit-company')"
                                                        class="mr-2 transition duration-150 hover:scale-105 hover:rounded-full ease-in-out">
                                                    {{__('Edit')}}
                                            </x-secondary-button>

                                            <x-modal name="edit-company" :show="false">
                                                @include("company.edit")
                                            </x-modal>

                                            <form action="{{route('company.destroy', $company)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <x-danger-button onclick="confirm('Are you sure you want to delete?')"
                                                                 class="transition duration-150 hover:scale-105 hover:rounded-full ease-in-out">
                                                    {{__("delete")}}
                                                </x-danger-button> 
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>