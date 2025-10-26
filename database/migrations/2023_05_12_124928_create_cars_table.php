<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_id')->constrained('categories')->cascadeOnDelete();
            $table->foreignId('module_cars_id')->constrained('module__cars')->cascadeOnDelete();
            $table->double('price');
            $table->integer('engine_capacity');
            $table->string('generation');
            $table->string('motion_vector');
            $table->double('torque');
            $table->double('average_consumption');
            $table->string('origin');
            $table->double('horse_power');
            $table->double('acceleration');
            $table->integer('number_seats');
            $table->string('gather');
            $table->string('agent');
            $table->foreignId('company_id')->constrained('companies')->cascadeOnDelete();
            $table->foreignId('outer_shapes_id')->constrained('outer__shapes')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
