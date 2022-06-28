<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- It is marker of name slot --}}
    {{-- here ?? is null coalescing operator (??) --}}
    <title>{{$title_name ?? 'Dashboard'}}</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    {{-- In some case we will get a situation where we don't need some css in every pages but some page this time we will use @stack with @push('name') @endpush concept --}}
    @stack('css')
</head>
<body>
    <h6>Default slot of a component strts</h6>
        {{$slot}}
    <h6>Default slot of a component Ends</h6>
    
    {{$main_contents}}
    

</body>
</html>