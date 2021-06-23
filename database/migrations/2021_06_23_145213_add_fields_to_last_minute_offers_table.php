<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToLastMinuteOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('last_minute_offers', function (Blueprint $table) {
            $table->string('nation', 100)->nullable();
            $table->string('region', 100)->nullable();
            $table->tinyInteger('trip_length')->default(1);
            $table->date('arrival_date');
            $table->date('leave_date');
            $table->string('accomodation', 50)->nullable();
            $table->text('resort_description')->nullable();
            $table->decimal('price', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('last_minute_offers', function (Blueprint $table) {
            $table->dropColumn('nation');
            $table->dropColumn('region');
            $table->dropColumn('trip_length');
            $table->dropColumn('arrival_date');
            $table->dropColumn('leave_date');
            $table->dropColumn('accomodation');
            $table->dropColumn('resort_description');
            $table->dropColumn('price');
        });
    }
}
