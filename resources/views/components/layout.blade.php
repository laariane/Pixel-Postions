<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pixel Positions</title>
        @vite(['resources/js/app.js'])
    </head>

    <body class="bg-black text-white">
        <div class="px-10">
            <nav>
                <div class="flex justify-between items-center py-5 border-b border-white/10">

                    <div>
                        <a href="/">
                            <img src={{ Vite::asset('resources/images/logo.svg') }} alt="">
                        </a>
                    </div>
                    <div class="space-x-2 ml-14 font-bold">
                        <a href="#">Jobs</a>
                        <a href="#">Careers</a>
                        <a href="" class="border rounded-xl px-1 py-1 bg-white/10 hover:bg-white/50 ">Post a job</a>
                        <a href="#">Salaries</a>
                        <a href="#">Companies</a>
                    </div>
                    <div class="space-x-5">
                        @guest
                            <a href="/login">Login</a>
                            <a href="/register">Regsiter</a>
                        @endguest
                        @auth
                            <form  method="POST" class="form" id="logout_form"  action="/logout">
                            @csrf
                            @method("DELETE")
                            </form>
                            <button  form="logout_form" type="submit">Logout</button>
                        @endauth

                    </div>
                </div>

            </nav>

            <main class="mt-10 max-w-[1200px] mx-auto">
                {{ $slot }}
            </main>
        </div>


    </body>

</html>
