<?php

// src/migrations/0000_00_00_000000_create_site_table.php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateSiteTable extends Migration
{
    public function up()
    {
        Schema::create('sites', function(Blueprint $t)
        {
            $t->increments('id')->unsigned();
            $t->text('name', 255);
            $t->text('url', 255);
            $t->enum('status', array('active','inactive'))->default('active');
            $t->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('sites');
    }
}