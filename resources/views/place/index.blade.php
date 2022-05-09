@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <br/>
    <h1 class="text-center">{{__('Places in the database')}}</h1>
    <br/>
    <h1 class="text-left"> <a href="{{route('place.create')}}">{{__('Add more places')}}</h1></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">{{__('Name')}}</th>
        <th scope="col">{{__('Actions')}} </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach($places as $place): ?>
        <td scope="row"><?=$place['name']?>
    </td>
    <td>
        <a href="{{ route('place.details', ['place'=> $place])}}">{{__('Details')}}</a>
        <a href="{{ route('place.edit', ['place'=> $place])}}">{{__('Update')}}</a>
    </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>
@endsection