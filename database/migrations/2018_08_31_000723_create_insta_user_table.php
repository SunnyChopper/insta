<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insta_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('audience_city');
            $table->text('audience_country');
            $table->text('audience_gender_age');
            $table->integer('email_contacts');
            $table->integer('follower_count');
            $table->integer('get_direction_clicks');
            $table->integer('impressions');
            $table->integer('online_followers');
            $table->integer('phone_call_clicks');
            $table->integer('profile_views');
            $table->integer('reach');
            $table->integer('text_message_clicks');
            $table->integer('website_clicks');
            $table->string('xml_path', 512);
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
        Schema::dropIfExists('insta_user');
    }
}
