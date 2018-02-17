@extends('admin/layout')
@section('content')
<div class="container">
	<h1>Configuratie</h1>
</div>

<div class="row">
	<div class="container">
		<legend>Tijd interval</legend>
		<p> Bij het instellen van een beschikbaarheid gebruikt de applicatie deze interval om de beschikbare afspraken te segmenteren.</p>
		<p> Tijd interval is ingesteld op <strong>{{ $configuration->timeInterval->interval }} </strong> {{ $configuration->timeInterval->metric }} </p>
		{!! Form::open(['action' => 'AdminController@anySetTime', 'class' => 'form-horizontal', 'data-abide' => true]) !!}
	</div>
</div>

@endsection
