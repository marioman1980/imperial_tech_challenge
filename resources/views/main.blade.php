@extends('app')
@section('content')
	<form class="row" action="/" method="POST">
		{{ csrf_field() }}
		<div class="col-sm-6">
			<div class="row">
				<div class="col-sm-6">
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
				</div>
				<div class="col-sm-6">
				@foreach ($features as $feature)
					<input type="checkbox" name="feature[]" value="{{ $feature->id }}"> {{ $feature->feature }}<br>
				@endforeach
				</div>
				<input type="submit" value="Submit">
			</div>
		</div>
	</form>
	<table class="table">
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
				{{ $vehicle_feature->feature }}
				<br>
			@endforeach
			</td>
		</tr>	
	@endforeach
	</table>
@endsection