@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('wine.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex align-items-center mb-3">
                    <h3 class="display-3">{{ __('Add new wine') }}</h3>
                    <button class="ms-auto btn btn-primary">{{__('Add new wine')}}</button>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name">{{ __('Name') }}</label>
                                <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" 
                                    placeholder="Example name" name="name" value="{{old('name')}}">
                                @if ($errors->has('name'))
                                    <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="grape_id">{{ __('Grape type') }}</label>
                                <select class="form-control{{ $errors->has('grape_id') ? ' is-invalid' : '' }}" name="grape_id">
                                    <option value="">{{ __('Please choose') }}</option>
                                    @foreach($grapes as $grape)
                                        <option value="{{ $grape->id }}" {{ old('grape_id') == $grape->id ? 'selected' : '' }}>
                                            {{ $grape->type.' from '.$grape->place->name}}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('grape_id'))
                                    <p class="invalid-feedback">{{ $errors->first('grape_id') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="winetypes_id">{{ __('Wine type') }}</label>
                                <select class="form-control{{ $errors->has('winetypes_id') ? ' is-invalid' : '' }}" name="winetypes_id">
                                    <option value="">{{ __('Please choose') }}</option>
                                    @foreach($winetypes as $winetype)
                                        <option value="{{ $winetype->id }}" {{ old('winetypes_id') == $winetype->id ? 'selected' : '' }}>
                                            {{ $winetype->type}}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('winetypes_id'))
                                    <p class="invalid-feedback">{{ $errors->first('winetypes_id') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="vintage">{{ __('Vintage') }}</label>
                                <input type="text" class="form-control {{ $errors->has('vintage') ? ' is-invalid' : '' }}" id="vintage" 
                                    placeholder="Example vintage" name="vintage" value="{{old('vintage')}}">
                                @if ($errors->has('vintage'))
                                    <p class="invalid-feedback">{{ $errors->first('vintage') }}</p>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</form>          
@endsection