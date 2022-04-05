<x-app-layout>
 
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<base href="/public">
@include("admin.admincss")
</head>

 <body>


		<div class="alert alert-success" role="alert">
		
    	<h3 class="text-success"><center><b>Update Details</b> </center></h3>
		
	  </div>


    <div class="container-scroller">

      <div class="card-body ">

    

        <form action="{{url('/editfood',$food->id)}}"method="post" enctype="multipart/form-data" class="row g-3">
    @csrf
    @method('put')

            <div class="col-md-6">
                <label for="Title" class="form-label">Title</label>
                <input type="text"  name="title" class="form-control" value="{{ $food->title}}" id="write a title">
              </div>
              <div class="col-md-6">
        <label for="price" class="form-label">price</label>
        <input type="num" name="price" class="form-control"  value="{{ $food->price}}" id="price" required>
      </div>

          <div class="col-mb-6">
            <label for="image">image</label>
            <input type="file" name="image" class="custom-file-input" value="{{ $food->image}}" >
           
          </div>
          <div class="col-md-6">
            <label for="">Description:</label>
            <input type="text"  name="description" class="form-control" value="{{ $food->description}}" placeholder="Description">
          </div>
          <div class="col-12">
            <button type="submit" value="saved" class="btn btn-outline-primary">update</button>
          </div>





        </form>


      
      </div>
    </div>


</div>
@include("admin.adminscript")
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

  </body>

</html>