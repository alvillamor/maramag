<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Business;

class Businesses extends Component
{
    public $businesses, $control_number, $name, $first_name, $middle_name, $last_name, 
        $building, $purok, $barangay, $ownership, $status, $employees_male,
        $employees_female, $amount, $daily_or_annual, $account_number, $products_services, $included_products,
        $floor, $stall_number, $waypoint, $image_count, $date_established, $gross_sales, $interviewee, $date_interviewed, $description;

    public $isOpen = 0;

    public function render()
    {
        $this->businesses = Business::all();
        return view('livewire.businesses.index');

    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->control_number = '';
        $this->name = '';        
        $this->first_name = '';
        $this->middle_name = '';
        $this->last_name = '';
        $this->building = '';
        $this->purok = '';
        $this->barangay = '';        
        $this->status = '';
        $this->ownership = '';
        $this->employees_male = '';
        $this->employees_female = '';
        $this->products_services = [];
        $this->daily_or_annual = '';        
        $this->account_number = '';    
        $this->included_products = [];          
        $this->amount = '';           
        $this->floor = '';
        $this->stall_number = '';
        $this->waypoint = '';
        $this->image_count = '';        
        $this->date_established = '';    
        $this->gross_sales = '';          
        $this->interviewee = '';           
        $this->date_interviewed = '';    
        $this->description = '';        
        $this->business_id = '';        
    }

    public function store()
    {
        $this->validate([
            'control_number' => 'required',
            'name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
        ]);

        Business::updateOrCreate(['id' => $this->business_id], [
            'control_number' => $this->control_number,
            'name' => $this->name,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'building' => $this->building,
            'purok' => $this->purok,
            'ownership' => $this->ownership,            
            'barangay' => $this->barangay,     
            'status' => $this->status,
            'employees_male' => $this->employees_male,
            'employees_female' => $this->employees_female,     
            'account_number' => $this->account_number,
            'products_services' => json_encode($this->products_services),
            'included_products' => json_encode($this->included_products),  
            'daily_or_annual' => $this->daily_or_annual,                                                             
            'amount' => $this->amount,     
            'floor' => $this->floor,
            'stall_number' => $this->stall_number,     
            'waypoint' => $this->waypoint,
            'image_count' => $this->image_count,
            'date_established' => $this->date_established,  
            'gross_sales' => $this->gross_sales,                                                             
            'interviewee' => $this->interviewee,    
            'date_interviewed' => $this->date_interviewed,
            'description' => $this->description,            
        ]);

        session()->flash('message', 
            $this->business_id ? 'Business Updated Successfully.' : 'Business Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    
    public function edit($id)
    {

        $business = Business::findOrFail($id);
        $this->business_id = $id;
        $this->control_number = $business->control_number;                  
        $this->name = $business->name;        
        $this->first_name = $business->first_name;
        $this->middle_name = $business->middle_name;
        $this->last_name = $business->last_name;
        $this->building =  $business->building;
        $this->purok =  $business->purok;
        $this->barangay =  $business->barangay;   
        $this->ownership =  $business->ownership;       
        $this->status =  $business->status;
        $this->employees_male =  $business->employees_male;
        $this->employees_female =  $business->employees_female;
        $this->products_services =  json_decode($business->products_services, true); 
        $this->account_number =  $business->account_number;        
        $this->daily_or_annual =  $business->daily_or_annual;        
        $this->included_products =  json_decode($business->included_products, true);    
        $this->amount =  $business->amount;           

        $this->floor =  $business->floor;
        $this->stall_number =  $business->stall_number;
        $this->waypoint =  $business->waypoint;
        $this->image_count =  $business->image_count;
        $this->date_established =  $business->date_established;        
        $this->gross_sales =  $business->gross_sales;        
        $this->interviewee =  $business->interviewee;    
        $this->date_interviewed =  $business->date_interviewed;       
        $this->description =  $business->description;           

        $this->openModal();
    }

    public function delete($id)
    {
        Business::find($id)->delete();
        session()->flash('message', 'Business Deleted Successfully.');
    }
}
