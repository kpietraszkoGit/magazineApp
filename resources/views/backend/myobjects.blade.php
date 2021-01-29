@extends('layouts.backend') 

@section('content') 
<h2 class="sub-header headerAdmin"><i class='icon-users'></i> List of teams</h2>
@foreach( $objects as $object ) 

    <div class="panel panel-success top-buffer">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $object->name }} team <small><a href="{{ route('saveObject',['id'=>$object->id]) }}" class="btn btn-danger btn-xs">edit team</a> <a href="{{ route('saveRoom').'?object_id='.$object->id }}" class="btn btn-danger btn-xs">add a person</a> <a title="delete" href="{{ route('deleteObject',['id'=>$object->id]) }}" onclick="return confirm('Are you sure you want to delete {{ $object->name }} team?');"><span class="glyphicon glyphicon-remove"></span></a></small> </h3>
        </div>

        <div class="panel-body">
            @foreach( $object->rooms as $room )
                <span class="my_objects">
                    Person {{ $room->room_number }} <a title="edit" href="{{ route('saveRoom',['id'=>$room->id]) }}"><span class="glyphicon glyphicon-edit"></span></a> <a title="delete" href="{{ route('deleteRoom',['id'=>$room->id]) }}" onclick="return confirm('Are you sure you want to delete room {{ $room->room_number }}?');"><span class="glyphicon glyphicon-remove"></span></a> </span>
            @endforeach
        </div>

    </div>

@endforeach 

<div class="footerAdmin">
    <p>&copy; Kamil Pietraszko 2021</p>
</div>
@endsection

