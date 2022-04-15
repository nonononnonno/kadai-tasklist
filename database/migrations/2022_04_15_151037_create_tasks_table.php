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
