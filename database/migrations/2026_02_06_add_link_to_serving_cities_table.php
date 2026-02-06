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
        Schema::table('serving_cities', function (Blueprint $table) {
            $table->string('link')->nullable()->after('city_image_alt');
            // Map iframe
            $table->longText('map_iframe')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('serving_cities', function (Blueprint $table) {
            $table->dropColumn('link');
            $table->dropColumn('map_iframe');
        });
    }
};
