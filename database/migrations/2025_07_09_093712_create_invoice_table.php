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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->string('client_name', 150);
            $table->string('client_email', 100);
            $table->string('description', 200)->comment('medicine_name');
            $table->integer('quantity');
            $table->decimal('price_per_quantity', 10, 2);
            $table->decimal('tax_percent', 10, 2)->default(0);
            $table->decimal('tax_amount', 10, 2)->nullable(false);
            $table->decimal('subtotal', 10, 2);
            $table->decimal('total', 10, 2);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};
