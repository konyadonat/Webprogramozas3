@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center">{{__('Name: ').$place->name}}</h1>
</div>
@endsection