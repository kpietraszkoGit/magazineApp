@extends('layouts.backend')

@section('content')
<h3>Make changes to the clothes warehouse</h3>
  <div class="row text-center">
		<div class="col-md-12">
      @if( $table == 'Highlanderoutfitman' )
      <form action="{{ route('shop.update', [$highlanderoutfitman->id , 'table'=> 'Highlanderoutfitman']) }}" method="get" role="form" class="form-horizontal">
        <label for="name">Type of outfit: </label>
        <input type="text" name="name" value="{{ $highlanderoutfitman->name }}">
        <label for="quantity">Quantity [piece]: </label>
        <input type="number" name="quantity" value="{{ $highlanderoutfitman->quantity }}" min="1" max="100000">
      @elseif( $table == 'Highlanderoutfitwoman' )
      <form action="{{ route('shop.update', [$highlanderoutfitwoman->id , 'table'=> 'Highlanderoutfitwoman']) }}" method="get" role="form" class="form-horizontal">
        <label for="name">Type of outfit: </label>
        <input type="text" name="name" value="{{ $highlanderoutfitwoman->name }}">
        <label for="quantity">Quantity [piece]: </label>
        <input type="number" name="quantity" value="{{ $highlanderoutfitwoman->quantity }}" min="1" max="100000">
      @elseif( $table == 'Shepherdoutfitman' )
      <form action="{{ route('shop.update', [$shepherdoutfitman->id , 'table'=> 'Shepherdoutfitman']) }}" method="get" role="form" class="form-horizontal">
        <label for="name">Type of outfit: </label>
        <input type="text" name="name" value="{{ $shepherdoutfitman->name }}">
        <label for="quantity">Quantity [piece]: </label>
        <input type="number" name="quantity" value="{{ $shepherdoutfitman->quantity }}" min="1" max="100000">
      @elseif( $table == 'Shepherdoutfitwoman' )
      <form action="{{ route('shop.update', [$shepherdoutfitwoman->id , 'table'=> 'Shepherdoutfitwoman']) }}" method="get" role="form" class="form-horizontal">
        <label for="name">Type of outfit: </label>
        <input type="text" name="name" value="{{ $shepherdoutfitwoman->name }}">
        <label for="quantity">Quantity [piece]: </label>
        <input type="number" name="quantity" value="{{ $shepherdoutfitwoman->quantity }}" min="1" max="100000">
      @elseif( $table == 'Cracowman' )
      <form action="{{ route('shop.update', [$cracowman->id , 'table'=> 'Cracowman']) }}" method="get" role="form" class="form-horizontal">
        <label for="name">Type of outfit: </label>
        <input type="text" name="name" value="{{ $cracowman->name }}">
        <label for="quantity">Quantity [piece]: </label>
        <input type="number" name="quantity" value="{{ $cracowman->quantity }}" min="1" max="100000">
      @elseif( $table == 'Cracowwoman' )
      <form action="{{ route('shop.update', [$cracowwoman->id , 'table'=> 'Cracowwoman']) }}" method="get" role="form" class="form-horizontal">
        <label for="name">Type of outfit: </label>
        <input type="text" name="name" value="{{ $cracowwoman->name }}">
        <label for="quantity">Quantity [piece]: </label>
        <input type="number" name="quantity" value="{{ $cracowwoman->quantity }}" min="1" max="100000">
      @elseif( $table == 'Cracoweastman' )
      <form action="{{ route('shop.update', [$cracoweastman->id , 'table'=> 'Cracoweastman']) }}" method="get" role="form" class="form-horizontal">
        <label for="name">Type of outfit: </label>
        <input type="text" name="name" value="{{ $cracoweastman->name }}">
        <label for="quantity">Quantity [piece]: </label>
        <input type="number" name="quantity" value="{{ $cracoweastman->quantity }}" min="1" max="100000">
      @elseif( $table == 'Cracoweastwoman' )
      <form action="{{ route('shop.update', [$cracoweastwoman->id , 'table'=> 'Cracoweastwoman']) }}" method="get" role="form" class="form-horizontal">
        <label for="name">Type of outfit: </label>
        <input type="text" name="name" value="{{ $cracoweastwoman->name }}">
        <label for="quantity">Quantity [piece]: </label>
        <input type="number" name="quantity" value="{{ $cracoweastwoman->quantity }}" min="1" max="100000">
      @elseif( $table == 'Lachyman' )
      <form action="{{ route('shop.update', [$lachyman->id , 'table'=> 'Lachyman']) }}" method="get" role="form" class="form-horizontal">
        <label for="name">Type of outfit: </label>
        <input type="text" name="name" value="{{ $lachyman->name }}">
        <label for="quantity">Quantity [piece]: </label>
        <input type="number" name="quantity" value="{{ $lachyman->quantity }}" min="1" max="100000">
      @elseif( $table == 'Lachywoman' )
      <form action="{{ route('shop.update', [$lachywoman->id , 'table'=> 'Lachywoman']) }}" method="get" role="form" class="form-horizontal">
        <label for="name">Type of outfit: </label>
        <input type="text" name="name" value="{{ $lachywoman->name }}">
        <label for="quantity">Quantity [piece]: </label>
        <input type="number" name="quantity" value="{{ $lachywoman->quantity }}" min="1" max="100000">
      @elseif( $table == 'Lowiczman' )
      <form action="{{ route('shop.update', [$lowiczman->id , 'table'=> 'Lowiczman']) }}" method="get" role="form" class="form-horizontal">
        <label for="name">Type of outfit: </label>
        <input type="text" name="name" value="{{ $lowiczman->name }}">
        <label for="quantity">Quantity [piece]: </label>
        <input type="number" name="quantity" value="{{ $lowiczman->quantity }}" min="1" max="100000">
      @elseif( $table == 'Lowiczwoman' )
      <form action="{{ route('shop.update', [$lowiczwoman->id , 'table'=> 'Lowiczwoman']) }}" method="get" role="form" class="form-horizontal">
        <label for="name">Type of outfit: </label>
        <input type="text" name="name" value="{{ $lowiczwoman->name }}">
        <label for="quantity">Quantity [piece]: </label>
        <input type="number" name="quantity" value="{{ $lowiczwoman->quantity }}" min="1" max="100000">
      @elseif( $table == 'Zywiecman' )
      <form action="{{ route('shop.update', [$zywiecman->id , 'table'=> 'Zywiecman']) }}" method="get" role="form" class="form-horizontal">
        <label for="name">Type of outfit: </label>
        <input type="text" name="name" value="{{ $zywiecman->name }}">
        <label for="quantity">Quantity [piece]: </label>
        <input type="number" name="quantity" value="{{ $zywiecman->quantity }}" min="1" max="100000">
      @elseif( $table == 'Zywiecwoman' )
      <form action="{{ route('shop.update', [$zywiecwoman->id , 'table'=> 'Zywiecwoman']) }}" method="get" role="form" class="form-horizontal">
        <label for="name">Type of outfit: </label>
        <input type="text" name="name" value="{{ $zywiecwoman->name }}">
        <label for="quantity">Quantity [piece]: </label>
        <input type="number" name="quantity" value="{{ $zywiecwoman->quantity }}" min="1" max="100000">
      @endif  
      {{ csrf_field() }}
      {{ method_field('PATCH') }}
        <button type="submit" class="btn btn-success"><i class='icon-edit'></i>Edit</button>
        <a href="{{ route('shop.index') }}" class="btn btn-primary"><i class='icon-cancel-circled'></i>Return</a>
      </form>
    </div>
</div>
@endsection
