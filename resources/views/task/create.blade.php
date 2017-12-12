@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Task View</div>                       

                <div class="panel-body">  

                 <form class="form-horizontal" role="form" method="POST" action="{{ url('/tasks') }}">
                     {{ csrf_field() }}

                     <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                         <label for="title" class="col-md-4 control-label">Title</label>

                         <div class="col-md-6">
                             <input type="text" class="form-control" name="title" value="{{ old('title') }}" autofocus>

                             @if ($errors->has('title'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('title') }}</strong>
                                 </span>
                             @endif
                         </div>
                     </div>                    

                     <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                         <label for="body" class="col-md-4 control-label">Body</label>

                         <div class="col-md-6">
                             <textarea class="form-control" name="body" autofocus></textarea>

                             @if ($errors->has('body'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('body') }}</strong>
                                 </span>
                             @endif
                         </div>
                     </div>                     

                     <div class="form-group">
                         <div class="col-md-6 col-md-offset-4">
                             <button type="submit" class="btn btn-primary" value="save">
                                 <i class="fa fa-btn fa-paper-plane"></i> Submit Task
                             </button>
                         </div>
                     </div>
                 </form> 
                 </div>  
            </div>           
        </div>
    </div>
</div>
@endsection
