<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
  
    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
  
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <form>
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="">

                <div class="mb-4">
                    <x-jet-label for="control_number" value="{{ __('Form Control Number') }}" />
                    <x-jet-input id="control_number" class="block mt-1 w-full" type="text" name="control_number" wire:model="control_number" />
                    @error('control_number') <span class="text-red-500">{{ $message }}</span>@enderror                    
                </div>

                <div class="mb-4">
                    <x-jet-label for="account_number" value="{{ __('Account Number') }}" />
                    <x-jet-input id="account_number" class="block mt-1 w-full" type="text" name="account_number" wire:model="account_number" />
                    @error('account_number') <span class="text-red-500">{{ $message }}</span>@enderror                    
                </div>
        
                <div class="mt-8 mb-2 font-bold text-center uppercase">
                    <p>Owner's Information</p>               
                </div>
                            
                <div class="mb-4">
                    <x-jet-label for="first_name" value="{{ __('First Name') }}" />
                    <x-jet-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" wire:model="first_name" />
                    @error('first_name') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>
    
                <div class="mb-4">
                    <x-jet-label for="middle_name" value="{{ __('Middle Name') }}" />
                    <x-jet-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name" wire:model="middle_name" />
                    @error('middle_name') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>
    
                <div class="mb-4">
                    <x-jet-label for="last_name" value="{{ __('Last Name') }}" />
                    <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" wire:model="last_name" />
                    @error('last_name') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>

                <div class="mt-8 mb-2 font-bold text-center uppercase">
                    <p>Business Information</p>               
                </div>  

                <div class="mb-4">
                    <x-jet-label for="name" value="{{ __('Business Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" wire:model="name" />
                    @error('building') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>

                <div class="mb-4">
                    <x-jet-label for="purok" value="{{ __('Street/Purok') }}" />
                    <x-jet-input id="purok" class="block mt-1 w-full" type="number" name="purok" wire:model="purok" maxlength="2"/>
                    @error('purok') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>

                <div class="mb-4">
                    <x-jet-label for="barangay" value="{{ __('Barangay') }}" />
                    @php 
                        $barangayString = 'Anahawon,Bagong Silang,Basecamp,Bayabason,Camp-1,Colambugon,Dagumbaan,Danggawan,Dologon,Kiharong,Kisanday,Kuya,La Roxas,North Pob.,Panadtalan,Panalsalan,San Miguel,San Roque,South Pob.,Tubigon';
                        $barangayArray = explode(',', $barangayString); 
                    @endphp

                    <select id="barangay" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="barangay" wire:model="barangay">
                        <option value=""></option>
                        @foreach($barangayArray as $barangay)
                            <option>{{ $barangay }}</option>
                        @endforeach
                    </select>                  

                    @error('barangay') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>

                <div class="mb-4">
                    <x-jet-label for="building" value="{{ __('Building Name') }}" />
                    <x-jet-input id="building" class="block mt-1 w-full" type="text" name="building" wire:model="building" />
                    @error('building') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>


                <div class="mb-4">
                    <x-jet-label for="floor" value="{{ __('Floor') }}" />
                    <x-jet-input id="floor" class="block mt-1 w-full" type="text" name="floor" wire:model="floor" />
                    @error('floor') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>

                <div class="mb-4">
                    <x-jet-label for="stall_number" value="{{ __('Stall No.') }}" />
                    <x-jet-input id="stall_number" class="block mt-1 w-full" type="text" name="stall_number" wire:model="stall_number" />
                    @error('stall_number') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>

                <div class="mb-4">
                    <x-jet-label for="ownership" value="{{ __('Ownership') }}" />
                    <select id="ownership" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="ownership" wire:model="ownership">
                      <option value=""></option>
                      <option value="Single">Single</option>
                      <option value="Partner">Partnership</option>
                      <option value="CORP">Corporation</option>
                      <option value="COOP">Cooperative</option>
                    </select>
                    @error('ownership') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>

                <div class="mb-4">
                    <x-jet-label for="status" value="{{ __('Status') }}" />
                    <select id="status" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="status" wire:model="status">
                      <option value=""></option>
                      <option value="NR">Newly Register</option>
                      <option value="REG">Register</option>
                      <option value="NBP">No Business Permit</option>
                      <option value="NBP">No Business Permit</option>                      
                      <option value="CLS">Closed</option>
                    </select>
                    @error('status') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>

                <div class="mb-4">
                    <x-jet-label for="waypoint" value="{{ __('Waypoint') }}" />
                    <x-jet-input id="waypoint" class="block mt-1 w-full" type="text" name="waypoint" wire:model="waypoint" />
                    @error('waypoint') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>

                <div class="mb-4">
                    <x-jet-label for="image_count" value="{{ __('Image Count') }}" />
                    <x-jet-input id="image_count" class="block mt-1 w-full" type="number" name="image_count" wire:model="image_count" />
                    @error('image_count') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>
 
              <div class="mb-4">
                  <x-jet-label for="employees_male" value="{{ __('Number of Male Employees') }}" />
                  <x-jet-input id="employees_male" class="block mt-1 w-full" type="number" name="employees_male" wire:model="employees_male" />
                  @error('employees_male') <span class="text-red-500">{{ $message }}</span>@enderror                             
              </div>


              <div class="mb-4">
                  <x-jet-label for="employees_female" value="{{ __('Number of Female Employees') }}" />
                  <x-jet-input id="employees_female" class="block mt-1 w-full" type="number" name="employees_female" wire:model="employees_female" />
                  @error('employees_female') <span class="text-red-500">{{ $message }}</span>@enderror                             
              </div>

                <div class="mb-4">
                    <x-jet-label for="date_established" value="{{ __('Date Estublished') }}" />
                    <x-jet-input id="date_established" class="block mt-1 w-full" type="date" name="date_established" wire:model="date_established" />
                    @error('date_established') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>


                <div class="mt-8 mb-2 font-bold text-center uppercase">
                    <p>Line of Business</p>               
                </div>  
                                
              <div class="mb-4">
                  <x-jet-label for="products_services" value="{{ __('Products/Services') }}" />
                  <select multiple id="products_services" class="form-multiselect block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="products_services" wire:model="products_services">
                    <option value="WHE">Wholesaler - Essential</option>
                    <option value="WHN">Wholesaler - Non-Essential</option>
                    <option value="RTE">Retailer - Essential</option>
                    <option value="RTN">Retailer - Non-Essential</option>                                                           
                    <option value="EX">Exporter</option>      
                    <option value="PD">Peddler</option>      
                    <option value="BK">Banks & Other Financial Institutions</option>      
                    <option value="PM">Payment Services</option>      
                    <option value="PS">Personal Services</option>      
                    <option value="FS">Food Services</option>      
                    <option value="AS">Accommodation Services</option>      
                    <option value="ED">Educational and Tutorial Services</option>      
                    <option value="SS">Security Services</option>                                                                                                                                                                                          
                    <option value="AU">Automotive Services</option>     
                    <option value="RS">Repair Services</option>     
                    <option value="SS">Transportation Services</option>     
                    <option value="MT">Media & Telecommunication Services</option>     
                    <option value="CS	">Construction Services</option>                                                                                                         
                  </select>
                  @error('products_services') <span class="text-red-500">{{ $message }}</span>@enderror                             
              </div>

                <div class="mb-4">
                    <x-jet-label for="description" value="{{ __('Description') }}" />
                    <textarea id="description" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" type="text" name="description" wire:model="description" /></textarea>
                    @error('waypoint') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>

              <div class="mb-4">
                  <x-jet-label for="gross_sales" value="{{ __('Gross Sales') }}" />
                  <x-jet-input id="gross_sales" class="block mt-1 w-full" type="number" name="gross_sales"  wire:model="gross_sales" />
                  @error('gross_sales') <span class="text-red-500">{{ $message }}</span>@enderror                             
              </div>


            <div class="mb-4">
                <x-jet-label for="daily_or_annual" value="{{ __('Daily/Annual') }}" />
                <select id="daily_or_annual" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="daily_or_annual" wire:model="daily_or_annual">
                  <option value=""></option>
                  <option value="daily">Daily</option>
                  <option value="annual">Annual</option>                                                                                                       
                </select>
                @error('daily_or_annual') <span class="text-red-500">{{ $message }}</span>@enderror               
            </div>

              <div class="mb-4">
                  <x-jet-label for="amount" value="{{ __('Total Amount') }}" />
                  <x-jet-input id="amount" class="block mt-1 w-full" type="number" name="amount"  wire:model="amount" />
                  @error('amount') <span class="text-red-500">{{ $message }}</span>@enderror                             
              </div>            
              
                <div class="mt-8 mb-2 font-bold text-center uppercase">
                    <p>With</p>               
                </div>

                <div class="mb-8">
                  <div class="form-check block">
                    <input wire:model="included_products" type="checkbox" name="included_products[]" id="lpg" value="LPG" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    <label class="form-check-label inline-block text-gray-800" for="lpg">LPG</label>
                  </div>
                  <div class="form-check block">
                    <input wire:model="included_products" type="checkbox" name="included_products[]" id="foreign_liquor" value="Foreign Liquor" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    <label class="form-check-label inline-block text-gray-800" for="foreign_liquor">Foreign Liquor</label>
                  </div>
                  <div class="form-check block">
                    <input wire:model="included_products" type="checkbox" name="included_products[]" id="cigarette" value="Cigarettee" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    <label class="form-check-label inline-block text-gray-800" for="cigarette">Cigarette</label>
                  </div>
                  <div class="form-check block">
                    <input wire:model="included_products" type="checkbox" name="included_products[]" id="flammable" value="Flammable" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    <label class="form-check-label inline-block text-gray-800" for="flammable">Flammable</label>
                  </div>
                  <div class="form-check block">
                    <input wire:model="included_products" type="checkbox" name="included_products[]" id="beer" value="Beer" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    <label class="form-check-label inline-block text-gray-800" for="beer">Beer</label>
                  </div>
                  <div class="form-check block">
                    <input wire:model="included_products" type="checkbox" name="included_products[]" id="domestic_liquor" value="Domestic Liquor" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    <label class="form-check-label inline-block text-gray-800" for="domestic_liquor">Domestic Liquor</label>
                  </div>  
                  <div class="form-check block">
                    <input wire:model="included_products" type="checkbox" name="included_products[]" id="soft_drinks" value="Soft Drinks" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    <label class="form-check-label inline-block text-gray-800" for="soft_drinks">Soft Drinks</label>
                  </div>                                                                                          
                </div>

                <div class="mb-4">
                    <x-jet-label for="date_interviewed" value="{{ __('Date') }}" />
                    <x-jet-input id="date_interviewed" class="block mt-1 w-full" type="date" name="date_interviewed" wire:model="date_interviewed" />
                    @error('date_interviewed') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>


                <div class="mb-4">
                    <x-jet-label for="interviewee" value="{{ __('Interviewee') }}" />
                    <x-jet-input id="interviewee" class="block mt-1 w-full" type="text" name="interviewee" wire:model="interviewee" />
                    @error('interviewee') <span class="text-red-500">{{ $message }}</span>@enderror                             
                </div>
                
        </div>
      </div>
  
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
          <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Save
          </button>
        </span>
        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
            
          <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Cancel
          </button>
        </span>
        </form>
      </div>
        
    </div>
  </div>
</div>