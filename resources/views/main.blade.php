@extends('app')

@section('content')
	<table>
		<thead>
			<th>VRM</th>
			<th>Make</th>
			<th>Model</th>
			<th>Mileage</th>
		</thead>
	@foreach ($vehicles as $vehicle)
		<tr>
			<td>{{ $vehicle->vrm }}</td>
			<td>{{ $vehicle->make() }}</td>
			<td>{{ $vehicle->model() }}</td>
			<td>{{ $vehicle->mileage }}</td>
		</tr>	
	@endforeach
	</table>

	<form action="/makes" method="POST">
		{{ csrf_field() }}
		<label for="select_make">Select Make</label>
		<select id="select_make" name="select_make">
		@foreach ($makes as $make)
			<option value="{{ $make->id }}">{{ $make->make }}
		@endforeach
		</select>
		<input type="submit" value="Submit">
	</form>
@endsection