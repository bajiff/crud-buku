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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 70);
            $table->string('author');
            $table->decimal('book_price', 10,2);
            $table->year('publication_year');
            
            $table->foreignId('category_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('restrict');


            $table->foreignId('publisher_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('restrict');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
