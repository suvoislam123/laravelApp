<x-layout.products>
    <x-slot:title>
        DashBoard
    </x-slot:title>
    <header>
        <x-slot:header>
            @include('common.header')
        </x-slot:header>
    </header>
    <x-slot:contents>
        <h1>This is contents</h1>
    </x-slot:contents>
    <x-slot:footer>
        <h1>This is footer</h1>
    </x-slot:footer>
</x-layout.products>
