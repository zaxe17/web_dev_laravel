<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="h-[100vh] w-full flex justify-center items-center p-10">
    <div class="absolute inset-0 -z-10 h-full w-full bg-indigo-300 [background:radial-gradient(125%_125%_at_50%_10%,#fff_0%,#818cf8_100%)]"></div>

    <div class="flex flex-col justify-center items-center gap-8 text-center">
        <h1 class="text-5xl text-indigo-500 font-medium">Welcome {{ $name }}</h1>
        <a href="/example" class="button-shadow text-indigo-100 font-semibold 
        bg-indigo-500 px-3 py-1 rounded-2xl hover:bg-indigo-300 hover:text-indigo-500 transition-all duration-300 ease-in-out">Dashboard</a>
    </div>
</body>

</html>