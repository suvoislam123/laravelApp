<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>
    {{-- When we write components all components get path all previous path till components folder and components folder should be in immidiate child folder of views folder  --}}
    <x-layout.topbar />
    <x-layout.master>
        {{-- Here we are using name slot of {{$title_name}} --}}
        <x-slot:title_name>
            This is  title 
        </x-slot:title_name>    
        <h1>Here without slot every markup will be place in default $slot </h1>
        <x-slot:main_contents>
            {{-- here we should write by @include('name') --}}
            <h1>This is main conents</h1>
        </x-slot:main_contents>    
    </x-layout.master>

</body>
</html>