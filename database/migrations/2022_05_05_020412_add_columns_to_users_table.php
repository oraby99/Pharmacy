<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained();
            $table->integer('phone');
            $table->integer('salary');
            $table->integer('clientsNumber');
            $table->string('rate',100);
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_role_id_foreign');
            $table->dropColumn('role_id');
            // $table->dropColumn('first_name');
            // $table->dropColumn('last_name');
            $table->dropColumn('phone');
            $table->dropColumn('clientsNumber');
            $table->dropColumn('rate');

        });
    }
};
