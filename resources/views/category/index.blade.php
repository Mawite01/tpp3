<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $d)
    <tr>
      <td>{{$d[0]}}</td>
      <td>{{$d[1]}}</td>
      <td>{{$d[2]}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>