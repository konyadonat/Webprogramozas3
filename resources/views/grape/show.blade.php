@extends('layouts.main')

@section('content')
    <h1>{{ $grape->type}}</h1>
    <h1>{{ $grape->place->name}}</h1>
@endsection