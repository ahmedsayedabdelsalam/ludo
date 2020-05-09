<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ludo</title>



    <!-- Styles -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <livewire:styles />
</head>

<body class="bg-teal-700 text-white">

<livewire:counter counter="10" />
<livewire:search-users />
<!-- scripts -->
<script src="{{mix('js/app.js')}}"></script>
<livewire:scripts />
</body>

</html>
