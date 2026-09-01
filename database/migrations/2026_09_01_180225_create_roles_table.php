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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('display_name');
            $table->timestamps();
        });

        // Seed the three roles the app expects up front, so the
        // add_role_id_to_users_table migration can safely default new
        // users to 'customer'.
        DB::table('roles')->insert([
            ['name' => 'customer', 'display_name' => 'Customer', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'operations_staff', 'display_name' => 'Operations Staff', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'admin', 'display_name' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
