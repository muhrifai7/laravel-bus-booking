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
        Schema::create('chart_master', function (Blueprint $table) {
            $table->id();
            $table->string('account_code')->unique();
            $table->string('account_name')->unique();
            $table->string('account_type')->default('');
            $table->tinyInteger('inactive');
            $table->string('no_pol');
            $table->integer('id_bus');
            $table->string('nomor_rek')->default('');
            $table->integer('id_company');
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('chart_masters')) {
            Schema::table('chart_masters', function (Blueprint $table) {
                $table->dropColumn('account_type');
            });
        }
    }
};
