<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Add the 'role' column with a default value of 'user'
            $table->string('role')->default('user');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the 'role' column if the migration is rolled back
            $table->dropColumn('role');
        });
    }
}
