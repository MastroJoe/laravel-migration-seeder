<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaravelMigrationSeederDbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laravel_migration_seeder_db', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date');
            $table->string("destination");
            $table->string('country');
            $table->smallInteger('people');
            $table->string('category');
            $table->float('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laravel_migration_seeder_db');
    }
}
