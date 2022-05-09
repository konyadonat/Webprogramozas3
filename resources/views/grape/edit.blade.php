@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-body"> 
        <form action="{{ route('grape.edit', $grape) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex align-items-center mb-3">
                <h3 class="display-3">{{ __('Updating '). $grape->type}}</h3>
                <button class="ms-auto btn btn-primary">{{__('Update grape')}}</button>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="type">{{ __('Type') }}</label>
                                <input type="text" value="{{$grape->type}}" class="form-control {{ $errors->has('type') ? ' is-invalid' : '' }}" id="type" placeholder="Example type" 
                                name="type" value="{{old('type')}}">
                                @if ($errors->has('type'))
                                    <p class="invalid-feedback">{{ $errors->first('type') }}</p>
                                @endif
                            </div>
                            {{-- Valamiert mindig visszaugrik az első helyre --}}
                            <div class="mb-3">
                                <label for="place_id">{{ __('Origin') }}</label>
                                <select class="form-control{{ $errors->has('place_id') ? ' is-invalid' : '' }}" name="place_id">
                                    @foreach($places as $place)
                                        <option selected="{{old($place->id)}}" value="{{ $place->id }}">
                                            {{ $place->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('place_id'))
                                    <p class="invalid-feedback">{{ $errors->first('place_id') }}</p>
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