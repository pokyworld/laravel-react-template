<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('unit_addresses', function (Blueprint $table) {
            $table->unsignedInteger('unit_id');
            $table->unsignedInteger('address_id');
            $table->timestamps();
            
            $table->primary(['unit_id', 'address_id'],  'pkUnitAddresses');

            $table->foreign('unit_id')
                ->references('id')->on('units')
                ->onDelete('cascade');
            
            $table->foreign('address_id')
                ->references('id')->on('addresses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_addresses');
    }
}
