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
        Schema::create('product_table', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('slug', 255)->unique();
            $table->text('description')->nullable();
            $table->string('sku', 50)->unique();
            $table->decimal('price', 10, 2)->unsigned();
            $table->integer('stock')->default(0)->unsigned();
            $table->unsignedBigInteger('product_category_id')->nullable();
            $table->string('image_url', 255)->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();


            $table->foreign('product_category_id')
                  ->references('id')->on('product_categories')
                  ->onDelete('set null')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_table');
    }
};
