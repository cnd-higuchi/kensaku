<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentialBasicInfomationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residential_basic_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');                 //登録日
            $table->string('residential_type');     //物件種別
            $table->string('sales_form');           //形態
            $table->string('name');                 //物件名
            $table->string('structure');            //構造
            $table->string('story');                //階建
            $table->string('postal_code');          //郵便番号
            $table->integer('area_category_id');        //住所１
            $table->string('address');              //住所２
            $table->string('Age');                  //築年数
            $table->integer('traffic_category_id');     //交通１
            $table->string('access');               //交通２
            $table->string('latite');               //緯度
            $table->string('longitude');            //経度
            $table->string('warranty');             //保障
            $table->string('parking');              //駐車場
            $table->string('gas');                  //ガス
            $table->string('internet');             //インターネット
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
        Schema::drop('residential_basic_informations');
    }
}
