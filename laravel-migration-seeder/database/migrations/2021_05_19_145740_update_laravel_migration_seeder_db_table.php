<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLaravelMigrationSeederDbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('laravel_migration_seeder_db', function (Blueprint $table) {
        $table->string('email')->after('people');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('laravel_migration_seeder_db', function (Blueprint $table) {
        $table->dropColumn('email');
      });
    }
}
