<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmerAuthenticationIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_authentication_ids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('farmer_id_fk')->references('id')->on('farmers')->onDelete('cascade');
            $table->bigInteger('authentication_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmer_authentication_ids');
    }
}
