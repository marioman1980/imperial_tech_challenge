@extends('app')
@section('content')
	<table border="1">
		<thead>
			<th>VRM</th>
			<th>Make</th>
			<th>Model</th>
			<th>Mileage</th>
			<th>Features</th>
		</thead>
	@foreach ($vehicles as $vehicle)
		<tr>
			<td>{{ $vehicle->vrm }}</td>
			<td>{{ $vehicle->make() }}</td>
			<td>{{ $vehicle->model() }}</td>
			<td>{{ $vehicle->mileage }}</td>
			<td>
			@foreach ($vehicle->get_features() as $vehicle_feature)
				{{ $vehicle_feature }}
				<br>
			@endforeach
			</td>
		</tr>	
	@endforeach
	</table>

	<form action="/" method="POST">
		{{ csrf_field() }}
		<label for="select_make">Select Make</label>
		<select id="select_make" name="select_make">
			<option value="all">All</option>
		@foreach ($makes as $make)
			<option value="{{ $make->id }}">{{ $make->make }}
		@endforeach
		</select>
		<br>
		<input type="radio" name="sort_by" value="mileage"> Mileage<br>
		<input type="radio" name="sort_by" value="make()"> Make<br>
		<input type="radio" name="sort_by" value="model()"> Model<br>
		<input type="submit" value="Submit">
	</form>
@endsection