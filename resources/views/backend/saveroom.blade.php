@extends('layouts.backend')

@section('content')

@if( $room ?? false )
<h2 class="sub-header headerAdmin"><i class='icon-edit'></i> Editing the person of the {{ $room->object->name }} team</h2>
@else
<h2 class="sub-header headerAdmin"><i class='icon-plus'></i> Adding a new person to the team</h2>
@endif

<form action="{{ route('saveRoom',['id'=>$room->id ?? false]) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    <fieldset>
        <div class="form-group">
            <label for="roomNumber" class="col-lg-2 control-label">Room number *</label>
            <div class="col-lg-10">
                <input name="room_number" value="{{ $room->room_number ?? old('room_number') }}" type="number" class="form-control" id="roomNumber" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="peopleNumber" class="col-lg-2 control-label">Room size *</label>
            <div class="col-lg-10">
                <input name="room_size" value="{{ $room->room_size ?? old('room_size') }}" type="number" class="form-control" id="peopleNumber" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="price" class="col-lg-2 control-label">Price *</label>
            <div class="col-lg-10">
                <input name="price" value="{{ $room->price ?? old('price') /* Lecture 48 */ }}" type="number" class="form-control" id="price" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="descr" class="col-lg-2 control-label">Room->Person description *</label>
            <div class="col-lg-10">
                <textarea name="description" class="form-control" rows="3" id="descr">{{ $room->description ?? old('description') }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <label for="roomPictures">Room gallery</label>
                <input type="file" name="roomPictures[]" id="roomPictures" multiple>
                <p class="help-block">Add a photo gallery of the room</p>
            </div>
        </div>

        @if( $room ?? false )
        <div class="col-lg-10 col-lg-offset-2">

            @foreach( $room->photos->chunk(4) as $chunked_photos )

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
                <button type="submit" class="btn btn-primary">Save room</button>
            </div>
        </div>

    </fieldset>
    <input type="hidden" name="object_id" value="{{ $object_id ?? null }}">
    {{ csrf_field() }}
</form>
@endsection
