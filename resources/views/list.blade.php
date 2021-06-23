<!DOCTYPE html>
<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     
</head>
    <body>
        <table class="table table-bordered">
            <thead>
            <tr>
              <th scope="col">Index</th>
              <th scope="col">Image</th>
              <th scope="col">Type</th>
              <th scope="col">Tag</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 0; ?>
            @foreach ($productData as $product)
            <?php
                $i++;
            ?>
            <tr>
              <th scope="row">{{$i}}</th>
              <td>{{$product->image}}</td>
              <td>{{$product->type}}</td>
              <td>{{$product->tag}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>            
    </body>
</html>