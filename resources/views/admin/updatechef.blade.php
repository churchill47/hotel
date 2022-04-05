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

    

        <form action="{{url('/updatechef',$foodchef->id)}}"method="post" enctype="multipart/form-data" class="row g-3">
    @csrf
    @method('put')

            <div class="col-md-6">
                <label for="name" class="form-label">name</label>
                <input type="text"  name="name" class="form-control" value="{{ $foodchef->name}}" id="write name">
              </div>
              <div class="col-md-6">
        <label for="speciality" class="form-label">speciality</label>
        <input type="text" name="speciality" class="form-control"  value="{{ $foodchef->speciality}}" id="speciality" required>
      </div>

          <div class="col-mb-6">
            <label for="image">image</label>
            <input type="file" name="image" class="custom-file-input" value="{{ $foodchef->image}}" >
           
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