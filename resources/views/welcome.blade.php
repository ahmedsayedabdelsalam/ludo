<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ludo</title>



    <!-- Styles -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>

<body class="bg-teal-700 text-white">
<div x-data="{ open: false }">
    <button @click="open = true">Open Dropdown</button>

    <ul
        x-show="open"
        @click.away="open = false"
        class="bg-gray-900"
    >
        Dropdown Body
    </ul>
</div>

<div x-data="{name: null}">
    <label>
        <input type="text" x-model="name">
    </label>
    <div x-text="name"></div>
</div>

<div x-data="{counter: 0}">
    <button @click="counter++">+</button>
    <button @click="counter--">-</button>
    <span x-text="counter"></span>
</div>

<!-- scripts -->
<script src="{{mix('js/app.js')}}"></script>
</body>

</html>
