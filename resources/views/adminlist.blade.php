@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-3">
                <ul class="nav flex-column">
                        
                        <li class="nav-item">
                          <button class="nav-link btn btn-primary btn-lg mb-5" onclick="$('#userstab').css('display','none');$('#chefstab').css('display','block');">Chefs Accounts</button>
                        </li>
                        <li class="nav-item">
                          <button class="nav-link btn btn-primary btn-lg" onclick="$('#userstab').css('display','block');$('#chefstab').css('display','none');">Users Accounts</button>
                        </li>
                      
                      </ul>
        </div>
        <div class="col-md-9">
            
<table class="table table-hover" id="chefstab" style="margin: 20px;display: none;">
    <thead>
        <tr>
            
        <th scope="col">ChefName</th>
        <th scope="col">Email Id</th>
        <th scope="col">Orders_Year</th>
        <th scope="col">Orders_1_Half</th>
        <th scope="col">Orders_2_Half</th>
        <th scope="col">Bank Account</th>

      </tr>
    </thead>
    <tbody>

        @foreach($cheforders as $chef)

<tr>
    <td> {{ $chef['name']}}  </td>
    <td> {{ $chef['email']}}  </td>
    <td> ${{ $chef['tot']}}  </td>
    <td> ${{ $chef['tot1']}}  </td>
    <td> ${{ $chef['tot2']}}  </td>
    <td> {{ $chef['bank']}}  </td>    
    
</tr>

        @endforeach
     
    </tbody>

</table>


        
<table class="table table-hover" id="userstab" style="margin: 20px;display: none;">
        <thead>
            <tr>
                
            <th scope="col">Username</th>
            <th scope="col">Email Id</th>
            <th scope="col">Orders_Year</th>
            {{-- <th scope="col">Orders_1_Half</th>
            <th scope="col">Orders_2_Half</th> --}}
           
          </tr>
        </thead>
        <tbody>
    
            @foreach($userorders as $user)
    
    <tr>
        <td> {{ $user->name}}  </td>
        <td> {{ $user->email}}  </td>
        <td> ${{ $user->totamnt}}  </td>
        {{-- <td> ${{ $user->totamnt}}  </td>
        <td> ${{ $user->totamnt}}  </td> --}}
       
        
    </tr>
    
            @endforeach
         
        </tbody>
    
    </table>


</div>

</div>
</div>



@endsection