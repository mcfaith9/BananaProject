@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <img src="/uploads/avatars/{{ $user->avatar }}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;"> 

            <h2 id="demo">{{ $user->name }} is feeling </h2>
            
            <form enctype="multipart/form-data" action="/profile" method="POST" />
            <label>Update Profile Image</label>
            <input type="file" name="avatar" class="btn btn-primary">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="submit" class="pull-right btn btn-sm btn-primary">      
            </form>
        </div>
    </div>
</div>

<script>
var i = 0;
var txt = '{{$feel}}';
var speed = 259;
typeWriter();

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>

@endsection
