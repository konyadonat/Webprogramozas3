@extends('layouts.main')

@section('content')
    <div class=row>
        <div class="col md-8 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="display-3 mb-3">{{__('Sign in')}}</h3>
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email">{{ __('Email address') }}</label>
                            <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" 
                                placeholder="example@example.com" name="email" value="{{old('email')}}">
                            @if ($errors->has('email'))
                                <p class="invalid-feedback">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="password"> {{__('Password')}}</label>
                            <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password"
                                 name="password" value="{{old('password')}}">
                                 @if ($errors->has('password'))
                                <p class="invalid-feedback">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember">
                            <label class="form-check-label" for="remember">
                              {{ __('Remember me') }}
                            </label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg"> {{__('Sign in')}}</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection