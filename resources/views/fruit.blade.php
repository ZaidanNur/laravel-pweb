<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fruit</title>
</head>
<body>
    @foreach ($fruits as $data )
        <p>Id : {{ $data->id }}</p>
        <p>Name : {{ $data->name }}</p>
        <p>Price : {{ $data->price }}</p>
        <p>Description : {{ $data->description }}</p>
    @endforeach
</body>
</html>
