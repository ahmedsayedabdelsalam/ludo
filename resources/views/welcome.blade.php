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


<x-alert class="mb-2" variant="green" body="hello world" />

<x-inline-alert class="mb-2" variant="red" body="hello world" />

<x-anonymous-alert class="mb-2" variant="yellow" body="hello world" />

<!-- scripts -->
<script src="{{mix('js/app.js')}}"></script>
</body>

</html>
