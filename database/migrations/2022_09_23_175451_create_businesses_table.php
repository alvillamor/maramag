<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('account_number', 100)->nullable();              
            $table->string('control_number', 100);            
            $table->string('name', 100)->nullable(); 
            $table->string('first_name', 100)->nullable(); 
            $table->string('middle_name', 100)->nullable();            
            $table->string('last_name', 100)->nullable();          
            $table->text('building')->nullable(); 
            $table->string('purok', 100)->nullable(); 
            $table->text('barangay')->nullable();   

            $table->string('floor', 100)->nullable();        
            $table->string('stall_number', 100)->nullable();                             
            $table->text('waypoint')->nullable();      
            $table->integer('image_count')->nullable(); 

            $table->string('ownership', 100)->nullable();              
            $table->string('status', 100)->nullable();                         
            $table->unsignedInteger('employees_male')->nullable();  
            $table->unsignedInteger('employees_female')->nullable(); 
            $table->date('date_established')->nullable();    

            $table->json('products_services')->nullable();        
            $table->text('description')->nullable();  
            $table->float('gross_sales')->nullable();               
            $table->string('daily_or_annual', 100)->nullable();                           
            $table->unsignedBigInteger('amount')->nullable();  
            $table->json('included_products')->nullable();  
            $table->string('interviewee', 300)->nullable();                   
            $table->date('date_interviewed')->nullable();                                        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
};
