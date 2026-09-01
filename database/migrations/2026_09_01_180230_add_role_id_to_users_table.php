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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->nullable()->after('id')
                ->constrained('roles')
                ->nullOnDelete();
        });

        // Any user created before roles existed (shouldn't happen outside
        // of tests/seeders that skip registration) defaults to 'customer'.
        $customerRoleId = DB::table('roles')->where('name', 'customer')->value('id');

        if ($customerRoleId) {
            DB::table('users')->whereNull('role_id')->update(['role_id' => $customerRoleId]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // dropConstrainedForeignId() issues an explicit dropForeign(), which
        // SQLite's grammar rejects outright (it has no ALTER TABLE DROP
        // CONSTRAINT). A plain dropColumn() removes the column - and with it
        // SQLite's inline REFERENCES clause - on every supported driver.
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role_id');
        });
    }
};
