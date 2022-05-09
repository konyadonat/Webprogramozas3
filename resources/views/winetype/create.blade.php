@extends('layouts.main')

@section('content')
<div class=row>
    <div class="col md-8 col-lg-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="display-3 mb-3">{{__('Add winetypes')}}</h3>
                <form action="{{route('winetype.create')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control {{ $errors->has('type') ? ' is-invalid' : '' }}"
                         id="type" placeholder="Name of the winetype" name="type" value="{{old('type')}}">
                        @if ($errors->has('type'))
                            <p class="invalid-feedback">{{ $errors->first('type') }}</p>
                        @endif
                    </div>
                    <div class="d-grid">
                        <button class="ms-auto btn btn-primary">{{__('Add new winetype')}}</button>
                    </div>
                </form>
            </div>
    </div>
</div>
</div>
         
@endsection