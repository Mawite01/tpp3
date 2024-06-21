<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{asset('css/bootstarp.min.css')}}>
</head>
<body>
    <h1>Create Product</h1>
    <form action="{{ route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Name</label>
        <input type="text" name="user_name" value="{{ old('name')}}"> <br> <br>
        @error('name')
        <span class="text-danger">*{{ $message }}</span> <br>
        @enderror
        <label for="">Price</label>
        <input type="text" name="price" value="{{ old('price') }}"> <br> <br>
        @error('price')
        <span class="text-danger">*{{ $message }}</span> <br>
        @enderror
        <label for="">Image</label>
        <input type="file" name="image"> <br> <br>

        <button type="submit">Create</button>
    </form>
</body>
</html>