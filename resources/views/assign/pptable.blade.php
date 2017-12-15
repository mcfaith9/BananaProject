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
        </tr>
      </thead>
</table> 
</div>
<div  class="tbl-content">
  <table cellpadding="0" cellspacing="0" border="0">
    <tbody>
      @foreach($phones as $phone)
        <tr>    
          <td><img src="/uploads/avatars/{{ $phone->person ? $phone->person->avatar : 'default.jpg' }}" style=" height: 32px;  border-radius: 50%;"/> </td>

          <td>{{ $phone->person ? $phone->person->fname : 'No Owner' }}</td>
          <td>{{ $phone->person ? $phone->person->lname : 'No Owner' }}</td>
          <td>{{ $phone->person ? $phone->person->address : 'No Owner' }}</td>
          <td>{{ $phone->phonebrand }}</td>
          <td>{{ $phone->phonemodel }}</td>   
        </tr>        
      @endforeach
                 
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



<div>

<form class="assign_person" role="form" method="POST" action="{{ url('/assign') }}">
{{ csrf_field() }}

<label>Phone Model</label>
 <select id="mySelect" onchange="myFunction1()">
 @foreach($phones as $phone)   
     <option value="{{$phone->id}}">{{ $phone->phonemodel }}
     </option>
 @endforeach
 </select> 

 <label>Assign Phone to Person</label>
 <select id="mySelect2" onchange="myFunction2()">
 @foreach($people as $person)   
     <option value="{{$person->id}}" name="" id="">{{ $person->fname }}
     </option>
 @endforeach
 </select> 

   <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-paper-plane"></i> Assign
  </button>

  <input type="text" name="phone_id" id="nameplate" value="1">
  <input type="text" name="person_id" id="nameplate1" value="1">

  <input type="text" name="id" id="person_id" value="1">


  </form>

</div>




<script type="text/javascript">
function myFunction1() {
   var x = document.getElementById("mySelect").value;
   document.getElementById("nameplate").value = x;
   document.getElementById("nameplate1").value = x;
}

function myFunction2() {
   var x = document.getElementById("mySelect2").value;
   document.getElementById("person_id").value = x;
}
</script>

@endsection
