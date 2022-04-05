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

  @if (session('status'))
  <div class="alert alert-success" >
  {{session()->get('status')}} 
    

  </div>
  
  @endif

    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data" class="row g-3">

      @csrf


      <form class="row g-3">
  <div class="col-md-6">
    <label for="Title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" style="font-family: sans-serif; color: white;"  id="Write a title">
  </div>
  <div class="col-md-6">
    <label for="price" class="form-label">price</label>
    <input type="num" name="price" class="form-control"  style="font-family: sans-serif; color: white;"  id="price" required>
  </div>
  <div class="col-md-6">
    <label for="image" class="form-label">Image</label>
    <input type="file" name="image" class="form-control" >
  </div>
  <div class="col-md-6">
    <label for="Description" class="form-label">Description</label>
    <input type="text" name="description" class="form-control"  style="font-family: sans-serif; color: white;"  id="Description">
  </div>

      <div class="d-grid gap-2">
        <button type="submit" value="saved" class="btn btn-outline-primary">Save</button>
      </div>

    </form>


    <br>
    <br>


        <h2><center><u><b>Food Details</b></u></center></h2>
        <div class="card-body">

          @if (session('msg'))
          <div class="alert alert-success" >
          {{session()->get('msg')}} 
          
          </div>

          @endif
        <div style="position: relative; top: auto; left:auto;">

     
     <table class="table table-success table-striped" >
       
       <tr>
         
         <th>Title</th>
         <th>Price</th>
         <th>Image</th>
         <th>Description</th>
         <th>Edit</th>
         <th>Action</th>

       </tr>
      <!---retrive data from the database-
        send id to route (data ->id-->
        @foreach($data as $data)
         <tr>
         <td>{{$data->title}}</td> 
         <td>{{$data->price}}</td>
         <td><img src="{{ asset('uploads/food/' . $data->image) }}"></td>
         <td>{{$data->description}}</td>
         <!--if fuction is to restict from deleting the admin-->
         <td><a href="{{url('/editfood',$data->id)}}" class="btn btn-outline-success">Edit</a></td>
         
         <td><a href="{{url('/deletefood',$data->id)}}" class="btn btn-outline-danger">Delete</a></td>
        
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