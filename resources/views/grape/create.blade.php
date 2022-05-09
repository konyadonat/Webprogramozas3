@extends('layouts.main')

@section('content')
<div class=row>
    <div class="col md-8 col-lg-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="display-3 mb-3">{{__('Add grapes')}}</h3>
                <form action="{{route('grape.create')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control {{ $errors->has('type') ? ' is-invalid' : '' }}" id="type" placeholder="Type of a grape" name="type" value="{{old('type')}}">
                        @if ($errors->has('type'))
                            <p class="invalid-feedback">{{ $errors->first('type') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <select class="form-control{{ $errors->has('place_id') ? ' is-invalid' : '' }}" name="place_id">
                            <option value="">{{ __('Please choose an origin') }}</option>
                            @foreach($places as $place)
                                <option value="{{ $place->id }}" {{ old('place_id') == $place->id ? 'selected' : '' }}>
                                    {{ $place->name }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('place_id'))
                            <p class="invalid-feedback">{{ $errors->first('place_id') }}</p>
                        @endif
                    </div>
                    <div class="d-grid">
                        <button class="ms-auto btn btn-primary">{{__('Add new type')}}</button>
                    </div>
                </form>
            </div>
    </div>
</div>
</div>
         
@endsection