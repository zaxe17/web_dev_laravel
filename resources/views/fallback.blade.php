<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="select-none drag-none h-[100vh] w-full flex justify-center items-center p-10">
    <div class="absolute inset-0 -z-10 h-full w-full bg-indigo-300 [background:radial-gradient(125%_125%_at_50%_10%,#fff_0%,#818cf8_100%)]"></div>

    <div class="box-shadow relative rounded-[10px] flex justify-center items-center py-10 flex-col bg-indigo-200 overflow-hidden">
        <div class="absolute w-full h-full bottom-1/2 left-1/3 rounded-full bg-[rgba(173,109,244,1)] opacity-50 blur-[80px]">
        </div>

        <div class="absolute w-full h-full top-1/2 right-1/3 rounded-full bg-[rgba(173,109,244,1)] opacity-50 blur-[80px]">
        </div>

        <div class="z-100 flex justify-center items-center flex-col">
            <img src="/assets/404-error-illustration-svg-download-png-3119148.webp" alt="" class="w-1/2" draggable="false">

            <h1 class="uppercase text-3xl font-bold text-indigo-400">page not found</h1>
            <p class="text-indigo-50 mb-5">Sorry, the page you are looking for does not exist.</p>

            <a href="{{ url()->previous() }}" class="button-shadow text-indigo-100 font-semibold bg-indigo-400 px-3 py-1 rounded-2xl 
            hover:bg-indigo-300 hover:text-indigo-500 transition-all duration-300 ease-in-out">Go Back</a>
        </div>

    </div>
</body>

</html>