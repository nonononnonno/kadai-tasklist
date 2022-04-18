<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//これでAppフォルダのTaskモデルを
use App\Task;

class TasksController extends Controller

{
    // getでtasks/にアクセスされた場合の「一覧表示処理」
    public function index()
    {
        //Taskモデルからメッセージ一覧を取得し$taskに代入
        $tasks = Task::all();
        //tasksフォルダのindex.blade.phpにあるtasksに$tasksを代入＝メッセージ一覧を表示
        //左辺の'tasks'はViewで呼び出すための変数名
        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }

    // getでtasks/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        //Taskモデルのためのフォームだから、その入力項目のために、$taskインスタンスを作る。
        $task = new Task;
        //左辺の'task'はViewで呼び出すための変数名。単数形なのは、index()と違ってここでは一つしか使わないから。
        return view('tasks.create', [
            'task' => $task,    
        ]);
    }

    // postでtasks/にアクセスされた場合の「新規登録処理」
    //Laravelでの「Request」は、ブラウザを通してユーザから贈られる情報をすべて含んでいるオブジェクト
    public function store(Request $request)
    {
        //バリデーションのための記述
        $request->validate([
            'content' => 'required|max:255',
        ]);
        
        $task = new Task;
        //$taskの
        $task->content = $request->content;
        $task->save();
        
        //最後にトップページ（＝index.blade.php）にリダイレクトさせる。
        return redirect('/');
    }

    // getでtasks/（任意のid）にアクセスされた場合の「取得表示処理」
    //引数$idが与えられている。ここには、これは /tasks/1, /tasks/4 といったURLにアクセスされたとき、 $id = 1 や $id = 4 のように代入される。
    public function show($id)
    {
        // idの値でタスクを検索して取得（findOrFailは、findとは違いレコードが存在しないときに404エラーを出す。）
        $task = Task::findOrFail($id);
        //tasksフォルダのsho.blade.phpにあるtaskに$taskを代入＝該当idのタスク詳細を表示
        //左辺の'task'はViewで呼び出すための変数名
        return view('tasks.show', [
            'task' => $task,
        ]);
    }

    // getでtasks/（任意のid）/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        
        return view('tasks.edit', [
           'task' => $task, 
        ]);
    }

    // putまたはpatchでtasks/（任意のid）にアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|max:255',
        ]);
        
        $task = Task::findOrFail($id);
        
        $task->content = $request->content;
        $task->save();
        
        return redirect('/');
    }

    // deleteでtasks/（任意のid）にアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        //タスクを削除
        $task->delete();
        
        return redirect('/');
    }
}
