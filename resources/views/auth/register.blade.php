@extends('layouts.main')

@section('content')
    <div class=row>
        <div class="col md-8 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="display-3">{{__('Sign up')}}</h3>
                    <form action="{{route('register')}}" method="POST">
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
                            <label for="name"> {{__('Full name')}}</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name"
                                placeholder="Full Name" name="name" value="{{old('name')}}">
                                @if ($errors->has('name'))
                                <p class="invalid-feedback">{{ $errors->first('name') }}</p>
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

                        <div class="mb-3">
                            <label for="password_confirmation"> {{__('Password confirmation')}}</label>
                            <input type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" id="password_confirmation"
                                 name="password_confirmation" value="{{old('password_confirmation')}}">
                                 @if ($errors->has('password_confirmation'))
                                <p class="invalid-feedback">{{ $errors->first('password_confirmation') }}</p>
                            @endif
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input{{ $errors->has('terms') ? ' is-invalid' : ''}}" type="checkbox" value="1" id="terms" name="terms">
                            <label class="form-check-label" for="terms">
                              {{ __('Agree to terms and conditions') }}
                            </label>
                            <div class="invalid-feedback">
                                {{ __('You must agree before submitting.') }}
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg"> {{__('Register')}}</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection