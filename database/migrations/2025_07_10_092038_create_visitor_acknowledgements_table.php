<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('visitor_acknowledgements', function (Blueprint $table) {
            $table->id();
            $table->string('ic_number')->nullable();
            $table->string('passport')->nullable();
            $table->date('acknowledged_at'); // when they watched the safety video
            $table->timestamps();

            // Optional: Add index for faster lookup
            $table->index('ic_number');
            $table->index('passport');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_acknowledgements');
    }
};

