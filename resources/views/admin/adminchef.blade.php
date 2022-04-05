<x-app-layout>
 
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    

    @include("admin.admincss")

    
  

  </head>
  <br>
  <br>
  <body>


<div class="container-scroller">
   @include("admin.navbar")

   <div class="card-body">


      <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data" class="row g-3">

      @csrf


      <form class="row g-3">
  <div class="col-md-6">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" style="font-family: sans-serif; color: white;"  id="Write name">
  </div>
  <div class="col-md-6">
    <label for="speciality" class="form-label">speciality</label>
    <input type="text" name="speciality" class="form-control"  style="font-family: sans-serif; color: white;"  id="speciality" required>
  </div>
  <div class="col-md-6">
    <label for="image" class="form-label">Image</label>
    <input type="file" name="image" class="form-control" >
  </div>
  
      <div class="d-grid gap-2">
        <button type="submit" value="saved" class="btn btn-outline-primary">Save</button>
      </div>

    </form>


    <br>
    <br>


        <h2><center><u><b>Chef Details</b></u></center></h2>
        <div class="card-body">

        @if (session('msg'))
          <div class="alert alert-success" >
          {{session()->get('msg')}} 
          
          </div>

          @endif

        <div style="position: relative; top: auto; left:auto;">

     
     <table class="table table-success table-striped" >
       
       <tr>
        <th>Name</th>
        <th>speciality</th>
        <th>Image</th>
        <th> Edit</th>
        <th>Action</th>

       </tr>
      <!---retrive data from the database-
        send id to route (data ->id-->
        @foreach($data as $data)
         <tr>
         <td>{{$data->name}}</td> 
         <td>{{$data->speciality}}</td>
         <td><img src="/chefimage/{{ $data->image }}"></td>
         
        
         
         <td><a href="{{url('/editchef',$data->id)}}" class="btn btn-outline-success">Edit</a></td>
        <td><a href="{{url('/deletechef',$data->id)}}" class="btn btn-outline-danger">Delete</a></td>
          </tr>

       @endforeach





     </table>


   </div>
   





    <br>
    <br>

   
   @include("admin.adminscript")
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

  </body>

</html>