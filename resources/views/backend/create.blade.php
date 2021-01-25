@extends('layouts.backend')

@section('content')

<h3>Add to clothes warehouse</h3>
<div class="row text-center">
		<div class="col-md-12">
    @if( $table == 'Highlanderoutfitman' )
      <form action="{{ route('store',['table'=> 'Highlanderoutfitman']) }}" method="post" role="form" class="form-horizontal">
    @elseif( $table == 'Highlanderoutfitwoman' )
      <form action="{{ route('store',['table'=> 'Highlanderoutfitwoman']) }}" method="post" role="form" class="form-horizontal">
    @elseif( $table == 'Shepherdoutfitman' )
      <form action="{{ route('store',['table'=> 'Shepherdoutfitman']) }}" method="post" role="form" class="form-horizontal">
    @elseif( $table == 'Shepherdoutfitwoman' )
      <form action="{{ route('store',['table'=> 'Shepherdoutfitwoman']) }}" method="post" role="form" class="form-horizontal">
    @elseif( $table == 'Cracowman' )
      <form action="{{ route('store',['table'=> 'Cracowman']) }}" method="post" role="form" class="form-horizontal">
    @elseif( $table == 'Cracowwoman' )
      <form action="{{ route('store',['table'=> 'Cracowwoman']) }}" method="post" role="form" class="form-horizontal">
    @elseif( $table == 'Cracoweastman' )
      <form action="{{ route('store',['table'=> 'Cracoweastman']) }}" method="post" role="form" class="form-horizontal">
    @elseif( $table == 'Cracoweastwoman' )
      <form action="{{ route('store',['table'=> 'Cracoweastwoman']) }}" method="post" role="form" class="form-horizontal">  
    @elseif( $table == 'Lachyman' )
      <form action="{{ route('store',['table'=> 'Lachyman']) }}" method="post" role="form" class="form-horizontal">
    @elseif( $table == 'Lachywoman' )
      <form action="{{ route('store',['table'=> 'Lachywoman']) }}" method="post" role="form" class="form-horizontal">  
    @elseif( $table == 'Lowiczman' )
      <form action="{{ route('store',['table'=> 'Lowiczman']) }}" method="post" role="form" class="form-horizontal">
    @elseif( $table == 'Lowiczwoman' )
      <form action="{{ route('store',['table'=> 'Lowiczwoman']) }}" method="post" role="form" class="form-horizontal">
    @elseif( $table == 'Zywiecman' )
      <form action="{{ route('store',['table'=> 'Zywiecman']) }}" method="post" role="form" class="form-horizontal">
    @elseif( $table == 'Zywiecwoman' )
      <form action="{{ route('store',['table'=> 'Zywiecwoman']) }}" method="post" role="form" class="form-horizontal">     
    @endif
      {{ csrf_field() }}
          <label for="name">Type of outfit: </label>
          <input type="text" name="name">
          <label for="quantity">Quantity [piece]: </label>
          <input type="number" name="quantity" value="" min="1" max="100000">
        <button type="submit" class="btn btn-success"><i class='icon-plus'></i>Add</button>
        <a href="{{ route('adminHome') }}" class="btn btn-primary"><i class='icon-cancel-circled'></i>Return</a>
      </form>
    </div>
</div>
@endsection

