@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h2 id="demo">{{ $user->name }} is feeling </h2>
                </div>
            </div>
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

