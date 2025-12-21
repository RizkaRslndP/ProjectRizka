<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('keywords')->nullable();
            $table->string('author_name')->nullable();
            $table->string('department')->nullable();
            $table->string('pdf_path')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn([
                'keywords',
                'author_name',
                'department',
                'pdf_path',
            ]);
        });
    }
};
