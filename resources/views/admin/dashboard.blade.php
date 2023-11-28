<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashboardPanel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">

    <div class="container mt-2 p-20 flex flex-col gap-6">
        <div id="toast-container" class="fixed top-4 right-4 z-50"></div>

        <button id="show-toast" class="bg-blue-500 text-white py-2 px-4 rounded">Mostrar notificacao</button>

        <div class="font-regular relative block w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white  hover:bg-green-600"
            data-dismissible="alert">
            <div class="absolute top-4 left-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                    class="mt-px h-6 w-6">
                    <path fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="ml-8 mr-12">
                <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                    Success
                </h5>
                <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                    I don't know what that word means. I'm happy. But success, that goes
                    back to what in somebody's eyes success means. For me, success is inner
                    peace. That's a good day for me.
                </p>
            </div>
            <div data-dismissible-target="alert" data-ripple-dark="true"
                class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                <div role="button" class="w-max rounded-lg p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
        </div>




        <!--<div class="font-regular relative block w-full max-w-screen-md rounded-lg bg-red-500 px-4 py-4 text-base text-white hover:bg-red-600"
            data-dismissible="alert">
            <div class="absolute top-4 left-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                        clip-rule="evenodd" />
                </svg>

            </div>
            <div class="ml-8 mr-12">
                <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                    Danger
                </h5>
                <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                    I don't know what that word means. I'm happy. But success, that goes
                    back to what in somebody's eyes success means. For me, success is inner
                    peace. That's a good day for me.
                </p>
            </div>
            <div data-dismissible-target="alert" data-ripple-dark="true"
                class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                <div role="button" class="w-max rounded-lg p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
        </div>

   


        <div class="font-regular relative block w-full max-w-screen-md rounded-lg bg-blue-500 px-4 py-4 text-base text-white  hover:bg-blue-600"
            data-dismissible="alert">
            <div class="absolute top-4 left-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z"
                        clip-rule="evenodd" />
                </svg>


            </div>
            <div class="ml-8 mr-12">
                <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                    Info
                </h5>
                <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                    I don't know what that word means. I'm happy. But success, that goes
                    back to what in somebody's eyes success means. For me, success is inner
                    peace. That's a good day for me.
                </p>
            </div>
            <div data-dismissible-target="alert" data-ripple-dark="true"
                class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                <div role="button" class="w-max rounded-lg p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
        </div>




        <div class="font-regular relative block w-full max-w-screen-md rounded-lg bg-yellow-500 px-4 py-4 text-base text-white  hover:bg-yellow-600"
            data-dismissible="alert">
            <div class="absolute top-4 left-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                        d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-8 mr-12">
                <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                    Warning
                </h5>
                <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                    I don't know what that word means. I'm happy. But success, that goes
                    back to what in somebody's eyes success means. For me, success is inner
                    peace. That's a good day for me.
                </p>
            </div>
            <div data-dismissible-target="alert" data-ripple-dark="true"
                class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                <div role="button" class="w-max rounded-lg p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
        </div>


        <div class="ml-[200px] mb-[100px] py-5">
            <div id="dropdownContainer" class="relative inline-block text-left">
                <div>
                    <button type="button" id="btnDropdown"
                        class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                        id="menu-button" aria-expanded="true" aria-haspopup="true">
                        Options
                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div id="showDropdown"
                    class="absolute hidden right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 transition ease-out duration-100 transform opacity-0 scale-95 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">

                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-50" role="menuitem"
                            tabindex="-1" id="menu-item-0">Account settings</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm  hover:bg-gray-50" role="menuitem"
                            tabindex="-1" id="menu-item-1">Support</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm  hover:bg-gray-50" role="menuitem"
                            tabindex="-1" id="menu-item-2">License</a>
                        <form method="POST" action="#" role="none">
                            <button type="submit"
                                class="text-gray-700 block w-full px-4 py-2 text-left text-sm  hover:bg-gray-50"
                                role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <form name="form" action="teste" class='ajax_form'>
            <div class="mb-4">
                <input type="text" name="nome"
                    class="px-4 py-3 border w-2/4 focus:outline-none rounded-md text-gray-600"
                    placeholder="Digite texto">
            </div>

            <button type="submit"
                class="py-2 px-6 bg-blue-800 hover:bg-blue-950 rounded-md text-white text-sm uppercase">enviar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
    $(function() {


        $(document).on('submit', '.ajax_form', function(e) {
            e.preventDefault();

            var form = $(this);
            var action = typeof form.attr('action') != 'undefined' ? form.attr('action') : '';
            var data = new FormData();

            console.log(data)
            $.ajax([
                url: action,
                data: data,
                type: 'POST',
                success: function(data) {
                    console.log(data)
                }
            ]);
            // console.log('tete')
        })

    })
    </script>
</body>

</html>