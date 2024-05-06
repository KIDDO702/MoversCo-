<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MoversCo.</title>

    {{-- google-fonts (Poppins) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body class="antialiased poppins-regular bg-slate-50">

    <nav class="bg-slate-900">
        <div class="container flex items-center justify-between py-4">
            <div>
                <a href="{{ route('index') }}" class="text-slate-50 text-2xl poppins-semibold">MoversCo.</a>
            </div>

            <ul class="text-gray-100 flex items-center space-x-5">
                <li class="block">
                    <a href="#">Home</a>
                </li>
                <li class="block pl-5">
                    <a href="#">About Us</a>
                </li>
                <li class="block pl-5">
                    <a href="#">Services</a>
                </li>
                <li class="block pl-5">
                    <a href="#">Contact Us</a>
                </li>
            </ul>

            <div>
                <a href="#" class="text-gray-100">Book Now</a>
            </div>
        </div>
    </nav>


    @yield('body')
    @livewireScriptConfig
    @yield('scripts')
</body>
</html>
