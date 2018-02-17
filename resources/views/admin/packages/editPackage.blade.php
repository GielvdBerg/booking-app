@extends('admin/layout')
@section('content')

<div class="container">
	<div class="row text-center">
		<legend>Bewerk periode</legend>
		  {!! Form::model($package, array('route' => array('package.update', $package->id))) !!}

        <!-- name -->
        {!! Form::label('package_name', 'Naam') !!}
        {!! Form::text('package_name') !!}

        <!-- price -->
        {!! Form::label('package_price', 'Prijs') !!}
        {!! Form::number('package_price') !!}

        {!! Form::label('package_time', 'Tijd') !!}
        {!! Form::number('package_time') !!}

				<br>
        {!! Form::label('package_description', 'Beschrijving') !!}
        <br>
        {!! Form::textarea('package_description') !!}
				<br>
        {!! Form::button('Bewerk', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
	</div>
</div>
@endsection
