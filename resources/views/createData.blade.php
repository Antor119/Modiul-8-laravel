<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>From Data</title>
    <style>
        h1{
            text-align: center;
            align-items: center;
            display: block;
            background: green;
        }
        h2{
            text-align: center;
            align-items: center
        }
    </style>
</head>
<body>
    <h1>Create a From Data</h1>
    <h2>Name: {{$name}}</h2>
    <h2>Email: {{$email}}</h2>
    @if ($image)
    <h2>Image: {{$image}}</h2>
    <img src="{{asset('images/'.$image)}}" alt="Image" width="600px">

    @endif


</body>
</html>
