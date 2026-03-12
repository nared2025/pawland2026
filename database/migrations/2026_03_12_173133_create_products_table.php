<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // id auto increment
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->integer('stock')->default(100);

            // สำหรับ enum ใน PostgreSQL ใช้า string + validate ใน code
            $table->string('type');

            $table->string('image')->nullable();
            $table->string('description');
            $table->timestamps(); // created_at + updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};