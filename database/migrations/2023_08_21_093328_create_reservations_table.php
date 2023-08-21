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
            $table->id();
            $table->unsignedInteger('number_of_people');
            $table->date('reservation_date');
            $table->time('reservation_hour');
            $table->boolean('is_company');
            $table->
            $table->timestamps();
        });

        /*
         *    'number_of_people',
        'reservation_date',
        'reservation_hour',
        'is_company',
        'company_name',
        'vat_number',
        'first_name',
        'name',
        'special_needs'**/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
