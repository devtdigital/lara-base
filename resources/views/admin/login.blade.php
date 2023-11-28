<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Panel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <main
        class="relative flex min-h-screen flex-col items-center justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
        <div
            class="absolute inset-0 bg-[url(https://play.tailwindcss.com/img/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]">
        </div>

        <div
            class="relative w-[410px] bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">

            <div class="max-w-md mx-auto">

                <h1 class="w-full text-2xl font-normal mb-5 text-center tracking-normal">Olá, digite seus dados.</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <span class="absolute mt-[38px] ml-3">
                            <x-icons.user class="text-gray-400" />
                        </span>
                        <label for="email" class="block text-sm text-gray-400 mb-1">E-mail</label>
                        <input
                            class="w-full border py-2 px-8 text-gray-500 rounded placeholder:text-sm placeholder:text-gray-300 transition-all duration-75 ease-in focus:outline-none hover:border-indigo-700"
                            id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="Digite seu email">
                    </div>

                    <div class="mb-3">
                        <span class="absolute mt-[38px] ml-3">
                            <x-icons.lock class="text-gray-400" />
                        </span>

                        <label for="password" class="block text-sm text-gray-400 mb-1">Senha</label>
                        <input
                            class="w-full border py-2 px-8 text-gray-500 rounded placeholder:text-sm placeholder:text-gray-300 transition-all duration-75 ease-in focus:outline-none hover:border-indigo-700"
                            id="password" type="password" name="password" required autocomplete="current-password"
                            placeholder="******">
                    </div>
                    <div class="mb-[1rem] h-6 text-center">
                        {{--                    <span class="text-center text-sm text-indigo-600">Retorno das mensagens de erro</span>--}}
                    </div>

                    <!-- <div class="mb-5">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Remember Me</label>
                </div> -->

                    <div class="flex justify-center">
                        <button type="submit"
                            class="w-full bg-blue-500 text-gray-50 py-2 px-3 rounded  transition-all duration-75 ease-in hover:bg-blue-700">
                            Entrar
                        </button>
                        <!--
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot Your Password?</a>

                    @endif -->
                    </div>
                </form>
            </div>
        </div>
    </main>


</body>

</html>