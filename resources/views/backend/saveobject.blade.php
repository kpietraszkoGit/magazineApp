@extends('layouts.backend')

@section('content') 

<!-- Lecture 44 -->
@if( $object ?? false ) <?php /* = if( isset($object) && $object != false) */ ?>
<h2 class="sub-header headerAdmin"><i class='icon-edit'></i> Editing team {{ $object->name }}</h2>
@else
<h2 class="sub-header headerAdmin"><i class='icon-plus'></i> Adding a new team</h2>
@endif

<form method="POST" enctype="multipart/form-data" class="form-horizontal" action="{{ route('saveObject',['id'=>$object->id ?? null]) }}">
    <fieldset>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name *</label>
            <div class="col-lg-10">
                <input name="name" type="text" value="{{ $object->name ?? old('name') }}" class="form-control" id="name" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="city" class="col-lg-2 control-label">City *</label>
            <div class="col-lg-10">
                <input name="city" type="text" value="{{ $object->address->city ?? old('city') }}" class="form-control" id="city" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="street" class="col-lg-2 control-label">Street *</label>
            <div class="col-lg-10">
                <input name="street" type="text" value="{{ $object->address->street ?? old('street') }}" class="form-control" id="street" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="number" class="col-lg-2 control-label">Number *</label>
            <div class="col-lg-10">
                <input name="number" type="number" value="{{ $object->address->number ?? old('number') }}" class="form-control" id="number" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="descr" class="col-lg-2 control-label">Team description *</label>
            <div class="col-lg-10">
                <textarea name="description" class="form-control" rows="3" id="descr">{{ $object->description ?? old('description') /* Lecture 44 */ }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <label for="objectPictures">Team gallery</label>
                <input type="file" name="objectPictures[]" id="objectPictures" multiple>
                <p class="help-block">Add a photo gallery of the team</p>
            </div>
        </div>

        @if( $object ?? false )
        <div class="col-lg-10 col-lg-offset-2">

            @foreach( $object->photos->chunk(4) as $chunked_photos )

                <div class="row">


                    @foreach( $chunked_photos as $photo )

                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img class="img-responsive" src="{{ $photo->path ?? $placeholder }}" alt="...">
                                <div class="caption">
                                    <p><a href="{{ route('deletePhoto',['id'=>$photo->id]) }}" class="btn btn-primary btn-xs" role="button">Delete</a></p>
                                </div>

                            </div>
                        </div>

                    @endforeach 

                </div>


            @endforeach 

        </div>

        @endif

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Save team</button>
            </div>
        </div>

    </fieldset>
    {{ csrf_field() }}
</form>

<div class="footerAdmin">
    <p>&copy; Kamil Pietraszko 2021</p>
</div>

@endsection