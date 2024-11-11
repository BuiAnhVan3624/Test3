<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email', 255)->nullable();
            $table->string('address', 255);
            $table->string('phone', 18)->unique();
            $table->tinyInteger('role')->default(0);
            $table->tinyInteger('status')->default(1)->comment('0 : đã bị khóa', '1 : hoạt động');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email', 255)->nullable();
            $table->string('address', 255);
            $table->string('phone', 18)->unique();
            $table->tinyInteger('role')->default(0);
            $table->tinyInteger('status')->default(1)->comment('0 : đã bị khóa', '1 : hoạt động');
        });
    }
};
