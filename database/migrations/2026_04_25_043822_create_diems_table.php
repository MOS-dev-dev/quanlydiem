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
            $table->foreignId('pham_duc_quyen_id')->constrained('pham_duc_quyens')->onDelete('cascade');
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
