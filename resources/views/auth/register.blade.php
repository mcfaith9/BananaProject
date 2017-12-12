@extends('layouts.app')

@section('content')
<style>

body {
  background-image: url('img/bodyBg.jpg');
  background-size: fixed;
}

* {
  box-sizing: border-box;
}

.wrapper {
  margin-top: 200px;
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding-top: 20px;
}

.register {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 90%;
  max-width: 320px;
  background: #ffffff;
  position: fixed;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}
.button_submit {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 90%;
  max-width: 320px;
  background: #ffffff;
  position: fixed;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}
.register.loading button {
  max-height: 100%;
  padding-top: 50px;
}

.register input {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: #ccc;
}
.register input + i.fa {
  color: #fff;
  font-size: 1em;
  position: absolute;
  margin-top: -35px;
  opacity: 0;
  left: 0;
  transition: all 0.1s ease-in;
}
.register input:focus {
  outline: none;
  color: #444;
  border-color: #2196F3;
  border-left-width: 35px;
}
.register input:focus + i.fa {
  opacity: 1;
  left: 30px;
  transition: all 0.25s ease-out;
}
.register a {
  font-size: 0.8em;
  color: #2196F3;
  text-decoration: none;
}
.register button {
  width: 100%;
  height: 100%;
  padding: 10px 10px;
  background: #2196F3;
  color: #fff;
  display: block;
  border: none;
  margin-top: 20px;
  position: absolute;
  left: 0;
  bottom: 0;
  max-height: 60px;
  border: 0px solid rgba(0, 0, 0, 0.1);
  border-radius: 0 0 2px 2px;
  transform: rotateZ(0deg);
  transition: all 0.1s ease-out;
  border-bottom-width: 7px;
}
</style>

<div class="wrapper">
    
<form class="register" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}
   <p class="title">Get Banana Register</p>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">                            
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" autofocus>
            <i class="fa fa-pencil"></i>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                           
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Addres" autofocus>
            <i class="fa fa-envelope"></i>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif                           
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" autofocus>
            <i class="fa fa-key"></i>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" autofocus>
            <i class="fa fa-key"></i>
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-paper-plane"></i> Register
            </button>
    </div>
</form>
</div>
@endsection
