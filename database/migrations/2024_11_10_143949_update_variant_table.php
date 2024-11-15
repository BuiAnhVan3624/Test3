<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('variant', function(Blueprint $table) {
            $table->string('image_main', 300);
            $table->string('image_album', 300);
        });
    }

    public function down(): void
    {
        Schema::table('variant', function(Blueprint $table) {
            $table->string('image_main', 300);
            $table->string('image_album', 300);
        });
    }
};
