@extends('pages.layouts.master')

@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Chỉnh sửa thông tin người dùng </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::open(array('url' => '/info/'.Auth::user()->id, 'method' => 'PUT')) }}
                @csrf
                <div class="form-group">
                    <label for="name"> Tên </label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" name="name" value="{{ $user->name }}" >
                    {{--@if ($errors->has('name'))--}}
                        {{--<span>--}}
                            {{--<strong class="invalid-feedback">{{ $errors->first('name') }}</strong>--}}
                        {{--</span>--}}
                    {{--@endif--}}
                </div>

                <div class="form-group">
                    <label for="email"> Email </label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" disabled >
                </div>

                <div class="form-group">
                    <label for="phone"> Điện thoại </label>
                    <input type="number" class="form-control" name="phone" value="{{ $user->phone }}" >
                </div>

                <div class="form-group">
                    <label for=""address> Địa chỉ </label>
                    <input type="text" class="form-control" name="address" value="{{ $user->address}}" >
                </div>
                <input type="submit" class="btn btn-success pull-right"/>
            {{ Form::close() }}
        </div>
    </div>
    <br>
    @stop