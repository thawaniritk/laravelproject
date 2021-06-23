
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Select your choosing interior and exterior</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
<style type="text/css">
	img{
		margin-top: 8%;
		margin-left: 15%;
	}
	.firstbtn{
		margin-left: 10%;
	    margin-right: 5%;

	}
	button{
		width: 10%;
		height: 50px;

	}
/*	.secondbtn{

	}*/
</style>
</head>
<body>
<!-- onclick="" -->
         <!-- {{ csrf_field() }} -->
    <?php 
            //         echo "<pre>";
            // print_r($id);
            // die();
        $id = $image->id;
        $image = url('/').'/public/Images/' . $image->image;
    ?>
         <img src="{{ $image }}" height="100px" width="400px" class="img-thumbnail image">    
         <a href="{{url('/interiorPage/' . $id)}}"><button type="button" class="btn btn-lg btn-outline-primary select firstbtn"  name="interior" value="interior">Interior</button></a>
         <a href="{{url('/exteriorPage/' . $id)}}"><button type="button" class="btn btn-lg btn-outline-primary select secondbtn"  name="exterior" value="exterior">Exterior</button></a>
         
         
		 <!-- <button type="button" class="btn btn-outline-secondary btn-lg select " name="exterior" value="exterior">Exterior</button> -->
</body>
</html>
<script type="text/javascript">
	$(".select").click(function(){
		var button = $('.select').val();
		if(button == 'interior')
		{
 			
		}
		else
		{
           
		}
	})

</script>