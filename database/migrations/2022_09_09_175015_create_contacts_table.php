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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('company')->comment('会社名');
            $table->string('name')->comment('名前');
            $table->string('tel')->comment('電話番号');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->date('birthdate')->comment('生年月日');
            $table->string('gender')->comment('性別');
            $table->string('profession')->comment('職業');
            $table->text('content')->comment('問合せ内容');
            $table->string('situation')->nullable()->comment('対応状況');
            
            
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
        Schema::dropIfExists('contacts');
    }
};

