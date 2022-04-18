@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のたすくへんしゅう</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

                <div class="form-group">
                    {{--下記contentにはControllerのfindOrFail($id)で取得されるcontentが最初から入っている--}}
                    {!! Form::label('content', 'たすく:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('status', 'すてーたす:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('こうしん', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection