<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Use raw SQL to avoid doctrine/dbal dependency issues
        DB::statement('ALTER TABLE social_media MODIFY id INT UNSIGNED NOT NULL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Reverting merely removes the auto_increment, but keeps it as INT UNSIGNED NOT NULL
        // Note: Removing AUTO_INCREMENT requires redefining the column fully.
        DB::statement('ALTER TABLE social_media MODIFY id INT UNSIGNED NOT NULL');
    }
};
