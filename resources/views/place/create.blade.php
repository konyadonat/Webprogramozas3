@extends('layouts.main')

@section('content')
<div class=row>
    <div class="col md-8 col-lg-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="display-3 mb-3">{{__('Add places')}}</h3>
                <form action="{{route('place.create')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="Name of the place" name="name" value="{{old('name')}}">
                        @if ($errors->has('name'))
                            <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="d-grid">
                        <button class="ms-auto btn btn-primary">{{__('Add new place')}}</button>
                    </div>
                </form>
            </div>
    </div>
</div>
</div>
         
@endsection