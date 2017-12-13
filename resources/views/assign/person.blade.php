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

.assign_person {
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
.assign_person.loading button {
  max-height: 100%;
  padding-top: 50px;
}

.assign_person input {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: #ccc;
}
.assign_person input + i.fa {
  color: #fff;
  font-size: 1em;
  position: absolute;
  margin-top: -35px;
  opacity: 0;
  left: 0;
  transition: all 0.1s ease-in;
}
.assign_person input:focus {
  outline: none;
  color: #444;
  border-color: #2196F3;
  border-left-width: 35px;
}
.assign_person input:focus + i.fa {
  opacity: 1;
  left: 30px;
  transition: all 0.25s ease-out;
}
.assign_person a {
  font-size: 0.8em;
  color: #2196F3;
  text-decoration: none;
}
.assign_person button {
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

<form class="assign_person" role="form" method="POST" action="{{ url('/pptable') }}">
{{ csrf_field() }}
<p class="title">Add Person</p>

<div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">    
        <input id="fname" type="fname" class="form-control" name="fname" value="{{ old('fname') }}" placeholder="First Name" autofocus>
          <i class="fa fa-user"></i>
        @if ($errors->has('fname'))
            <span class="help-block">
                <strong>{{ $errors->first('fname') }}</strong>
            </span>
        @endif
</div>
<div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">    
        <input id="lname" type="fname" class="form-control" name="lname" value="{{ old('fname') }}" placeholder="Last Name" autofocus>
          <i class="fa fa-user"></i>
        @if ($errors->has('lname'))
            <span class="help-block">
                <strong>{{ $errors->first('lname') }}</strong>
            </span>
        @endif
</div>

<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">    
        <input id="address" type="address" class="form-control" name="address" value="{{ old('address') }}" placeholder="Address" autofocus>
          <i class="fa fa-user"></i>
        @if ($errors->has('lname'))
            <span class="help-block">
                <strong>{{ $errors->first('lname') }}</strong>
            </span>
        @endif
</div>
<div class="form-group">    
        <label>Update Profile Image</label>
        <input type="file" name="avatar" class="btn btn-primary">
        <input type="hidden" name="_token" value="{{csrf_token()}}">     
</div>
<div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-paper-plane"></i> Add Person
        </button>
</div>
</div>

</body>
      
@endsection
