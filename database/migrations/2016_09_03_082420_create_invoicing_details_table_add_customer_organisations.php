<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicingDetailsTableAddCustomerOrganisations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoicing_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned()->default(0);
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->string('name');
            $table->string('organisation');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->timestamps();
        });

        Schema::table('customers', function($table) {
            $table->string('organisation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
