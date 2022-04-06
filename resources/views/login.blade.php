@extends('base')

@section('content')

<div class="row">
    <div class="col-md-4">
        <h1>User Login</h1>
        <hr>
        {!! Form::open(['url'=>'/login', 'method'=>'post']) !!}

        <div class="mb-3">
            {!! Form::label("email", "User Name") !!}
            {!! Form::text("email", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("password") !!}
            {!! Form::password("password", ['class'=>'form-control']) !!}
        </div>

        <button class="btn btn-success btn-lg">
            <i class="fa fa-sign-in"></i> Login
        </button>

        {!! Form::close() !!}
    </div>
</div>

@endsection
