<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Category</h1>

    <form action="" method="POST">
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $data->name }}">
        <button type="submit">Update</button>
    </form>
</body>
</html>