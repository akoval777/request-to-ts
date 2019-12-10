<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestToTsTable extends Migration
{
    public function up()
    {
        Schema::create('request_to_ts', function(Blueprint $t)
        {
            $t->increments('id');
            $t->text('text');
            $t->timestamps();
            $t->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('request_to_ts');
    }
}