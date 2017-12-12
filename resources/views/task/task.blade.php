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
         
        <table class="table">
          <tr>
              <th>Title</th>
              <th>Description</th>
              <th>Action</th>
          </tr>

          @foreach($tasks as $task)

          <tr>       

           <td class="header">{{ $task->title }}</td>
           <td>{{ $task->body }}</td>

           <td> 
           <ul>
             <li><a href="{{ url('/task/'.$task->id.'/edit') }}"> <i class="fa fa-btn fa-pencil"></i>Edit Task</a></li>
             <form action="{{ url('/task/'.$task->id) }}" method="POST" id="my_form">
                 {{ method_field('DELETE') }}
                 {{ csrf_field() }}
                 <li><a href="javascript:{}" onclick="document.getElementById('my_form').submit();"> <i class="fa fa-btn fa-trash"></i>Delete Task</a></li>
             </form>
           </ul>
           </td>
          </tr>
           
          @endforeach
        </table>  
        <a href="{{ url('/create') }}">
        <button type="submit" class="btn btn-primary "> 
        <i class="fa fa-btn fa-plus"></i> Add Task </button></a>                
        </div>                   
    </div>  
</div>
</div>

@endsection
