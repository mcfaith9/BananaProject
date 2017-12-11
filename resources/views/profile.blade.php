@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <img src="/uploads/avatars/{{ $user->avatar }}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;"> 

            <h2>{{ $user->name }} is feeling {{ $feel }}</h2>
            <form enctype="multipart/from-data" action="/profile" method="POST">
            <input type="file" name="avatar"> <i class="fa fa-btn fa-file-image-o"></i>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="submit" class="pull-right btn btn-sm btn-primary">
        </div>
    </div>
</div>
@endsection
