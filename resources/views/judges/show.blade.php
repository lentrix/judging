@extends('base')

@section('content')

<div class="float-end mt-3">
    <a href="{{url('/contests/' . $judge->contest->id)}}" class="btn btn-primary">
        <i class="fa fa-arrow-left"></i> Back to Contest
    </a>
</div>
<h1 class="mb-0">Judge {{$judge->name}}</h1>
<p>
    {{$judge->contest->title}} <br>
    {{$judge->contest->schedule}} <br>
    {{$judge->contest->venue}}
</p>
<hr>



@endsection
