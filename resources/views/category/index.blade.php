<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Category Listing</h1>
  <a href="{{ url('/category/create')}}">Create</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($category as $d)
    <tr>
      <td>{{ $d->id }}</td>
      <td>{{ $d->name }}</td>
      <td>
        <a href="{{ route('categoryEdit', $d->id)}}"> Edit</a>
        <a href=""> Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>