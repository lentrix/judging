@extends('base')

@section('content')

<h1>{{$contest->title}}</h1>
<hr>

<div class="row">
    <div class="col">
        <div class="float-end">
            @include('contests._add-contestant')
        </div>
        <h3>Contestants</h3>
        <hr>
        <div class="list-group">
            @foreach($contest->contestants as $contestant)
            <a href="{{url('/contestants/' . $contestant->id)}}"
                    class="list-group-item list-group-item-action">
                {{$contestant->number}}. {{$contestant->name}}
            </a>
            @endforeach
        </div>
    </div>
    <div class="col">
        <h3>Judges</h3>
        <hr>
    </div>
    <div class="col">
        <h3>Criterias</h3>
        <hr>
    </div>
</div>

@endsection
