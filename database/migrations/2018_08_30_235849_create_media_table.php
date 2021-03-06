<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('media_id', 256);
            $table->integer('media_type');
            $table->string('media_url', 1024);
            $table->text('caption');
            $table->integer('like_count');
            $table->integer('engagements');
            $table->integer('impressions');
            $table->integer('reach');
            $table->integer('saved');
            $table->integer('video_views');
            $table->string('xml_path', 512);
            $table->timestamp('media_created_at');
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
        Schema::dropIfExists('media');
    }
}
