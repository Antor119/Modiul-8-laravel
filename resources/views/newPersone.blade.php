<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Persone</title>
</head>
<body>

    <h1>Created a from</h1>
    <h1>Name: {{$name}}</h1>
    <h1>email: {{$email}}</h1>
    @if ($image)
    <h1>Image Name: {{$image}}</h1>
    <img src="{{asset('images/'.$image)}}" alt="image" width="600px">


    @endif


</body>
</html>
