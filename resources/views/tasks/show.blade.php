@extends('layouts.app')

@section('content')

    {{--基本、それぞれのViewで出てくる$変数は、Controllerで定義されている--}}
    <h1>id = {{ $task->id }} のたすくのなかみ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>たすく</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    {{-- タスク編集ページへのリンク --}}
    {!! link_to_route('tasks.edit', 'へんしゅう', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
    {{-- タスク削除フォーム --}}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('さよなら', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection