<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Business;

class Businesses extends Component
{
    public $businesses, $control_number, $name, $first_name, $middle_name, $last_name, 
        $building, $purok, $barangay, $ownership, $status, $employees_male,
        $employees_female, $lines_of_business, $daily, $annual, $amount;

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
        $this->lines_of_business = '';
        $this->daily = '';        
        $this->annual = '';    
        $this->amount = '';           
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
            'lines_of_business' => $this->lines_of_business,
            'daily' => $this->daily,
            'annual' => $this->annual,                                                   
            'amount' => $this->amount,                
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
        $this->lines_of_business =  $business->lines_of_business;
        $this->daily =  $business->daily;        
        $this->annual =  $business->annual;    
        $this->amount =  $business->amount;              
        $this->openModal();
    }

    public function delete($id)
    {
        Business::find($id)->delete();
        session()->flash('message', 'Business Deleted Successfully.');
    }
}
