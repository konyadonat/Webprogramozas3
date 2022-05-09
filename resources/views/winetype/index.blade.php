@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <br/>
    <h1 class="text-center">{{__('Winetypes in the database')}}</h1>
    <br/>
    <h1 class="text-left"> <a href="{{route('winetype.create')}}">{{__('Add more winetypes')}}</h1></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">{{__('Type')}}</th>
        <th scope="col">{{__('Actions')}} </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach($winetypes as $winetype): ?>
        <td scope="row"><?=$winetype['type']?>
    </td>
    <td>
        <a href="{{ route('winetype.details', ['winetype'=> $winetype])}}">{{__('Details')}}</a>
        <a href="{{ route('winetype.edit', ['winetype'=> $winetype])}}">{{__('Update')}}</a>
    </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>
@endsection