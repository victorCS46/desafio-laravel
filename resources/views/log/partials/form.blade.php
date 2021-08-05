{!! Form::model($log, ['route' => [$log->url(), $log->id], 'method'=>$log->method()]) !!}

    {!! Form::hidden('task_id', $id); !!}
    <div class="mb-3">
        {!! Form::label('comment', 'Comment') !!}
        {!! Form::text('comment', null, ['class' => 'form-control', 'placeholder' => 'Comment']) !!}
    </div>

    <div class="mb-3">
        {!! Form::label('date', 'Date') !!}
        {!! Form::date('date', null, ['class' => 'form-control', 'placeholder' => 'Date']) !!}
    </div>
    
    <div class="mb-3">
        {!! Form::submit('Save', ['class' => 'btn btn-primary text-light']) !!}
    </div>
    
{!! Form::close() !!}