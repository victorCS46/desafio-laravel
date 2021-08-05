@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h1 class="text-center text-muted mb-5">Create Task</h1>

                <div class="col-md-5 mx-auto">
                    @include('task.partials.form')
                </div>
            </div>
        </div>
    </div>
@endsection