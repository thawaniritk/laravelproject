
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Select your choosing interior and exterior</title>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
 <meta name="csrf-token" content="{{ csrf_token() }}">
<style type="text/css">
	.flex-container {
	  display: flex;
	  align-items: stretch;
	 
	}
	img{
		margin-top: 15%;
		margin-left: 20%;
	}
	.firstbtn{
		margin-left: 10%;
	}
	.fifthbtn{
		margin-left: 30.4%;
        margin-top: 15px;
	}
	.sixthbtn{
        margin-top: 15px;
	}
	.comm{
		width: 20%;
	}
	.container
	{
		margin-left: 60%;
	}
	.butn{
		margin-top: 15%;
	}
</style>
</head>
<body>
    <?php 
        $img_name = url('/').'/public/Images/' . $image->image;
        $img_id = $image->id;
        
    ?>
     <form action=""></form>
    
	    <form class="flex-container" method="POST" action="{{ URL::to('image/save') }}">
		@csrf
         <div style="flex-grow: 4">  <img src="{{ $img_name }}" height="100px" width="400px" class="img-thumbnail image">   
 	
          </div>
			<p style="  font-size:30px;  ">Interior Design</p>
	         <div class="butn btn-group-toggle " data-toggle="buttons" style="flex-grow: 4">
				  <label class="btn btn-primary comm firstbtn">
				    <input type="checkbox"   name = "tag[]" value="KITCHEN">KITCHEN
				  </label>
				  <label class="btn btn-primary comm ">
				    <input type="checkbox"  name = "tag[]" value="BEDROOM">BEDROOM
				  </label>
				  <label class="btn btn-primary comm ">
				    <input type="checkbox"   name = "tag[]" value="BATHROOM">BATHROOM
				  </label>
				  <label class="btn btn-primary comm ">
				    <input type="checkbox"   name = "tag[]" value="HALLWAY">HALLWAY
				  </label>
				  <label class="btn btn-primary comm fifthbtn ">
				    <input type="checkbox"  name = "tag[]" value="OFFICE">OFFICE 
				  </label>
				  <label class="btn btn-primary comm sixthbtn">
				    <input type="checkbox"   name = "tag[]" value="STAIRS">STAIRS
				  </label>

			      <input type="hidden" name="image" value="{{ $img_name }}">
				  <input type="checkbox" name="check" value="interior" style="opacity:0; position:absolute; left:9999px;" Checked><br>
			</div>
			    <input type="submit" style="height: 50px; width: 100px; margin-top: 30%; position: relative; right: 80% ">
        </form>
</body>
</html>
