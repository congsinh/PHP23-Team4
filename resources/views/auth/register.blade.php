@extends('pages.layouts.master')
@section('style')
    <style>
        .invalid-feedback{color:red}
        input.is-invalid{border-color: #dc3545;box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);}
    </style>
    @stop
@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Đăng kí</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <form  method="POST" action="{{ route('register') }}" class="form-horizontal">
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label"> Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" name="name" value="{{ old('name') }}" >
                        @if ($errors->has('name'))
                        <span>
                            <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">Email</label>
                    <div class="col-sm-8" >
                        <input type="email" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span>
                            <strong class="invalid-feedback">{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="diachi" class="col-sm-4 control-label">Địa chỉ</label>
                    <div  class="col-sm-8">
                        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" name="address" value="{{ old('address') }}" >
                        @if ($errors->has('address'))
                            <span>
                            <strong class="invalid-feedback">{{ $errors->first('address') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone"  class="col-sm-4 control-label">Số điện thoại</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" name="phone" value="{{ old('phone') }}"  >
                        @if ($errors->has('phone'))
                            <span>
                            <strong class="invalid-feedback">{{ $errors->first('phone') }}</strong>
                        </span>
                        @endif
                    </div>

                </div>


                <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">{{ __('Password') }}</label>
                    <div class="col-sm-8">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-sm-4 control-label">{{ __('Confirm Password') }}</label>
                    <div class="col-sm-8">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>
                <input type="submit" class="btn btn-success pull-right">
                @csrf
            </form>

        </div>




    </div>
    <br><br><br><br>
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Register') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('register') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Register') }}--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
