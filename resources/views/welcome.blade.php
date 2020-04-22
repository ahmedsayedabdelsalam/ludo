<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ludo</title>



    <!-- Styles -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>

<body class="bg-teal-700">
    <div class="container mx-auto">
        <div class="  bg-white  grid grid-rows-5">
            <div class="row-span-2 grid   grid-cols-5">
                <div class="bg-green-500 col-span-2 border-solid border-4 border-gray-900 p-16">
                    <div class=" bg-white border-4 border-gray-900 grid grid-rows-2">
                        <div class="grid  grid-cols-2">
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900  bg-green-500"></div>
                            </div>
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900 bg-green-500"></div>
                            </div>
                        </div>
                        <div class="grid  grid-cols-2">
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900 bg-green-500"></div>
                            </div>
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900 bg-green-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">

                </div>
                <div class="bg-yellow-500 col-span-2 border-solid border-4 border-gray-900 p-16">
                    <div class=" bg-white border-4 border-gray-900 grid grid-rows-2">
                        <div class="grid  grid-cols-2">
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900  bg-yellow-500"></div>
                            </div>
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900 bg-yellow-500"></div>
                            </div>
                        </div>
                        <div class="grid  grid-cols-2">
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900 bg-yellow-500"></div>
                            </div>
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900 bg-yellow-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-span-1">
            </div>
            <div class="row-span-2 grid  grid-cols-5">
                <div class="bg-red-500 col-span-2 border-solid border-4 border-gray-900 p-16">
                    <div class=" bg-white border-4 border-gray-900 grid grid-rows-2">
                        <div class="grid  grid-cols-2">
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900  bg-red-500"></div>
                            </div>
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900 bg-red-500"></div>
                            </div>
                        </div>
                        <div class="grid  grid-cols-2">
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900 bg-red-500"></div>
                            </div>
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900 bg-red-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-span-1">

                </div>
                <div class="bg-blue-500 col-span-2 border-solid border-4 border-gray-900 p-16">
                    <div class=" bg-white border-4 border-gray-900 grid grid-rows-2">
                        <div class="grid  grid-cols-2">
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900  bg-blue-500"></div>
                            </div>
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900 bg-blue-500"></div>
                            </div>
                        </div>
                        <div class="grid  grid-cols-2">
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900 bg-blue-500"></div>
                            </div>
                            <div class=" flex">
                                <div class="rounded-full h-16 w-16 m-auto border-4 border-gray-900 bg-blue-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>