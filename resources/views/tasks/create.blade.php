@extends('layouts.app')

@section('content')
    <h1>あたらしいたすく、つくろう！</h1>

    <div class="row">
        <div class="col-6">
            {{-- $taskはControllerのcreate()でインスタンス化したTaskモデルを代入した変数 --}}
            {{-- 'route' => 'tasks.store'はformタグのaction属性の設定。ここではPOSTメソッドのフォームを受け取って処理するstoreアクション --}}
            {!! Form::model($task, ['route' => 'tasks.store']) !!}

                <div class="form-group">
                    {{-- 第一引数はインスタンス化したTaskモデルを代入した$taskが持つカラム＝ここではindex.blade.phpにある@section('content')の内容 --}}
                    {{-- 第二関数は表示したい文字列 --}}
                    {!! Form::label('content', 'たすく:') !!}
                    {{-- Form::textは<input type="text">を生成するための関数 --}}
                    {{-- 第一引数は上記と同じ、第二引数はテキストボックスに入れておきたい固定の初期値（不要ならnull） --}}
                    {{-- 第三引数はタグの属性情報を配列形式で --}}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('status', 'すてーたす:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection