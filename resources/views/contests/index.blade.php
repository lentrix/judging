@extends('base')

@section('content')

<a href="{{url('/contests/create')}}" class="btn btn-success btn-lg float-end">
    Create Contest
</a>
<h1 class="mt-4">Recent Contests</h1>
<hr>
{{$recent}}

@endsection
