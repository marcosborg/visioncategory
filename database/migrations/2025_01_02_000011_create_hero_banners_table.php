<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroBannersTable extends Migration
{
    public function up()
    {
        Schema::table('hero_banners', function (Blueprint $table) {
            $table->longText('text')->nullable();
        });
    }
}