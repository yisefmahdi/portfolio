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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('module_cars_id')->constrained('module__cars')->cascadeOnDelete();
            $table->integer('year_made');
            $table->text('desc');
            $table->double('price');
            $table->string('motion_vector');
            $table->integer('engine_capacity');
            $table->integer('km');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('fuel_id')->constrained('fuels')->cascadeOnDelete();
            $table->foreignId('state_id')->constrained('states')->cascadeOnDelete();
            $table->foreignId('outer_shapes_id')->constrained('outer__shapes')->cascadeOnDelete();
            $table->foreignId('company_id')->constrained('companies')->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->integer('stutas')->default(0);
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
        Schema::dropIfExists('advertisements');
    }
};
