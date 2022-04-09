@extends('base')

@section('content')

<div class="float-end mt-3">
    <a href="{{url('/contests/' . $criteria->id)}}" class="btn btn-success">
        <i class="fa fa-arrow-left"></i> Back to contest
    </a>
</div>

<h1 class="mb-0">Criteria: {{$criteria->name}}</h1>
<p>
    <div class="d-inline-block">{{$criteria->contest->title}}</div>
    <div class="d-inline-block">{{$criteria->contest->schedule}}</div>
    <div class="d-inline-block">{{$criteria->contest->venue}}</div>
</p>
<hr>

@endsection
