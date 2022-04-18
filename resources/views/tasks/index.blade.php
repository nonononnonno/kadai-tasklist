{{----}}

@extends('layouts.app')

@section('content')

    <h1>たすくいちらん</h1>
    {{--この$tasksはControllerの'tasks'--}}
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>たすく</th>
                    <th>すてーたす</th>
                </tr>
            </thead>
            <tbody>
                {{--$tasksのデータを$taskとして1つずつ取り出す--}}
                @foreach ($tasks as $task)
                <tr>
                    {{--$taskにテーブルのidカラムを表示--}}
                    {{-- メッセージ詳細ページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {{-- ページネーションのリンク --}}
    {{ $tasks->links() }}
    {{-- ('ルーティング', 'リンクにしたい文字列', 'URLにしたい値', 'HTMLタグの属性')--}}
    {!! link_to_route('tasks.create', 'あたらしいたすく', [], ['class' => 'btn btn-primary']) !!}
@endsection