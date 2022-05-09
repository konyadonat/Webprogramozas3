@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-body"> 
        <form action="{{ route('place.edit', $place) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex align-items-center mb-3">
                <h3 class="display-3">{{ __('Updating '). $place->name}}</h3>
                <button class="ms-auto btn btn-primary">{{__('Update place')}}</button>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" value="{{$place->name}}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="Example name" name="name" value="{{old('name')}}">
                                @if ($errors->has('name'))
                                    <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form> 
    </div>
</div>
         
@endsection