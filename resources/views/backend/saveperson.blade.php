@extends('layouts.backend')

@section('content')

@if( $person ?? false )
<h2 class="sub-header headerAdmin"><i class='icon-edit'></i> Editing the person of the {{ $person->object->name }} team</h2>
@else
<h2 class="sub-header headerAdmin"><i class='icon-plus'></i> Adding a new person to the team</h2>
@endif

<form action="{{ route('savePerson',['id'=>$person->id ?? false]) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    <fieldset>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name *</label>
            <div class="col-lg-10">
                <input name="name" type="text" value="{{ $person->name ?? old('name') }}" class="form-control" id="name" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="surname" class="col-lg-2 control-label">Surname *</label>
            <div class="col-lg-10">
                <input name="surname" type="text" value="{{ $person->surname ?? old('surname') }}" class="form-control" id="surname" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="city" class="col-lg-2 control-label">City *</label>
            <div class="col-lg-10">
                <input name="city" type="text" value="{{ $person->city ?? old('city') }}" class="form-control" id="city" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="street" class="col-lg-2 control-label">Street *</label>
            <div class="col-lg-10">
                <input name="street" type="text" value="{{ $person->street ?? old('street') }}" class="form-control" id="street" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="number" class="col-lg-2 control-label">Number *</label>
            <div class="col-lg-10">
                <input name="number" type="number" value="{{ $person->number ?? old('number') }}" class="form-control" id="number" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="clothes" class="col-lg-2 control-label">Clothes *</label>
            <div class="col-lg-10">
                <input name="clothes" type="text" value="{{ $person->clothes ?? old('clothes') }}" class="form-control" id="clothes" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="descr" class="col-lg-2 control-label">Person description *</label>
            <div class="col-lg-10">
                <textarea name="description" class="form-control" rows="3" id="descr">{{ $person->description ?? old('description') }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <label for="personPictures">Person gallery</label>
                <input type="file" name="personPictures[]" id="personPictures" multiple>
                <p class="help-block">Add a photo gallery of the person</p>
            </div>
        </div>

        @if( $person ?? false )
        <div class="col-lg-10 col-lg-offset-2">

            @foreach( $person->photos->chunk(4) as $chunked_photos )

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
                <button type="submit" class="btn btn-primary">Save person</button>
            </div>
        </div>

    </fieldset>
    <input type="hidden" name="object_id" value="{{ $object_id ?? null }}">
    {{ csrf_field() }}
</form>

<div class="footerAdmin">
    <p>&copy; Kamil Pietraszko 2021</p>
</div>
@endsection
