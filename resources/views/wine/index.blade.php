@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <br/>
    <h1 class="text-center">{{__('Wines in the database')}}</h1>
    <br/>
    <h1 class="text-left"> <a href="{{route('wine.create')}}">{{__('Add more wines')}}</h1></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">{{__('Name')}}</th>
        <th scope="col">{{__('Grape type')}}</th>
        <th scope="col">{{__('Winemaker name')}} </th>
        <th scope="col">{{__('Vintage')}} </th>
        <th scope="col">{{__('Wine type name')}} </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <?php foreach($wine as $wine): ?>
        
        <td scope="row"><?=$wine['name']?></td>
        <td scope="row"><?=$wine->grape->type?></td>
        <td scope="row"><?=$wine->user->name?></td>
        <td scope="row"><?=$wine->vintage?></td>
        <?php foreach($winetypes as $winetype): ?>
        @if ($winetype->id == $wine->winetypes_id)
        <td scope="row"><?=$winetype->type?></td>
        @endif
        <?php endforeach;?>
        
    <td>
        <a href="{{ route('wine.details', ['wine'=> $wine])}}">{{__('Details')}}</a>
        <a href="{{ route('wine.edit', ['wine'=> $wine])}}">{{__('Update')}}</a>
    </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>
@endsection