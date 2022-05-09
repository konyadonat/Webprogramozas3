@extends('layouts.main')
@section('content')
    <h1>{{ $wine->name}}</h1>
    <h1>{{ $wine->grape->type}}</h1>
    <h1>{{ $wine->grape->place->name}}</h1>
    <h1>{{ $wine->user->name}}</h1>
    <h1>{{ $wine->winetypes_id}}</h1>
@endsection
