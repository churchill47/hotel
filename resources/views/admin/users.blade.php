<x-app-layout>
 
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>

<div class="container-scroller">
   @include("admin.navbar")

   <div style="position: relative; top: 60px; right: -60px;">
     
     <table class="table table-success table-striped" >
       
       <tr>
         
         <th>Name</th>
         <th>Email</th>
         <th>Action</th>

       </tr>
      <!---retrive data from the database-
        send id to route (data ->id-->
        @foreach($data as $data)
         <tr>
         <td>{{$data->name}}</td>
         <td>{{$data->email}}</td>
         <!--if fuction is to restict from deleting the admin-->
         @if($data->usertype=="0")
         <td><a href="{{url('/deleteuser',$data->id)}}" class="btn btn-outline-danger">Delete</a></td>
         @else
         <td><a>Not Allowed</a></td>
         @endif

       </tr>

       @endforeach





     </table>


   </div>
   


</div>
   
   @include("admin.adminscript")
  </body>
</html>