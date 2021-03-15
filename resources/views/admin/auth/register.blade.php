@extends('layouts.app')
@section('title','Admin Register')
@section('content')
    <div class="row">
        <div class="div-form-login col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Register</div>
                <div class="panel-body"> 
                        <form action="{{route('admin.register')}}" method="post">
                            {{csrf_field()}}

                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                <label class="control-label" for="">Nome</label>
                                <input  name="name" value="{{old('name')}}" type="text" class="form-control" placeholder="Nome">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('name')}}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                                <label class="control-label" for="">Email</label>
                                <input required name="email" value="{{old('email')}}" type="email" class="form-control" placeholder="email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('email')}}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                                <label class="control-label" for="">Senha</label>
                                <input required name="password" type="password" class="form-control" placeholder="Senha">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('password')}}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group {{$errors->has('password_confirmation') ? 'has-error' : ''}}">
                                <label class="control-label" for="">Confirmar Senha</label>
                                <input required name="password_confirmation" type="password" class="form-control" placeholder="Confirmar Senha">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('password_confirmation')}}</strong>
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