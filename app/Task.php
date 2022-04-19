<?php

//このTaskモデルをApp名前空間以外で使用する際はApp\Taskで指定できる。
namespace App;

use Illuminate\Database\Eloquent\Model;

//Modelクラスを継承したTaskクラスの宣言
class Task extends Model
{
    protected $fillable = ['content'];
    //Taskを持つuserは1人であるため（一対多）単数形で表す
    //ここは、TaskモデルとUserモデルのつながりを定義している
    public function user()
    {
        //Taskのインスタンスが所属している唯一のUser（投稿者の情報）を$user->tasks()->get()もしくは$task->userという形で取得できるようにする。
        return $this->belongsTo(User::class);
    }
    
}
