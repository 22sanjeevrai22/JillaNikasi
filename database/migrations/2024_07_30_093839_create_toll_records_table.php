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
        Schema::create('toll_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id');
            $table->foreignId('good_id');
            $table->enum('direction', ['incoming', 'outgoing']);
            $table->decimal('total_tax_revenue', 12, 2);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toll_records');
    }
};
