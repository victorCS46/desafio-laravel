@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h1 class="text-center text-muted mb-5">Tasks</h1>

                <div class="row">
                    @foreach ($task as $t)
                        <div class="col-md-4">
                            <div class="card-body">
                                <h5 class="card-title text-center mb-3">{{ $t->user_id }}</h5>
                                <p class="card-text text-muted">{{ $t->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection