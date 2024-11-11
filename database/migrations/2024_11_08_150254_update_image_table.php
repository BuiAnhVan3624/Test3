<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('image', function (Blueprint $table) {
            $table->unsignedBigInteger('variant_id');
            $table->foreign('variant_id')->references('id')->on('variant')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        
    }
};
