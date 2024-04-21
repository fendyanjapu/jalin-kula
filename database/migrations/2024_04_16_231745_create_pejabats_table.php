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
        Schema::create('pejabats', function (Blueprint $table) {
            $table->id();

            $table->string('nama_pejabat');
            $table->string('jabatan');
            $table->string('no_wa');
            $table->string('group')->nullable();
            $table->string('class')->nullable();
            $table->string('onchange')->nullable();
            $table->string('br')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pejabats');
    }
};
