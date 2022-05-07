@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('grape.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex align-items-center mb-3">
                    <h3 class="display-3">{{ __('Add new grape') }}</h3>
                    <button class="ms-auto btn btn-primary">Add new grape</button>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="type">{{ __('Type') }}</label>
                                    <textarea class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type">{{ old('type') }}</textarea>
                                    @if ($errors->has('type'))
                                        <p class="invalid-feedback">{{ $errors->first('type') }}</p>
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
                                <label for="place_id">{{ __('Place') }}</label>
                                <select class="form-control{{ $errors->has('place_id') ? ' is-invalid' : '' }}" name="place_id">
                                    <option value="">{{ __('Please choose') }}</option>
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
                        </div>
                    </div>
                </div>
        </div>
    </div>
</form>          
@endsection