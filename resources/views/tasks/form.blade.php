{!! Form::open(['route' => 'tasks.store']) !!}
    <div class="form-group">
        {!! Form::label('content', 'たすく') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '2']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status', 'すてーたす') !!}
        {!! Form::textarea('status', null, ['class' => 'form-control', 'rows' => '2']) !!}
    </div>
    {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
{!! Form::close() !!}