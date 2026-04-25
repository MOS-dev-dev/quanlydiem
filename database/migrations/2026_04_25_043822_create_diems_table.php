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
        Schema::create('diems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tan_anh_tuan_id')->constrained('tan_anh_tuans')->onDelete('cascade');
            $table->string('ten_mon_hoc');
            $table->float('diem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diems');
    }
};
