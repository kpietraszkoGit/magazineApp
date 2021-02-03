@extends('layouts.backend') 

@section('content') 
<h2 class="sub-header headerAdmin"><i class='icon-users'></i> List of teams</h2>
@foreach( $objects as $object ) 

    <div class="panel panel-success top-buffer">
        <div class="panel-heading">
            <h3 class="panel-title"><a class="linkTeam" title="show team" href="{{ route('showTeam',['id'=>$object->id]) }}"><span>{{ $object->name }} team </span></a> <small><a href="{{ route('saveObject',['id'=>$object->id]) }}" class="btn btn-danger btn-xs">edit team</a> <a href="{{ route('savePerson').'?object_id='.$object->id }}" class="btn btn-danger btn-xs">add a person</a> <a class="linkTeam" title="delete" href="{{ route('deleteObject',['id'=>$object->id]) }}" onclick="return confirm('Are you sure you want to delete {{ $object->name }} team?');"><span class="glyphicon glyphicon-remove"></span></a></small> </h3>
        </div>

        <div class="panel-body">
            @foreach( $object->people as $person )
                <div class="my_objects">
                <a class="linkPerson" title="show" href="{{ route('showPerson',['id'=>$person->id]) }}"><span>{{ $person->name }} {{ $person->surname }}</span></a> <a title="edit" href="{{ route('savePerson',['id'=>$person->id]) }}"><span class="glyphicon glyphicon-edit"></span></a> <a title="delete" href="{{ route('deletePerson',['id'=>$person->id]) }}" onclick="return confirm('Are you sure you want to delete person: {{ $person->name }} {{ $person->surname }}?');"><span class="glyphicon glyphicon-remove"></span></a> </div>
            @endforeach
        </div>

    </div>

@endforeach 

<div class="footerAdmin">
    <p>&copy; Kamil Pietraszko 2021</p>
</div>
@endsection

