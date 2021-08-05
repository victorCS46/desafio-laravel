{!! Form::model($task, ['route' => [$task->url(), $task->id], 'method'=>$task->method()]) !!}

    {!! Form::hidden('user_id', Auth::id()); !!}
    <div class="mb-3">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
    </div>

    <div class="mb-3">
        {!! Form::label('end_date', 'Expiration date') !!}
        {!! Form::date('end_date', null, ['class' => 'form-control', 'placeholder' => 'Expiration date']) !!}
    </div>
    
    <div class="mb-3">
        {!! Form::submit('Save', ['class' => 'btn btn-primary text-light']) !!}
    </div>
    
{!! Form::close() !!}