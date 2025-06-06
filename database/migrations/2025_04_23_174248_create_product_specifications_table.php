<?php
     use Illuminate\Database\Migrations\Migration;
     use Illuminate\Database\Schema\Blueprint;
     use Illuminate\Support\Facades\Schema;

     class CreateProductSpecificationsTable extends Migration
     {
         public function up()
         {
             Schema::create('product_specifications', function (Blueprint $table) {
                 $table->id();
                 $table->foreignId('product_id')->constrained()->onDelete('cascade');
                 $table->string('spec_key');
                 $table->string('spec_value');
                 $table->timestamps();
             });
         }

         public function down()
         {
             Schema::dropIfExists('product_specifications');
         }
     }