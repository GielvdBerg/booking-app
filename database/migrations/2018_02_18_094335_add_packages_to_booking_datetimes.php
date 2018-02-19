<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPackagesToBookingDatetimes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_datetimes', function (Blueprint $table) {
          $table->integer('package_id')->unsigned()->index()->after('id');
          $table->foreign('package_id')
              ->references('id')
              ->on('packages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_datetimes', function (Blueprint $table) {
            //
        });
    }
}
