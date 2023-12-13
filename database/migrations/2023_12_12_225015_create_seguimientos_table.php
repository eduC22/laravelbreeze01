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
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->id();
            $table->string('idSeg');
            $table->string('traAct'); //trabajo actual (si/no)
            $table->string('ofiAct'); //oficio actual (1cp, 2cp,...)
            $table->integer('satEst'); //0,1,2,3
            $table->date('fecSeg');
            $table->integer('estMat'); //0,1
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seguimientos');
    }
};
