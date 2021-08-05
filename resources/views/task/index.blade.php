@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h1 class="text-center text-muted mb-5">Tasks</h1>

                <div class="d-grip gap-2 md-4">
                    <a href="{{ route('task.create') }}" class="btn btn-primary text-light">New Task</a>
                </div>

                <div class="row">
                    @foreach ($task as $t)
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3">{{ $t->user_id }}</h5>
                                    <p class="card-text text-muted"><a href="{{ route('logs.getLogs', ['id'=>$t->id]) }}">{{ $t->description }}</a></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="badge bg-primary">Expiration date: {{ $t->end_date }}<span></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection