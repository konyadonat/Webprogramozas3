@extends('layouts.main')

@section('content')
    <h1 class="text-center">{{ __("Grape's type: ").$grape->type}}</h1>
    <h1 class="text-center">{{ __("Grape's origin: ").$grape->place->name}}</h1>
@endsection