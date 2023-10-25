<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('produits', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('title');
    //         $table->string('description');
    //         $table->float('price');
    //         $table->boolean('active');
    //         $table->integer("cat_id");
    //         $table->timestamps();
    //     });
    // }

    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->boolean('active');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
