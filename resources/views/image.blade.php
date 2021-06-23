<?php

?>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Select your choosing interior and exterior</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
 <div class="container">    
  <br />
  <h3 align="center">Select your choosing interior and exterior </h3>
    <br />
    @if($errors->any())
    <div class="alert alert-danger">
           <ul>
           @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
           @endforeach
           </ul>
        </div>
    @endif
    <!-- <table class="table table-image"> -->
    <div id="result">
         <!-- {{ csrf_field() }} -->
         
    </div>
    <div class="row" style = "margin: 110px; padding-left: 5px; padding-right: 5px; ">
      <div class=".col-sm-4">
         {{ csrf_field() }}
         <!-- @csrf -->
    @foreach($ImageData as $value)
    <?php 
        $image = url('/').'/public/Images/' . $value->image;
        $img_id = $value->id;
    ?>
        <a href='#'><img src="{{ $image }}"  onclick="imgfunc('{{$img_id}}')" height="100px" width="300px" class="img-thumbnail image"></a> 
    @endforeach
      </div>
    </div> 

        

    </div>
 </body>
</html>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>


<script type="text/javascript">

$(".image").click(function(){
    // $(this).parent();
    scroll(0, $('#result').position().top)


});

function imgfunc(id) 
{

            alert(id);
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
    });
    $.ajax({
    
        // url : '{{ URL::to("/displayImage") }}' ,
        url : "{{url('displayImage')}} ",
        type: 'post',
        dataType: 'html',
        data : { id: id,  _token: '{{csrf_token()}}' },
        success:function(data)
        {

            $('#result').html(data);
            // location.reload();
        }

    });   

}

</script>
