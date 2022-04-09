@extends('base')

@section('content')

<div class="float-end mt-3">
    <a href="{{url('/contests/' . $contestant->contest->id)}}" class="btn btn-success">
        <i class="fa fa-arrow-left"></i> Back to Contest
    </a>
</div>

<h1 class="mb-0">{{$contestant->name}}</h1>
<p>
    {{$contestant->contest->title}} <br>
    {{$contestant->contest->schedule}} - {{$contestant->contest->venue}}
</p>
<hr>



@endsection
