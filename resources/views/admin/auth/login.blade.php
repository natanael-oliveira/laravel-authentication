@extends('layouts.app')
@section('title','Admin login')
@section('content')
    <div class="row">
        <div class="div-form-login col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Login</div>
                <div class="panel-body"> 
                        <div class="form-group {{$errors->has('login') ? 'has-error' : ''}}">
                            @if ($errors->has('login'))
                            <span class="help-block text-center">
                                <strong>{{$errors->first('login')}}</strong>
                            </span>
                        @endif
                        </div>
                        <form action="{{route('admin.login')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group {{$errors->has('login') ? 'has-error' : ''}} {{$errors->has('email') ? 'has-error' : ''}}">
                                <label class="control-label" for="">Email</label>
                                <input required name="email" value="{{old('email')}}" type="email" class="form-control" placeholder="email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('email')}}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('login') ? 'has-error' : ''}} {{$errors->has('password') ? 'has-error' : ''}}">
                                <label class="control-label" for="">Senha</label>
                                <input required name="password" value="{{old('password')}}" type="password" class="form-control" placeholder="Senha">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('password')}}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group div-btn-form-login">
                                <button type="submit" class="btn btn-primary">enviar</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection