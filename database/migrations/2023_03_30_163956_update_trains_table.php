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
        Schema::table('trains', function (Blueprint $table) {
            $table->string('departure station', 30);
            $table->string('arrival station', 30);
            $table->dateTime('departure time');
            $table->dateTime('arrival time');
            $table->string('train code', 20);
            $table->unsignedSmallInteger("wagon's number");
            $table->boolean('in time');
            $table->boolean('canceled');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('departure station');
            $table->dropColumn('arrival station');
            $table->dropColumn('departure time');
            $table->dropColumn('arrival time');
            $table->dropColumn('train code');
            $table->dropColumn("wagon's number");
            $table->dropColumn('in time');
            $table->dropColumn('canceled');
        });
    }
};
