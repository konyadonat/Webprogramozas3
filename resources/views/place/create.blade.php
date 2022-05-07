@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('place.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex align-items-center mb-3">
                <h3 class="display-3">{{ __('Add new place') }}</h3>
                <button class="ms-auto btn btn-primary">Add new place</button>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name">{{ __('Name') }}</label>
                                <textarea class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name">{{ old('name') }}</textarea>
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