@extends('layouts.backend')

@section('content')
<h2 class="sub-header headerAdmin"><i class='icon-basket'></i> Clothes inventory</h2>
<h3 class="sub-header">Regions of folk dances:</h3>
<div>
    <div id="accordion">
    <div class="card col-md-12">
        <div class="card-header" id="headingOne">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed nameRegion" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                GÓRAL UROCZYSTY <i class='icon-down-dir'></i>
            </button>
        </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
            <div class="col-md-5 sideLeft">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h4>Men's outfit</h4>
                        <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Type of outfit</th>
                            <th class="text-center">Quantity [piece]</th>
                            <th class="text-center">Date added</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($highlanderoutfitmen as $highlanderoutfitman)
                            <tr>
                            <th class="text-center">{{ $highlanderoutfitman->id }}</th>
                            <th class="text-center upper"><a href="{{ route('shop.show', [$highlanderoutfitman->id , 'table'=> 'Highlanderoutfitman']) }}">{{ $highlanderoutfitman->name }}</a></th>
                            <th class="text-center">{{ $highlanderoutfitman->quantity }}</th>
                            <th class="text-center">{{ $highlanderoutfitman->updated_at->format('d/m/Y') }}</th>
                            <th class="text-center"><a href="{{ route('shop.edit', [$highlanderoutfitman->id , 'table'=> 'Highlanderoutfitman']) }}"><i class='icon-edit'></i></a></th>
                            <th class="text-center"><a href="{{ route('shop.delete', [$highlanderoutfitman->id , 'table'=> 'Highlanderoutfitman']) }}"  onclick="return confirm('Are you sure you want to delete {{ $highlanderoutfitman->name }}?');"><i class='icon-trash-empty'></i></a></th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                        <a href="{{route('elements.create',['table'=> 'Highlanderoutfitman'])}}" class="btn btn-primary twoButton"><i class='icon-plus'></i>Add an outfit item</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 sideRight">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h4>Women's outfit</h4>
                        <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Type of outfit</th>
                            <th class="text-center">Quantity [piece]</th>
                            <th class="text-center">Date added</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($highlanderoutfitwomen as $highlanderoutfitwoman)
                            <tr>
                            <th class="text-center">{{ $highlanderoutfitwoman->id }}</th>
                            <th class="text-center upper"><a href="{{ route('shop.show', [$highlanderoutfitwoman->id , 'table'=> 'Highlanderoutfitwoman']) }}">{{ $highlanderoutfitwoman->name }}</a></th>
                            <th class="text-center">{{ $highlanderoutfitwoman->quantity }}</th>
                            <th class="text-center">{{ $highlanderoutfitwoman->updated_at->format('d/m/Y') }}</th>
                            <th class="text-center"><a href="{{ route('shop.edit', [$highlanderoutfitwoman->id , 'table'=> 'Highlanderoutfitwoman']) }}"><i class='icon-edit'></i></a></th>
                            <th class="text-center"><a href="{{ route('shop.delete', [$highlanderoutfitwoman->id , 'table'=> 'Highlanderoutfitwoman']) }}"  onclick="return confirm('Are you sure you want to delete {{ $highlanderoutfitwoman->name }}?');"><i class='icon-trash-empty'></i></a></th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                        <a href="{{route('elements.create',['table'=> 'Highlanderoutfitwoman'])}}" class="btn btn-primary twoButton"><i class='icon-plus'></i>Add an outfit item</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="card col-md-12">
        <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed nameRegion" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                GÓRAL PASTERSKI <i class='icon-down-dir'></i>
            </button>
        </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
            <div class="col-md-5 sideLeft">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h4>Men's outfit</h4>
                        <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Type of outfit</th>
                            <th class="text-center">Quantity [piece]</th>
                            <th class="text-center">Date added</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($shepherdoutfitmen as $shepherdoutfitman)
                            <tr>
                            <th class="text-center">{{ $shepherdoutfitman->id }}</th>
                            <th class="text-center upper"><a href="{{ route('shop.show', [$shepherdoutfitman->id , 'table'=> 'Shepherdoutfitman']) }}">{{ $shepherdoutfitman->name }}</a></th>
                            <th class="text-center">{{ $shepherdoutfitman->quantity }}</th>
                            <th class="text-center">{{ $shepherdoutfitman->updated_at->format('d/m/Y') }}</th>
                            <th class="text-center"><a href="{{ route('shop.edit', [$shepherdoutfitman->id , 'table'=> 'Shepherdoutfitman']) }}"><i class='icon-edit'></i></a></th>
                            <th class="text-center"><a href="{{ route('shop.delete', [$shepherdoutfitman->id , 'table'=> 'Shepherdoutfitman']) }}"  onclick="return confirm('Are you sure you want to delete {{ $shepherdoutfitman->name }}?');"><i class='icon-trash-empty'></i></a></th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                        <a href="{{route('elements.create',['table'=> 'Shepherdoutfitman'])}}" class="btn btn-primary twoButton"><i class='icon-plus'></i>Add an outfit item</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 sideRight">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h4>Women's outfit</h4>
                        <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Type of outfit</th>
                            <th class="text-center">Quantity [piece]</th>
                            <th class="text-center">Date added</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($shepherdoutfitwomen as $shepherdoutfitwoman)
                            <tr>
                            <th class="text-center">{{ $shepherdoutfitwoman->id }}</th>
                            <th class="text-center upper"><a href="{{ route('shop.show', [$shepherdoutfitwoman->id , 'table'=> 'Shepherdoutfitwoman']) }}">{{ $shepherdoutfitwoman->name }}</a></th>
                            <th class="text-center">{{ $shepherdoutfitwoman->quantity }}</th>
                            <th class="text-center">{{ $shepherdoutfitwoman->updated_at->format('d/m/Y') }}</th>
                            <th class="text-center"><a href="{{ route('shop.edit', [$shepherdoutfitwoman->id , 'table'=> 'Shepherdoutfitwoman']) }}"><i class='icon-edit'></i></a></th>
                            <th class="text-center"><a href="{{ route('shop.delete', [$shepherdoutfitwoman->id , 'table'=> 'Shepherdoutfitwoman']) }}"  onclick="return confirm('Are you sure you want to delete {{ $shepherdoutfitwoman->name }}?');"><i class='icon-trash-empty'></i></a></th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                        <a href="{{route('elements.create',['table'=> 'Shepherdoutfitwoman'])}}" class="btn btn-primary twoButton"><i class='icon-plus'></i>Add an outfit item</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="card col-md-12">
        <div class="card-header" id="headingThree">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed nameRegion" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                KRAKOWIAK <i class='icon-down-dir'></i>
            </button>
        </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
            <div class="col-md-5 sideLeft">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h4>Men's outfit</h4>
                        <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Type of outfit</th>
                            <th class="text-center">Quantity [piece]</th>
                            <th class="text-center">Date added</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cracowmen as $cracowman)
                            <tr>
                            <th class="text-center">{{ $cracowman->id }}</th>
                            <th class="text-center upper"><a href="{{ route('shop.show', [$cracowman->id , 'table'=> 'Cracowman']) }}">{{ $cracowman->name }}</a></th>
                            <th class="text-center">{{ $cracowman->quantity }}</th>
                            <th class="text-center">{{ $cracowman->updated_at->format('d/m/Y') }}</th>
                            <th class="text-center"><a href="{{ route('shop.edit', [$cracowman->id , 'table'=> 'Cracowman']) }}"><i class='icon-edit'></i></a></th>
                            <th class="text-center"><a href="{{ route('shop.delete', [$cracowman->id , 'table'=> 'Cracowman']) }}"  onclick="return confirm('Are you sure you want to delete {{ $cracowman->name }}?');"><i class='icon-trash-empty'></i></a></th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                        <a href="{{route('elements.create',['table'=> 'Cracowman'])}}" class="btn btn-primary twoButton"><i class='icon-plus'></i>Add an outfit item</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 sideRight">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h4>Women's outfit</h4>
                        <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Type of outfit</th>
                            <th class="text-center">Quantity [piece]</th>
                            <th class="text-center">Date added</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cracowwomen as $cracowwoman)
                            <tr>
                            <th class="text-center">{{ $cracowwoman->id }}</th>
                            <th class="text-center upper"><a href="{{ route('shop.show', [$cracowwoman->id , 'table'=> 'Cracowwoman']) }}">{{ $cracowwoman->name }}</a></th>
                            <th class="text-center">{{ $cracowwoman->quantity }}</th>
                            <th class="text-center">{{ $cracowwoman->updated_at->format('d/m/Y') }}</th>
                            <th class="text-center"><a href="{{ route('shop.edit', [$cracowwoman->id , 'table'=> 'Cracowwoman']) }}"><i class='icon-edit'></i></a></th>
                            <th class="text-center"><a href="{{ route('shop.delete', [$cracowwoman->id , 'table'=> 'Cracowwoman']) }}"  onclick="return confirm('Are you sure you want to delete {{ $cracowwoman->name }}?');"><i class='icon-trash-empty'></i></a></th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                        <a href="{{route('elements.create',['table'=> 'Cracowwoman'])}}" class="btn btn-primary twoButton"><i class='icon-plus'></i>Add an outfit item</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="card col-md-12">
        <div class="card-header" id="headingFour">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed nameRegion" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                ZABORÓW <i class='icon-down-dir'></i>
            </button>
        </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
        <div class="card-body">
            <div class="col-md-5 sideLeft">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h4>Men's outfit</h4>
                        <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Type of outfit</th>
                            <th class="text-center">Quantity [piece]</th>
                            <th class="text-center">Date added</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cracoweastmen as $cracoweastman)
                            <tr>
                            <th class="text-center">{{ $cracoweastman->id }}</th>
                            <th class="text-center upper"><a href="{{ route('shop.show', [$cracoweastman->id , 'table'=> 'Cracoweastman']) }}">{{ $cracoweastman->name }}</a></th>
                            <th class="text-center">{{ $cracoweastman->quantity }}</th>
                            <th class="text-center">{{ $cracoweastman->updated_at->format('d/m/Y') }}</th>
                            <th class="text-center"><a href="{{ route('shop.edit', [$cracoweastman->id , 'table'=> 'Cracoweastman']) }}"><i class='icon-edit'></i></a></th>
                            <th class="text-center"><a href="{{ route('shop.delete', [$cracoweastman->id , 'table'=> 'Cracoweastman']) }}"  onclick="return confirm('Are you sure you want to delete {{ $cracoweastman->name }}?');"><i class='icon-trash-empty'></i></a></th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                        <a href="{{route('elements.create',['table'=> 'Cracoweastman'])}}" class="btn btn-primary twoButton"><i class='icon-plus'></i>Add an outfit item</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 sideRight">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h4>Women's outfit</h4>
                        <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Type of outfit</th>
                            <th class="text-center">Quantity [piece]</th>
                            <th class="text-center">Date added</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cracoweastwomen as $cracoweastwoman)
                            <tr>
                            <th class="text-center">{{ $cracoweastwoman->id }}</th>
                            <th class="text-center upper"><a href="{{ route('shop.show', [$cracoweastwoman->id , 'table'=> 'Cracoweastwoman']) }}">{{ $cracoweastwoman->name }}</a></th>
                            <th class="text-center">{{ $cracoweastwoman->quantity }}</th>
                            <th class="text-center">{{ $cracoweastwoman->updated_at->format('d/m/Y') }}</th>
                            <th class="text-center"><a href="{{ route('shop.edit', [$cracoweastwoman->id , 'table'=> 'Cracoweastwoman']) }}"><i class='icon-edit'></i></a></th>
                            <th class="text-center"><a href="{{ route('shop.delete', [$cracoweastwoman->id  , 'table'=> 'Cracoweastwoman']) }}"  onclick="return confirm('Are you sure you want to delete {{ $cracoweastwoman->name }}?');"><i class='icon-trash-empty'></i></a></th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                        <a href="{{route('elements.create',['table'=> 'Cracoweastwoman'])}}" class="btn btn-primary twoButton"><i class='icon-plus'></i>Add an outfit item</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="card col-md-12">
        <div class="card-header" id="headingFive">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed nameRegion" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                LACHY SĄDECKIE <i class='icon-down-dir'></i>
            </button>
        </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
        <div class="card-body">
            <div class="col-md-5 sideLeft">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h4>Men's outfit</h4>
                        <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Type of outfit</th>
                            <th class="text-center">Quantity [piece]</th>
                            <th class="text-center">Date added</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lachymen as $lachyman)
                            <tr>
                            <th class="text-center">{{ $lachyman->id }}</th>
                            <th class="text-center upper"><a href="{{ route('shop.show', [$lachyman->id , 'table'=> 'Lachyman']) }}">{{ $lachyman->name }}</a></th>
                            <th class="text-center">{{ $lachyman->quantity }}</th>
                            <th class="text-center">{{ $lachyman->updated_at->format('d/m/Y') }}</th>
                            <th class="text-center"><a href="{{ route('shop.edit', [$lachyman->id , 'table'=> 'Lachyman']) }}"><i class='icon-edit'></i></a></th>
                            <th class="text-center"><a href="{{ route('shop.delete', [$lachyman->id , 'table'=> 'Lachyman']) }}"  onclick="return confirm('Are you sure you want to delete {{ $lachyman->name }}?');"><i class='icon-trash-empty'></i></a></th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                        <a href="{{route('elements.create',['table'=> 'Lachyman'])}}" class="btn btn-primary twoButton"><i class='icon-plus'></i>Add an outfit item</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 sideRight">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h4>Women's outfit</h4>
                        <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Type of outfit</th>
                            <th class="text-center">Quantity [piece]</th>
                            <th class="text-center">Date added</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lachywomen as $lachywoman)
                            <tr>
                            <th class="text-center">{{ $lachywoman->id }}</th>
                            <th class="text-center upper"><a href="{{ route('shop.show', [$lachywoman->id , 'table'=> 'Lachywoman']) }}">{{ $lachywoman->name }}</a></th>
                            <th class="text-center">{{ $lachywoman->quantity }}</th>
                            <th class="text-center">{{ $lachywoman->updated_at->format('d/m/Y') }}</th>
                            <th class="text-center"><a href="{{ route('shop.edit', [$lachywoman->id , 'table'=> 'Lachywoman']) }}"><i class='icon-edit'></i></a></th>
                            <th class="text-center"><a href="{{ route('shop.delete', [$lachywoman->id , 'table'=> 'Lachywoman']) }}"  onclick="return confirm('Are you sure you want to delete {{ $lachywoman->name }}?');"><i class='icon-trash-empty'></i></a></th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                        <a href="{{route('elements.create',['table'=> 'Lachywoman'])}}" class="btn btn-primary twoButton"><i class='icon-plus'></i>Add an outfit item</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="card col-md-12">
        <div class="card-header" id="headingSix">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed nameRegion" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                ŁOWICZ <i class='icon-down-dir'></i>
            </button>
        </h5>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
        <div class="card-body">
            <div class="col-md-5 sideLeft">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h4>Men's outfit</h4>
                        <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Type of outfit</th>
                            <th class="text-center">Quantity [piece]</th>
                            <th class="text-center">Date added</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lowiczmen as $lowiczman)
                            <tr>
                            <th class="text-center">{{ $lowiczman->id }}</th>
                            <th class="text-center upper"><a href="{{ route('shop.show', [$lowiczman->id , 'table'=> 'Lowiczman']) }}">{{ $lowiczman->name }}</a></th>
                            <th class="text-center">{{ $lowiczman->quantity }}</th>
                            <th class="text-center">{{ $lowiczman->updated_at->format('d/m/Y') }}</th>
                            <th class="text-center"><a href="{{ route('shop.edit', [$lowiczman->id , 'table'=> 'Lowiczman']) }}"><i class='icon-edit'></i></a></th>
                            <th class="text-center"><a href="{{ route('shop.delete', [$lowiczman->id , 'table'=> 'Lowiczman']) }}"  onclick="return confirm('Are you sure you want to delete {{ $lowiczman->name }}?');"><i class='icon-trash-empty'></i></a></th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                        <a href="{{route('elements.create',['table'=> 'Lowiczman'])}}" class="btn btn-primary twoButton"><i class='icon-plus'></i>Add an outfit item</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 sideRight">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h4>Women's outfit</h4>
                        <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Type of outfit</th>
                            <th class="text-center">Quantity [piece]</th>
                            <th class="text-center">Date added</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lowiczwomen as $lowiczwoman)
                            <tr>
                            <th class="text-center">{{ $lowiczwoman->id }}</th>
                            <th class="text-center upper"><a href="{{ route('shop.show', [$lowiczwoman->id , 'table'=> 'Lowiczwoman']) }}">{{ $lowiczwoman->name }}</a></th>
                            <th class="text-center">{{ $lowiczwoman->quantity }}</th>
                            <th class="text-center">{{ $lowiczwoman->updated_at->format('d/m/Y') }}</th>
                            <th class="text-center"><a href="{{ route('shop.edit', [$lowiczwoman->id , 'table'=> 'Lowiczwoman']) }}"><i class='icon-edit'></i></a></th>
                            <th class="text-center"><a href="{{ route('shop.delete', [$lowiczwoman->id , 'table'=> 'Lowiczwoman']) }}"  onclick="return confirm('Are you sure you want to delete {{ $lowiczwoman->name }}?');"><i class='icon-trash-empty'></i></a></th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                        <a href="{{route('elements.create',['table'=> 'Lowiczwoman'])}}" class="btn btn-primary twoButton"><i class='icon-plus'></i>Add an outfit item</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="card col-md-12">
        <div class="card-header" id="headingSeven">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed nameRegion" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                MIESZCZANIE ŻYWIECCY <i class='icon-down-dir'></i>
            </button>
        </h5>
        </div>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
        <div class="card-body">
            <div class="col-md-5 sideLeft">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h4>Men's outfit</h4>
                        <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Type of outfit</th>
                            <th class="text-center">Quantity [piece]</th>
                            <th class="text-center">Date added</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($zywiecmen as $zywiecman)
                            <tr>
                            <th class="text-center">{{ $zywiecman->id }}</th>
                            <th class="text-center upper"><a href="{{ route('shop.show', [$zywiecman->id , 'table'=> 'Zywiecman']) }}">{{ $zywiecman->name }}</a></th>
                            <th class="text-center">{{ $zywiecman->quantity }}</th>
                            <th class="text-center">{{ $zywiecman->updated_at->format('d/m/Y') }}</th>
                            <th class="text-center"><a href="{{ route('shop.edit', [$zywiecman->id , 'table'=> 'Zywiecman']) }}"><i class='icon-edit'></i></a></th>
                            <th class="text-center"><a href="{{ route('shop.delete', [$zywiecman->id , 'table'=> 'Zywiecman']) }}"  onclick="return confirm('Are you sure you want to delete {{ $zywiecman->name }}?');"><i class='icon-trash-empty'></i></a></th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                        <a href="{{route('elements.create',['table'=> 'Zywiecman'])}}" class="btn btn-primary twoButton"><i class='icon-plus'></i>Add an outfit item</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 sideRight">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h4>Women's outfit</h4>
                        <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Type of outfit</th>
                            <th class="text-center">Quantity [piece]</th>
                            <th class="text-center">Date added</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($zywiecwomen as $zywiecwoman)
                            <tr>
                            <th class="text-center">{{ $zywiecwoman->id }}</th>
                            <th class="text-center upper"><a href="{{ route('shop.show', [$zywiecwoman->id , 'table'=> 'Zywiecwoman']) }}">{{ $zywiecwoman->name }}</a></th>
                            <th class="text-center">{{ $zywiecwoman->quantity }}</th>
                            <th class="text-center">{{ $zywiecwoman->updated_at->format('d/m/Y') }}</th>
                            <th class="text-center"><a href="{{ route('shop.edit', [$zywiecwoman->id , 'table'=> 'Zywiecwoman']) }}"><i class='icon-edit'></i></a></th>
                            <th class="text-center"><a href="{{ route('shop.delete', [$zywiecwoman->id , 'table'=> 'Zywiecwoman']) }}"  onclick="return confirm('Are you sure you want to delete {{ $zywiecwoman->name }}?');"><i class='icon-trash-empty'></i></a></th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                        <a href="{{route('elements.create',['table'=> 'Zywiecwoman'])}}" class="btn btn-primary twoButton"><i class='icon-plus'></i>Add an outfit item</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="footerAdmin">
    <p>&copy; Kamil Pietraszko 2021</p>
</div>
@endsection
