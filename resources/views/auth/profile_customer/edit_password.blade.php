@extends('pages.layouts.master')
@section('style')
    <style>
        .invalid-feedback{color:red}
    </style>
@stop
@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Chỉnh sửa password </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::open(array('url' => '/edit-password/'.Auth::user()->id, 'method' => 'PUT')) }}
                <div class="form-group">
                    <label for=""> Nhập password cũ </label>
                    <input type="password" class="form-control" name="password" >
                    @if ($errors->has('password'))
                        <span>
                            <strong class="invalid-feedback">{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for=""> Nhập password mới  </label>
                    <input type="password" class="form-control" name="new_password" >
                    @if ($errors->has('new_password'))
                        <span>
                            <strong class="invalid-feedback">{{ $errors->first('new_password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for=""> Nhập lại  password </label>
                    <input type="password" class="form-control" name="re_password" >
                    @if ($errors->has('re_password'))
                        <span>
                            <strong class="invalid-feedback">{{ $errors->first('re_password') }}</strong>
                        </span>
                    @endif
                </div>
                <input type="submit" class="btn btn-success pull-right" value="Thực hiện">
            {{ Form::close() }}
        </div>
    </div>
    <br>
    @stop