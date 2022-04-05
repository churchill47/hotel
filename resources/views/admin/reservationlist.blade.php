<x-app-layout>
 
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    
   @if (session('msg'))
          <div class="alert alert-success" >
          {{session()->get('msg')}} 
          
          </div>

          @endif
<div class="container-scroller">
   @include("admin.navbar")

   <div style="position: relative; top: 60px; right: -60px;">
     
     <table class="table table-success table-striped" >
       
     <tr>
              
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>guest</th>
              <th>Date</th>
              <th>time</th>
              <th>message</th>
              <th>Action</th>
            </tr>
      <!---retrive data from the database-
        send id to route (data ->id-->
        @foreach($data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->quest}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->time}}</td>
                <td>{{$data->message}}</td>
                <td><a href="{{url('/deletereservation',$data->id)}}" class="btn btn-outline-danger">Delete</a></td>
           </tr>
           @endforeach





     </table>


   </div>

   


</div>
   
   @include("admin.adminscript")
  </body>
</html>