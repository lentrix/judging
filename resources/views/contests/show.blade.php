@extends('base')

@section('content')

<h1>{{$contest->title}} - Setup</h1>
<hr>

<div class="row d-flex align-items-stretch">
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body bg-light shadow">
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
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body bg-light shadow">
                <div class="float-end">
                    @include('contests._add-judge')
                </div>
                <h3>Judges</h3>
                <hr>
                <table class="table table-bordered table-striped sm">
                    <thead>
                        <tr class="bg-secondary text-light">
                            <th>Judge</th>
                            <th>Pass Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contest->judges as $judge)
                        <tr>
                            <td>{{$judge->name}}</td>
                            <td>{{$judge->passcode}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body bg-light shadow">
                <div class="float-end">
                    @include('contests._add-criteria')
                </div>
                <h3>Criterias</h3>
                <hr>
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr class="bg-secondary text-white">
                            <th>Criteria</th>
                            <th class="text-center">Weight</th>
                            <th>...</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0; ?>
                        @foreach($contest->criterias as $criteria)
                        <?php $total+=$criteria->weight; ?>
                        <tr>
                            <td>{{$criteria->name}}</td>
                            <td class="text-center">{{$criteria->weight}}</td>
                            <td>...</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td class="fw-bold">TOTAL</td>
                            <td class="text-center fw-bold">{{$total}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
