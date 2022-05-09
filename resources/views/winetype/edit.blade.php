@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-body"> 
        <form action="{{ route('winetype.edit', $winetype) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex align-items-center mb-3">
                <h3 class="display-3">{{ __('Updating '). $winetype->type}}</h3>
                <button class="ms-auto btn btn-primary">{{__('Update winetype')}}</button>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="type">{{ __('Type') }}</label>
                                <input type="text" value="{{$winetype->type}}" class="form-control {{ $errors->has('type') ? ' is-invalid' : '' }}" id="type" 
                                placeholder="Example type" name="type" value="{{old('type')}}">
                                @if ($errors->has('type'))
                                    <p class="invalid-feedback">{{ $errors->first('type') }}</p>
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