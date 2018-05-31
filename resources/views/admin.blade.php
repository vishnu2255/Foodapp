@extends('layouts.app')

@section('content')



<div class="container">


    <button class="btn btn-warning btn-lg getdata">
    Chefs 
    </button>

    
    <button class="btn btn-warning btn-lg getdata">
    Users 
    </button>

        
    <button class="btn btn-warning btn-lg getdata">
    Sales 
    </button>
    

</div>


<div class="container">



<table class="table table-striped" style="margin: 20px; display: none;" id="chefs">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Bank Name</th>
        <th scope="col">Bank Institution</th>
        <th scope="col">Bank Branch</th>
        <th scope="col">Account Number</th>
        {{-- <th scope="col">Total Sales</th> --}}
      </tr>
    </thead>
    <tbody>
  
      @foreach($chefs as $chef)
      <tr>       
      <th scope="row">{{$chef->id}}</th>
        <td>
           {{$chef->name}}
        </td>

        <td>
            {{$chef->email}}
         </td>

         <td>
            {{$chef->phone_number}}
         </td>
         <td>
            {{$chef->home_address}}
         </td>

         <td>
            {{$chef->bank_name}}
         </td>

         <td>
            {{$chef->bank_institution}}
         </td>

         <td>
            {{$chef->bank_branch}}
         </td>

         <td>
            {{$chef->bank_account_number}}
         </td>

         {{-- <td>
            {{$chef->totalsales}}
         </td> --}}

         </tr>
      
      
      @endforeach
      
     
    </tbody>
  </table>



  <table class="table table-striped" style="margin: 20px; display: none;" id="users">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        {{-- <th scope="col">Total Sales</th> --}}

      </tr>
    </thead>
    <tbody>
  
      @foreach($users as $user)
      <tr>       
      <th scope="row">{{$user->id}}</th>
        <td>
           {{$user->name}}
        </td>

        <td>
            {{$user->email}}
         </td>

         <td>
            {{$user->phone}}
         </td>
         <td>
            {{$user->home}}
         </td>

         

         {{-- <td>
            {{$user->totalsales}}
         </td>       --}}

         </tr>
      
      
      @endforeach
      
     
    </tbody>
  </table>



    
</div>

@endsection