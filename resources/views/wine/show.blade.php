@extends('layouts.main')
@section('content')
<div class="container">
    <h1 class="text-center">{{__('Name: ').$wine->name}}</h1>
    <h1 class="text-center">{{__('Grape type: ').$wine->grape->type}}</h1>
    <h1 class="text-center">{{__("Grape's origin: ").$wine->grape->place->name}}</h1>
    <h1 class="text-center">{{__("Winemaker's name: ").$wine->user->name}}</h1>
    <h1 class="text-center">{{__('Winetype: ').$wine->winetypes_id}}</h1>
</div>
@endsection
