<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $value }}</h1>

    @if (session('status'))
       <div style="color: red;"> {{ session('status')}} </div>        
    @endif
</body>
</html>