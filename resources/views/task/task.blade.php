@extends('layouts.app')

@section('content')
<style>
  
  table {
      border-collapse: collapse;
      width: 100%;
      height: 100%;
  }

  th, td {
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even){background-color: #f2f2f2}

  th {
      background-color: #4CAF50;
      color: white;
  }

</style>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">My Task</div>                       
              
                <div class="panel-body">  
                <a href="{{ url('/create') }}">
                <button type="submit" class="btn btn-primary "> 
                <i class="fa fa-btn fa-plus"></i> Add Task </button></a>    
                 
                <table class="table">
                  <tr>
                      <th>Title</th>
                      <th>Disc</th>
                      <th>Action</th>
                  </tr>

                  @foreach($tasks as $task)

                  <tr>       

                   <td class="header">{{ $task->title}}</td>
                   <td>{{ $task->body}}</td>
                   
                   <td>Edit | Delete</td>

                  </tr>
                   
                  @endforeach
                </table>  

                </div>                   
            </div>  
    </div>
</div>

<script>
  
  $('.header').click(function(){
      $(this).nextUntil('tr.header').slideToggle(1000);
  });
  
</script>
@endsection
