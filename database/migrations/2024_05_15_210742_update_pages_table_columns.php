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
        Schema::table('pages', function (Blueprint $table) {
            $table->string('about_title')->nullable();
            $table->text('about_content')->nullable();
            $table->string('service_title')->nullable();
            $table->text('service_content')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('about_title');
            $table->dropColumn('about_content');
            $table->dropColumn('service_title');
            $table->dropColumn('service_content');
        });
    }
};
