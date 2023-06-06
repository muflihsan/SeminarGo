<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pendaftaran_', function (Blueprint $table) {
           
            $table->uuid("paymentdate");
            
			
        });
    }
    };

    /**
     * Reverse the migrations.
     */
     function down(): void
    {
        {
            Schema::table('pendaftaran_', function (Blueprint $table) {
               
                $table->uuid("paymentdate");
                
                
            });
        }
        };

