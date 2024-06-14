<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{asset('css/bootstarp.min.css')}}>
</head>
<body>
    <h1>Hello Test</h1>
    <a href="{{route('categoryIndex')}}" class="btn btn-success">Category</a>
    <a href="{{route('articles.index')}}" class="btn btn-info">Article</a>
    <a href="{{route('products.create')}}" class="btn btn-warning">Product Create</a>

    <img src="{{ asset('img/image.png')}}" alt="" width="80%" >

    <script src="{{ asset('js/popper.min.js')}}" ></script>
    <script src="{{ asset('js/bootstrap.min.js')}}" ></script>

</body>
</html>