@extends('layouts.app')
@section('title','Admin login')
@section('content')
    <div class="div-form">
        <h1></h1>
        <form action="{{route('admin.login')}}" method="post">
            {{csrf_field()}}
            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                <label class="control-label" for="">Email</label>
                <input value="{{old('email')}}" type="email" class="form-control" placeholder="email">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                <label class="control-label" for="">Senha</label>
                <input value="{{old('password')}}" type="password" class="form-control" placeholder="Senha">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{$errors->first('password')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">enviar</button>
            </div>
        </form>
    </div>
@endsection