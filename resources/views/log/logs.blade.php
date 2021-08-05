@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h1 class="text-center text-muted mb-5">Logs</h1>

                <div class="d-grip gap-2 md-4">
                    <a href="{{ route('logs.create', isset($logs[0]->task_id)?$logs[0]->task_id:'') }}" class="btn btn-primary text-light">New Log</a>
                </div>

                <div class="row">
                    @foreach ($logs as $t)
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <p class="card-text text-muted">{{ $l->comment }}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="badge bg-primary">Log date: {{ $l->date }}<span></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection