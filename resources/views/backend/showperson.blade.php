@extends('layouts.backend')

@section('content')
	<div class="row text-center">
		<div class="col-md-12">
		<br>
			<h3>{{ $person->name }} {{ $person->surname }} live in {{ $person->city }}, {{ $person->street }} Street {{ $person->number }}</h3>
			<br>
			<div class="table-responsive">
				<table class="table table-striped">
				<thead>
					<tr>
					<th class="text-center">Clothes</th>
					<th class="text-center">Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td class="text-center">{{ $person->clothes }}</td>
					<td class="text-center">{{ $person->description }}</td>
					</tr>
				</tbody>
				</table>
			</div>
		</div>

		<div class="col-md-12">
			@if( $person ?? false )
			<div class="col-lg-12">

				@foreach( $person->photos->chunk(4) as $chunked_photos )

					<div class="row">

						@foreach( $chunked_photos as $photo )

							<div class="col-md-3 col-sm-6">
								<div class="thumbnail">
									<img class="img-responsive" src="{{ $photo->path ?? $placeholder }}" alt="...">
								</div>
							</div>

						@endforeach

					</div>

				@endforeach

			</div>
			@endif
		</div>
		<a href="{{ route('myObjects') }}" class="btn btn-primary"><i class='icon-cancel-circled'></i>Return</a>
	</div>
@endsection