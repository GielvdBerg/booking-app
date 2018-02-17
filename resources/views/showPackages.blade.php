@extends('layout')
@section('content')


  <div class="row text-center">
  <h1>Selecteer Periode</h1>
  @foreach($packages as $package)

    <div class="col-md-4 center-block" style="float:none;">
    <div class="panel panel-default">
      <div class="panel-heading">
    <p><b>Periode: </b><a href="booking/calendar/{{ $package->id }}">{{ $package->package_name }}</a><br>
      </div>
      <div class="panel-body">
    <b>Beschrijving: </b>{{ $package->package_description }}</p>
    </div>
</div>
</div>
  @endforeach
</div>

@stop
