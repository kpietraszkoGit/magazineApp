@extends('layouts.backend')

@section('content')
	<div class="row text-center">
		<div class="col-md-12">
		@if( $table == 'Highlanderoutfitman' )
			<p><h3>{{ $highlanderoutfitman->name }} is in quantity {{ $highlanderoutfitman->quantity }} in the clothes warehouse</h3>
		@elseif( $table == 'Highlanderoutfitwoman' )
			<p><h3>{{ $highlanderoutfitwoman->name }} is in quantity {{ $highlanderoutfitwoman->quantity }} in the clothes warehouse</h3>
		@elseif( $table == 'Shepherdoutfitman' )
			<p><h3>{{ $shepherdoutfitman->name }} is in quantity {{ $shepherdoutfitman->quantity }} in the clothes warehouse</h3>
		@elseif( $table == 'Shepherdoutfitwoman' )
			<p><h3>{{ $shepherdoutfitwoman->name }} is in quantity {{ $shepherdoutfitwoman->quantity }} in the clothes warehouse</h3>
		@elseif( $table == 'Cracowman' )
			<p><h3>{{ $cracowman->name }} is in quantity {{ $cracowman->quantity }} in the clothes warehouse</h3>
		@elseif( $table == 'Cracowwoman' )
			<p><h3>{{ $cracowwoman->name }} is in quantity {{ $cracowwoman->quantity }} in the clothes warehouse</h3>
		@elseif( $table == 'Cracoweastman' )
			<p><h3>{{ $cracoweastman->name }} is in quantity {{ $cracoweastman->quantity }} in the clothes warehouse</h3>
		@elseif( $table == 'Cracoweastwoman' )
			<p><h3>{{ $cracoweastwoman->name }} is in quantity {{ $cracoweastwoman->quantity }} in the clothes warehouse</h3>	
		@elseif( $table == 'Lachyman' )
			<p><h3>{{ $lachyman->name }} is in quantity {{ $lachyman->quantity }} in the clothes warehouse</h3>
		@elseif( $table == 'Lachywoman' )
			<p><h3>{{ $lachywoman->name }} is in quantity {{ $lachywoman->quantity }} in the clothes warehouse</h3>	
		@elseif( $table == 'Lowiczman' )
			<p><h3>{{ $lowiczman->name }} is in quantity {{ $lowiczman->quantity }} in the clothes warehouse</h3>
		@elseif( $table == 'Lowiczwoman' )
			<p><h3>{{ $lowiczwoman->name }} is in quantity {{ $lowiczwoman->quantity }} in the clothes warehouse</h3>	
		@elseif( $table == 'Zywiecman' )
			<p><h3>{{ $zywiecman->name }} is in quantity {{ $zywiecman->quantity }} in the clothes warehouse</h3>
		@elseif( $table == 'Zywiecwoman' )
			<p><h3>{{ $zywiecwoman->name }} is in quantity {{ $zywiecwoman->quantity }} in the clothes warehouse</h3>		
		@endif
			<a href="{{ route('shop.index') }}" class="btn btn-primary"><i class='icon-cancel-circled'></i>Return</a></p>
		</div>
	</div>
@endsection