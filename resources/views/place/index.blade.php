@extends('layouts.main')

@section('content')

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
        <a href="{{ route('place.details', ['place'=> $place])}}">Megtekint</a>
    </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
@endsection