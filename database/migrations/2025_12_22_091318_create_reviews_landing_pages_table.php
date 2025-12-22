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
        Schema::create('reviews_landing_pages', function (Blueprint $table) {
            $table->id();
            // Basic content
            $table->string('hero_title')->nullable();
            $table->text('hero_subtitle')->nullable();

            // ================= MAIN CONTENT SECTION =================
            $table->string('main_heading')->nullable();
            $table->longText('main_description')->nullable();
            $table->string('main_image')->nullable();
            $table->string('main_image_alt')->nullable();

            // ================= CTA / BANNER SECTION =================
            $table->string('cta_title')->nullable();     // "Expert Biomedical Care for Your Equipment"
            $table->text('cta_description')->nullable();
            $table->string('cta_logo')->nullable();
            $table->string('cta_logo_alt')->nullable();

            // ================= TESTIMONIALS SECTION =================
            $table->string('testimonial_heading')->nullable();  // "Hear From 1,100 Happy Customers"
            $table->text('testimonial_subheading')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();

            // Audit
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews_landing_pages');
    }
};
