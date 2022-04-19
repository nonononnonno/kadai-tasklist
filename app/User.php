<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //通常はsave()のように1つずつしかデータを代入できない
    //create()は一気にデータを保存できるけど、デフォルトではセキュリティ上「できない」とされている
    //そこで、$fillableで一気に保存可能なパラメータ（ここでは下の3つ）を指定する
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //Userが持つTaskは複数存在するため、tasksのように複数形でメソッドを定義
    //ここは、TaskモデルとUserモデルのつながりを定義している
    public function tasks() {
        return $this->hasMany(Task::class);
    }
    //ユーザに関するモデルの件数をカウント
    public function loadRelationshipCounts()
    {
        $this->loadCount('tasks');
    }
}
