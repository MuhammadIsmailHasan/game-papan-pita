<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTableAddPerson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('status')->after('password')->comment('0:Nonactive, 1:Active')->default(1);
            $table->integer('status_materi_1')->after('status')->comment('0:Yet, 1:Done')->default(0);
            $table->integer('status_materi_2')->after('status_materi_1')->comment('0:Yet, 1:Done')->default(0);
            $table->integer('status_level_1')->after('status_materi_2')->comment('0:Yet, 1:Done')->default(0);
            $table->integer('status_level_2')->after('status_level_1')->comment('0:Yet, 1:Done')->default(0);
            $table->string('person_type')->after('status_level_2')->nullable();
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
            $table->dropColumn('status');
            $table->dropColumn('status_materi_1');
            $table->dropColumn('status_materi_2');
            $table->dropColumn('status_level_1');
            $table->dropColumn('status_level_2');
            $table->dropColumn('person_type');
        });
    }
}
