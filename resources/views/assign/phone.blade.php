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

.assign_phone {
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
.assign_phone.loading button {
  max-height: 100%;
  padding-top: 50px;
}

.assign_phone input {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: #ccc;
}
.assign_phone input + i.fa {
  color: #fff;
  font-size: 1em;
  position: absolute;
  margin-top: -35px;
  opacity: 0;
  left: 0;
  transition: all 0.1s ease-in;
}
.assign_phone input:focus {
  outline: none;
  color: #444;
  border-color: #2196F3;
  border-left-width: 35px;
}
.assign_phone input:focus + i.fa {
  opacity: 1;
  left: 30px;
  transition: all 0.25s ease-out;
}
.assign_phone a {
  font-size: 0.8em;
  color: #2196F3;
  text-decoration: none;
}
.assign_phone button {
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

<body>
    
<div class="wrapper">

<form class="assign_phone" role="form" method="POST" action="{{ url('/phone') }}">
{{ csrf_field() }}
<p class="title">Add Phone</p>

<div class="form-group{{ $errors->has('phonemodel') ? ' has-error' : '' }}">    
        <input id="phonemodel" type="phonemodel" class="form-control" name="phonemodel" value="{{ old('phonemodel') }}" placeholder="Phone Model" autofocus>
          <i class="fa fa-user"></i>
        @if ($errors->has('phonemodel'))
            <span class="help-block">
                <strong>{{ $errors->first('phonemodel') }}</strong>
            </span>
        @endif
</div>

<div class="form-group{{ $errors->has('phonebrand') ? ' has-error' : '' }}">    
        <input id="phonebrand" type="phonebrand" class="form-control" name="phonebrand" value="{{ old('phonebrand') }}" placeholder="Phone Brand" autofocus>
          <i class="fa fa-user"></i>
        @if ($errors->has('phonebrand'))
            <span class="help-block">
                <strong>{{ $errors->first('phonebrand') }}</strong>
            </span>
        @endif
</div>

<div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">    
        <input id="phonenumber" type="phonenumber" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}" placeholder="Phone Number" autofocus>
          <i class="fa fa-user"></i>
        @if ($errors->has('phonenumber'))
            <span class="help-block">
                <strong>{{ $errors->first('phonenumber') }}</strong>
            </span>
        @endif
</div>
<div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-paper-plane"></i> Add Phone
        </button>
</div>

</div>

</body>
      
@endsection
