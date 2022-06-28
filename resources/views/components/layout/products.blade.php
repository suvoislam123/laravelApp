<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$titel ?? 'Products Dashboard'}}</title>
    <link rel="stylesheet" href="{{asset('css/products.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    {{$header}}
    {{$contents}}
    {{$footer}}
    <script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>
