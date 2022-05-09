@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <br/>
    <h1 class="text-center">{{__('Grapes in the database')}}</h1>
    <br/>
    <h1 class="text-left"> <a href="{{route('grape.create')}}">{{__('Add more grapes')}}</h1></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">{{__('Type')}}</th>
        <th scope="col">{{__('Place')}}</th>
        <th scope="col">{{__('Actions')}} </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach($grapes as $grape): ?>
        <td scope="row"><?=$grape['type']?></td>
        <td scope="row"><?=$grape->place->name?></td>
    <td>
        <a href="{{ route('grape.details', ['grape'=> $grape])}}">{{__('Details')}}</a>
        <a href="{{ route('grape.edit', ['grape'=> $grape])}}">{{__('Update')}}</a>
    </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>
@endsection