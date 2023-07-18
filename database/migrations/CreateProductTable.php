<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{


    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id(); 
            $table->timestamp('');
            $table->string('name');
            $table->number('outgoing');
            $table->number('price');
            $table->int('amount');
            

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
