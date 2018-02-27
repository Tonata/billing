<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('registration');
            $table->string('email');
            $table->string('bank_acc_no');
            $table->string('bank_acc_branch');
            $table->string('bank_acc_name');
            $table->string('contact_number');
            $table->string('vat_number');
            $table->date('license_expiry');
            $table->timestamps();
        });

//        Schema::create('Vat', function (Blueprint $table)  {
//            $table->increments('id');
//            $table->string('name');
//            $table->double('percentage');
//
//            $table->foreign('id')
//                ->references('id')
//                ->on($table['Company'])
//                ->onDelete('cascade');
//
//            //$table->primary(['role_id', 'model_id', 'model_type']);
//        });
//
//        Schema::create('License', function (Blueprint $table)  {
//            $table->increments('id');
//            $table->date('start_date');
//            $table->date('end_date');
//
//            $table->foreign('id')
//                ->references('id')
//                ->on($table['Company'])
//                ->onDelete('cascade');
//
//            //$table->primary(['role_id', 'model_id', 'model_type']);
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('License');
//        Schema::dropIfExists('Vat');
        Schema::dropIfExists('Companies');
    }
}
