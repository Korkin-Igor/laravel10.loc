<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
            $table->string('order_name');
        });

        DB::table('orders')->insert([
            'id' => 1,
            'order_name' => 'Order 1',
        ]);
        DB::table('orders')->insert([
            'id' => 2,
            'order_name' => 'Order 2',
        ]);
        DB::table('orders')->insert([
            'id' => 3,
            'order_name' => 'Order 3',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
