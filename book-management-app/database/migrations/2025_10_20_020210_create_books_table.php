<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('books')) {
            Schema::create('books', function (Blueprint $table) {
                $table->id();
                $table->string('bookName');
                $table->string('bookCode');
                $table->string('bookAuthor');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};