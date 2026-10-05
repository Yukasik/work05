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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('address');
            $table->enum('repair_type', ['Косметический ремонт', 'Капитальный ремонт', 'Электромонтаж']);
            $table->dateTime('date_time');
            $table->enum('pay_type', ['Наличными', 'Банковская карта', 'Безналичный расчет']);
            $table->enum('status', ['Новая', 'В процессе', 'Завершена', 'Отменена'])->default('новая');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
