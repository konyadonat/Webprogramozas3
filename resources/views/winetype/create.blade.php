@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('winetype.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex align-items-center mb-3">
                <h3 class="display-3">{{ __('Add new wine type') }}</h3>
                <button class="ms-auto btn btn-primary">{{__('Add new wine type')}}</button>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="winetype">{{ __('Wine type') }}</label>
                                <input type="text" class="form-control {{ $errors->has('winetype') ? ' is-invalid' : '' }}" id="winetype" placeholder="Example wine type" name="winetype" value="{{old('winetype')}}">
                                @if ($errors->has('winetype'))
                                    <p class="invalid-feedback">{{ $errors->first('winetype') }}</p>
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