<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $tables = DB::select("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = ?", [DB::getDatabaseName()]);

        foreach ($tables as $table) {
            DB::statement("RENAME TABLE {$table->TABLE_NAME} TO app_{$table->TABLE_NAME}");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $tables = DB::select("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = ?", [DB::getDatabaseName()]);

        foreach ($tables as $table) {
            if (str_starts_with($table->TABLE_NAME, 'app_')) {
                DB::statement("RENAME TABLE {$table->TABLE_NAME} TO " . substr($table->TABLE_NAME, 4));
            }
        }
    }
};
