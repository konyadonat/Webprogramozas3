@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-body"> 
        <form action="{{ route('wine.edit', $wine) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex align-items-center mb-3">
                <h3 class="display-3">{{ __('Updating '). $wine->name}}</h3>
                <button class="ms-auto btn btn-primary">{{__('Update wine')}}</button>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" value="{{$wine->name}}" class="form-control 
                                {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="Example name" 
                                name="name" value="{{old('name')}}">
                                @if ($errors->has('name'))
                                    <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            {{-- Valamiert mindig visszaugrik az első helyre --}}
                            <div class="mb-3">
                                <label for="grape_id">{{ __('Grape type') }}</label>
                                <select class="form-control{{ $errors->has('grape_id') ? ' is-invalid' : '' }}" name="grape_id">
                                    @foreach($grapes as $grape)
                                        <option selected="{{old($grape->id)}}" value="{{ $grape->id }}">
                                            {{ $grape->type }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('grape_id'))
                                    <p class="invalid-feedback">{{ $errors->first('grape_id') }}</p>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="winetypes_id">{{ __('Wine type') }}</label>
                                <select class="form-control{{ $errors->has('winetypes_id') ? ' is-invalid' : '' }}" name="winetypes_id">
                                    @foreach($winetypes as $winetype)
                                        <option selected="{{old($winetype->id)}}" value="{{ $winetype->id }}">
                                            {{ $winetype->type }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('winetypes_id'))
                                    <p class="invalid-feedback">{{ $errors->first('winetypes_id') }}</p>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="vintage">{{ __('Vintage') }}</label>
                                <input type="text" value="{{$wine->vintage}}" class="form-control 
                                {{ $errors->has('vintage') ? ' is-invalid' : '' }}" id="vintage" placeholder="Example vintage" 
                                name="vintage" value="{{old('vintage')}}">
                                @if ($errors->has('vintage'))
                                    <p class="invalid-feedback">{{ $errors->first('vintage') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form> 
        <form action="{{ route('wine.destroy', $wine) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex align-items-center mb-3">
                <h3 class="display-3">{{ __('Delete '). $wine->name}}</h3>
                <button class="ms-auto btn btn-primary">{{__('Delete wine')}}</button>
            </div>
        </form>
    </div>
</div>
         
@endsection