<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
     Schema::create('products', function (Blueprint $table) {
    $table->bigIncrements('id'); // auto-increment compatible Postgres
    $table->string('name');
    $table->decimal('price', 8, 2);
    $table->integer('stock')->default(100);
    $table->string('type'); // enum-like
    $table->string('image')->nullable();
    $table->string('description');
    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};