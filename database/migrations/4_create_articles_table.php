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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('article_name');
            $table->text('article_content');
            $table->string('location');
            $table->decimal('price');
            $table->timestamps();

            $table->foreignId('condition_id')->on('conditions')->constrained();
            $table->foreignId('status_id')->on('statuses')->default(1)->constrained();
            $table->foreignId('category_id')->on('categories')->constrained();
            $table->foreignId('user_id')->on('users')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
