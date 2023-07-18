<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    
        public function up(): void
        {
            Schema::table('product', function (Blueprint $table) {
                $table->id(); 
                $table->string('name');
                $table->number('outgoing', 19, 2);
                $table->number('price', 19, 2);
                $table->int('amount');
                $table->timestamp('created_at');
                
    
            });
        }
    
        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('product');
        }
    };
    
