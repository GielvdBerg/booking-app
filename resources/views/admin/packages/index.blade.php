@extends('admin/layout')
@section('content')
<div class="container">
	<div class="row">
		<legend>Periodes</legend>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Naam</th>
					<th>Prijs</th>
					<th>Beschrijving</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($packages as $p)
				<tr>
					<td>{{ $p->package_name }}</td>
					<td>{{ '&euro;'.$p->package_price }}</td>
					<td>{{ $p->package_description }}</td>
					<td><a href="{{ url('admin/edit-package/'.$p->id) }}" class="btn btn-primary">Bewerk</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
