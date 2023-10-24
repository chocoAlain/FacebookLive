<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create("contact_number", function (Blueprint $table) {
            $table->id();   
            $table->string("prov");
            $table->string("cellphone_number");
            
        });
    }

    public function down(): void
    {
        
    }
};
