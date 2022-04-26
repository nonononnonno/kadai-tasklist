<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Migrationクラスを継承したCreateTasksTableクラスを宣言
class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //接続先のDBにtasksテーブルを作成
        Schema::create('tasks', function (Blueprint $table) {
            //カラムの追加（下3つ）
            $table->bigIncrements('id');
            $table->string('content');
            $table->timestamps();
            
            //$table->foreign(外部キー制約を設定するカラム名)->references(参照されるカラム名)->on(参照されるテーブル名);
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //tasksテーブルが存在するなら（IfExists）削除する(drop)
        Schema::dropIfExists('tasks');
    }
}
