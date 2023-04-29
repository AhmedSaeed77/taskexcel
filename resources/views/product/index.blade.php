<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon" />


<title>The Posts</title>




<br>
<div class="justify-content-between">
    <a class="btn btn-primary" href="{{ route('product.add') }}" role="button">Add New product</a>
    <a class="btn btn-primary" href="{{ route('product.export') }}" role="button">Export product</a>
</div>
<br>

<center class="fs-1">The Product</center>
<br><br>
</head>
<body>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
<div class="container">
<table class="table " >
    <thead class="table-dark">
      <tr >
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Counter</th>
      </tr>
    </thead>
    <tbody class = "table-info" >
    <?php $i = 0; ?>
    @foreach($products as $product)
      <tr>            
          <?php $i++; ?>
          <td>{{$i}}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->type }}</td>
          <td>{{ $product->counter }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>

</html>





