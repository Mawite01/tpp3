<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Product Listing</h1>
  <a href="{{ route('products.create') }}">Create</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
      <td>{{ $product->id }}</td>
      <td>{{ $product->name }}</td>
     
      <td><img src="{{asset('image').'/'.$product->image}}" alt="" width="200px"></td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>