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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id()->index('reservation_id');
            $table->unsignedSmallInteger('number_of_people');
            $table->date('reservation_date');
            $table->time('reservation_hour');
            $table->boolean('is_company');
            $table->string('company_name')->nullable(true);
            $table->string('vat_number')->nullable(true);
            $table->string('first_name');
            $table->string('name');
            $table->tinyText('special_needs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
