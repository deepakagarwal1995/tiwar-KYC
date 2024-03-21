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
        Schema::table('users', function (Blueprint $table) {
            $table->smallInteger('status')->nullable()->default(0)->after('society');
        });
        Schema::table('residents', function (Blueprint $table) {
            $table->smallInteger('status')->nullable()->default(0)->after('role_id');
        });
        Schema::table('societies', function (Blueprint $table) {
            $table->smallInteger('status')->nullable()->default(0)->after('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('status');
        });
        Schema::table('residents', function (Blueprint $table) {
            $table->dropColumn('status');
        });
        Schema::table('societies', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
