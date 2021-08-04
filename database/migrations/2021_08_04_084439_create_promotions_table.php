<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('employee_id');
            $table->string('employee_name');
            $table->datetime('promotion_date');
            $table->string('previous_designation');
            $table->string('new_designation');
            $table->string('previous_grade');
            $table->string('new_degree');
            $table->datetime('previous_promotion_date');
            $table->decimal('previous_basic');
            $table->decimal('new_basic');
            $table->decimal('previous_gross');
            $table->decimal('increment_amount');
            $table->datetime('effect_date');
            $table->string('refference_no')->unique();
            $table->tinyInteger('approved')->default(0);
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
        Schema::dropIfExists('promotions');
    }
}