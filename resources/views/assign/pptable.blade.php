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
<h1>Person Phone List</h1>  
<div  class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Lastname</th>
          <th>Address</th>
          <th>Phone Brand</th>
          <th>Phone Model</th>
          <th>Options</th>
        </tr>
      </thead>
</table> 
</div>
<div  class="tbl-content">
  <table cellpadding="0" cellspacing="0" border="0">
    <tbody>
      @forelse($people as $person)
        <tr>    
          <td><img src="/uploads/avatars/{{ $person->avatar }}" style=" height: 32px;  border-radius: 50%;"/> </td>

          <td>{{ $person->fname }}</td>
          <td>{{ $person->lname }}</td>
          <td>{{ $person->address }}</td>
          <td>{{ $person->phonebrand }}</td>
          <td>{{ $person->phonemodel }}</td>  

          <td> 
           <a href="{{ url('/edit/'.$person->id.'/edit') }}"" style="color: black""> <i class="fa fa-btn fa-pencil"></i>Edit Task</a>  
            <form action="" method="POST" id="delete">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <a href="{{ url('/delete/'.$person->id) }}" onclick="document.getElementById('delete').submit();" style="color: black"> <i class="fa fa-btn fa-trash"></i>Delete Task</a>
            </form>
          </td>

        </tr> 
      @empty 
        <tr>
          <td colspan="3">No Data</td>
        </tr>         
      @endforelse

                 
    </tbody>
  </table>
</div>
<a href="{{ url('/person') }}">
 <button type="submit" class="btn btn-primary "> 
<i class="fa fa-btn fa-plus"></i> Add People </button></a>

<a href="{{ url('/phone') }}">
 <button type="submit" class="btn btn-primary "> 
<i class="fa fa-btn fa-plus"></i> Add Phone </button></a>
</section>
@endsection
