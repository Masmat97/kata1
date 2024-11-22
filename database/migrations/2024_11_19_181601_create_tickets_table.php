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
        Schema::disableForeignKeyConstraints();

        Schema::create('tickets', function (Blueprint $table) {
            $table->text('descrizione');
            $table->tinyInteger('stato');
            $table->unsignedBigInteger('operatore_id');
            $table->foreign('operatore_id')->references('id')->on('operatori');
            $table->timestamp('data_creazione')->nullable();
            $table->string('titolo');
            $table->timestamp('data_chiusura')->nullable();
            $table->id()->foreign('Ticket_Categoria.ticket_id');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
