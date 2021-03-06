<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('app_id');
            $table->string('icon', 255)->comment('ICON');
            $table->string('title', 128)->comment('游戏名');
            $table->string('pack', 128)->comment('包名');
            $table->integer('size')->unsigned()->comment('游戏大小KB');
            $table->string('version', 32)->comment('游戏版本');                     
            $table->string('keywords', 255)->comment('游戏关键字');
            $table->string('author', 128)->comment('游戏作者');
            $table->text('summary')->comment('游戏简介');
            $table->text('images')->comment('游戏图片');
            $table->text('changes')->comment('游戏特性');
            $table->string('reason', 20)->comment('审核不过原因');           
            $table->integer('download_counts')->default(0)->unsigned()->comment('总下载量');
            $table->string('download_link', 255)->comment('APK下载路径');
            $table->integer('operator')->comment('操作者');
            $table->string('os', 32)->comment('系统OS');
            $table->string('os_version', 32)->comment('系统版本');
            $table->enum('status', ['copy', 'pass', 'nopass', 'onshelf', 'offshelf'])->default('copy')->comment('数据状态');
            $table->enum('is_verify', ['yes', 'no'])->default('no')->comment('是否安全认证');
            $table->enum('is_ads', ['yes', 'no'])->default('no')->comment('是否无广告');
            $table->timestamp('onshelfed_at')->comment('上架时间');
            $table->timestamp('offshelfed_at')->comment('下架时间');
            $table->timestamp('reviewed_at')->comment('审核时间');
            $table->softDeletes();
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
        //Schema::drop('histories');
    }

}
