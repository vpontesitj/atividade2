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
        Schema::table('cadastro', function (Blueprint $table) {
            $table->string('Razaosocial')->nullable()->after('CNPJ');
            $table->string('Nomefantasia')->nullable()->after('Razaosocial');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cadastro', function (Blueprint $table) {
            $table->dropColumn(['Razaosocial', 'Nomefantasia']);
        });
    }
};
