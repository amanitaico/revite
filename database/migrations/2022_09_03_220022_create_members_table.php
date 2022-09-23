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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('kana');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('tel', 20);
            $table->string('zip', 7);
	    	$table->string('prefecture')->comment('都道府県名');
		    $table->string('address')->comment('住所');
            $table->string('address2')->comment('住所2');
            $table->text('memo', 65535)->nullable()->comment('備考');
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
        Schema::dropIfExists('members');
    }
};
