@extends('layouts.app')

@section('content')
<style>


 h1{
   font-size: 30px;
   color: #0e1c25;
   text-transform: uppercase;
   font-weight: 300;
   text-align: center;
   margin-bottom: 15px;
 }
 table{
   width:100%;
   table-layout: fixed;
 }
 .tbl-header{
   background-color: rgba(255,255,255,0.60);
  }
 .tbl-content{
   height:300px;
   overflow-x:auto;
   margin-top: 0px;
   border: 1px solid rgba(255,255,255,0.60);
 }
 th{
   padding: 20px 15px;
   text-align: left;
   font-weight: 500;
   font-size: 12px;
   color: #0e1c25;
   text-transform: uppercase;

tr:nth-child(even){background-color: #f2f2f2}
 }
 td{
   padding: 15px;
   text-align: left;
   vertical-align:middle;
   font-weight: 300;
   font-size: 12px;
   color: #0e1c25;
   border-bottom: solid 1px rgba(255,255,255,0.1);
 }

 @import url(http://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

 body{
  background-image: url('img/bg1.jpg');  
  font-family: 'Roboto', sans-serif;
}
 section{
   margin: 50px;
 }

 /* for custom scrollbar for webkit browser*/

 ::-webkit-scrollbar {
     width: 6px;
 } 
 ::-webkit-scrollbar-track {
     -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
 } 
 ::-webkit-scrollbar-thumb {
     -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
 }

</style>
<section>
<h1>My Task</h1>  
<div  class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
</table> 
</div>
<div  class="tbl-content">
  <table cellpadding="0" cellspacing="0" border="0">
    <tbody>

      @foreach($tasks as $task)

        <tr>       

          <td>{{ $task->title }}</td>
          <td>{{ $task->body }}</td>

          <td> 
           <a href="{{ url('/task/'.$task->id.'/edit') }}" style="color: black""> <i class="fa fa-btn fa-pencil"></i>Edit Task</a>    
          </td>
          <td>
            <a href="{{ url('/task/'.$task->id) }}" onclick="document.getElementById('my_form').submit();" style="color: black"> <i class="fa fa-btn fa-trash"></i>Delete Task</a>
          </td>
        </tr>           
      @endforeach

                 
    </tbody>
  </table>
</div>
<a href="{{ url('/create') }}">
 <button type="submit" class="btn btn-primary "> 
<i class="fa fa-btn fa-plus"></i> Add Task </button></a>
</section>
@endsection
