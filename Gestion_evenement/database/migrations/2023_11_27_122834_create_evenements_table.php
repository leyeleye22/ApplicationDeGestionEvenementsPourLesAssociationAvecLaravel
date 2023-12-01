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
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->date('date_limite_inscription');
            $table->text('description');
            $table->foreignId('association_id')->constrained()->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('image');
            $table->enum('clotured', ['isnotclotured', 'isclotured']);
            $table->date('date_evenement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};
