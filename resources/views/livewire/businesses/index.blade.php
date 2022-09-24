<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Businesses
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white py-1 mb-6 px-3 rounded my-3 mt-1">Create New Business</button>
            @if($isOpen)
                @include('livewire.businesses.create')
            @endif
            <table class="table-fixed w-full text-xs">
                <thead>
                    <tr class="bg-gray-100 ">
                        <th class="px-2 py-2 border" rowspan="2">Form Ctrl. No.</th>
                        <th class="px-2 py-2 border" colspan="3">Owner's Information</th>   
                        <th class="px-2 py-2 border" rowspan="2">Business Name</th> 
                        <th class="px-2 py-2 border" colspan="3">Address</th>                                                                           
                        <th class="px-2 py-2 border" rowspan="2">Ownership</th>                        
                        <th class="px-2 py-2 border" rowspan="2">Status</th>  
                        <th class="px-2 py-2 border" colspan="2">No. of Employees</th>   
                        <th class="px-2 py-2 border" rowspan="2">LOB</th>     
                        <th class="px-2 py-2 border" colspan="3">Gross Receipts</th>                                                                                               
                        <th class="px-2 py-2 border w-50" rowspan="2">Action</th>                           
                    </tr>                    
                    <tr class="bg-gray-100">
                        <th class="px-2 py-2 border">Last Name</th>
                        <th class="px-2 py-2 border">First Name</th>
                        <th class="px-2 py-2 border">Middle Name</th>
                        <th class="px-2 py-2 border">Building</th>
                        <th class="px-2 py-2 border">Purok</th>
                        <th class="px-2 py-2 border">Barangay</th>     
                        <th class="px-2 py-2 border">Male</th>
                        <th class="px-2 py-2 border">Female</th>   
                        <th class="px-2 py-2 border">Amount</th>     
                        <th class="px-2 py-2 border">Daily</th>
                        <th class="px-2 py-2 border">Annual</th>                                                                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($businesses as $business)
                    <tr>
                        <td class="border px-4 py-2">{{ $business->control_number }}</td>
                        <td class="border px-4 py-2">{{ $business->last_name }} </td>
                        <td class="border px-4 py-2">{{ $business->first_name }} </td>
                        <td class="border px-4 py-2">{{ $business->middle_name }} </td>
                        <td class="border px-4 py-2">{{ $business->name }} </td>                                                                        
                        <td class="border px-4 py-2">{{ $business->building }}</td>
                        <td class="border px-4 py-2">{{ $business->purok }} </td>
                        <td class="border px-4 py-2">{{ $business->barangay }} </td>
                        <td class="border px-4 py-2">{{ $business->ownership }} </td>
                        <td class="border px-4 py-2">{{ $business->status }} </td>          
                        <td class="border px-4 py-2">{{ $business->employees_male }} </td>
                        <td class="border px-4 py-2">{{ $business->employees_female }} </td>            
                        <td class="border px-4 py-2">{{ $business->lines_of_business }} </td>          
                        <td class="border px-4 py-2">{{ $business->daily  ? '✅' : '🔲' }} </td>
                        <td class="border px-4 py-2">{{ $business->annual ? '✅' : '🔲' }} </td>                                                         
                        <td class="border px-4 py-2">{{ $business->amount }} </td>                              
                        <td class="border px-1 py-2 text-center">
                            <button wire:click="edit({{ $business->id }})" class="w-full bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded mb-1">Edit</button>
                            <button wire:click="delete({{ $business->id }})" class="w-full bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded mb-1">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>