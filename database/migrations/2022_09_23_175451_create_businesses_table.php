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
            $table->string('control_number', 100);            
            $table->string('name', 100);
            $table->string('first_name', 100);
            $table->string('middle_name', 100);            
            $table->string('last_name', 100);          
            $table->text('building')->nullable(); 
            $table->string('purok', 10)->nullable(); 
            $table->text('barangay')->nullable();   
            $table->string('ownership', 100)->nullable();              
            $table->string('status', 100)->nullable();                         
            $table->unsignedInteger('employees_male')->nullable();  
            $table->unsignedInteger('employees_female')->nullable(); 
            $table->string('lines_of_business', 100)->nullable();      
            $table->boolean('daily')->default(0)->nullable();              
            $table->boolean('annual')->default(0)->nullable();                          
            $table->unsignedBigInteger('amount')->nullable();                
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
