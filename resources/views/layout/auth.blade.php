<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MoversCo. - Authenticate</title>

    {{-- google-fonts (Poppins) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-950 flex justify-center poppins-regular">
    <div class="w-[33%] bg-slate-50 rounded p-5 mt-10 border border-slate-200 drop-shadow-sm">
        <div class="flex items-center justify-center">
            <h3 class="bg-slate-900 text-center text-slate-50 text-4xl poppins-semibold w-[50%] py-2 rounded">MoversCo.</h3>
        </div>
        <hr class="border-slate-400 my-7">
        @yield('body')
        <hr class="border-slate-400 mt-5 mb-2">
        <p class="text-sm poppins-light text-slate-600">
            This system is Designed, Developed & Maintained by <a href="#" target="_blank" class="text-slate-900 poppins-semibold underline underline-offset-2">Bob</a>
        </p>
    </div>
    @livewireScriptConfig
    @yield('scripts')
</body>

</html>
