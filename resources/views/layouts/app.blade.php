<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Yvann Marivint - IT Developpement expert</title>

    <!-- Scripts -->
    <script> window._asset = '{{ asset('') }}';</script> <!-- Register Laravel Asset() path in javascript -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- App VueJs -->
    <div id="app">

        <!-- Main -->
        <main>

            <!-- Main background -->
            <div class="main-bg">
                <img class="main-pic" src="{{ asset('img/bg-main.jpg') }}" alt="">
            </div>

            <!-- Header -->
            <header>
                <div class="container-fluid">

                    <nav class="row">
                        <div class="col-md-auto">
                            <logo height="30" width="30"></logo>
                        </div>
                        <div class="col-md-auto header-item">

                            <!-- Light -->
                            <!--
                            <svg class="header-item-icon" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>@1xIconly/Light/Activity</title>
                                <desc>Created with Sketch.</desc>
                                <g id="Iconly/Light/Activity" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                    <g id="Activity" transform="translate(2.000000, 1.500000)" stroke="#200E32" stroke-width="1.5">
                                        <polyline class="header-item-icon-stroke" id="Path_33966" points="5.24485128 13.2814646 8.23798631 9.39130439 11.652174 12.0732266 14.5812358 8.29290622"></polyline>
                                        <circle class="header-item-icon-stroke" id="Ellipse_741" cx="17.9954234" cy="2.70022885" r="1.92219681"></circle>
                                        <path class="header-item-icon-stroke" d="M12.9244852,1.62013731 L5.6567506,1.62013731 C2.64530894,1.62013731 0.778032041,3.75286043 0.778032041,6.76430209 L0.778032041,14.846682 C0.778032041,17.8581237 2.60869567,19.9816935 5.6567506,19.9816935 L14.2608696,19.9816935 C17.2723113,19.9816935 19.1395882,17.8581237 19.1395882,14.846682 L19.1395882,7.80778036" id="Path"></path>
                                    </g>
                                </g>
                            </svg>
                            -->

                            <!-- Duo  tone -->
                            <svg class="header-item-icon" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>@1xIconly/Two-tone/Activity</title>
                                <desc>Created with Sketch.</desc>
                                <g id="Iconly/Two-tone/Activity" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                    <g id="Activity" transform="translate(2.000000, 1.500000)" stroke="#200E32" stroke-width="1.5">
                                        <polyline class="header-item-icon-stroke" id="Path_33966" opacity="0.400000006" points="5.24485128 13.2814646 8.23798631 9.39130439 11.652174 12.0732266 14.5812358 8.29290622"></polyline>
                                        <circle class="header-item-icon-stroke" id="Ellipse_741" cx="17.9954234" cy="2.70022885" r="1.92219681"></circle>
                                        <path class="header-item-icon-stroke" d="M12.9244852,1.62013731 L5.6567506,1.62013731 C2.64530894,1.62013731 0.778032041,3.75286043 0.778032041,6.76430209 L0.778032041,14.846682 C0.778032041,17.8581237 2.60869567,19.9816935 5.6567506,19.9816935 L14.2608696,19.9816935 C17.2723113,19.9816935 19.1395882,17.8581237 19.1395882,14.846682 L19.1395882,7.80778036" id="Path"></path>
                                    </g>
                                </g>
                            </svg>
                            Skills
                        </div>
                        <div class="col-md-auto header-item">

                            <!-- Light -->
                            <!--
                            <svg class="header-item-icon" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>@1xIconly/Light/Category</title>
                                <desc>Created with Sketch.</desc>
                                <g id="Iconly/Light/Category" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                    <g id="Category" transform="translate(2.000000, 2.000000)" stroke="#200E32" stroke-width="1.5">
                                        <path class="header-item-icon-stroke" d="M14.2855094,9.76996262e-15 L17.5521036,9.76996262e-15 C18.9036211,9.76996262e-15 20,1.10589743 20,2.47018211 L20,5.76410278 C20,7.12735391 18.9036211,8.23428489 17.5521036,8.23428489 L14.2855094,8.23428489 C12.9329672,8.23428489 11.8365883,7.12735391 11.8365883,5.76410278 L11.8365883,2.47018211 C11.8365883,1.10589743 12.9329672,9.76996262e-15 14.2855094,9.76996262e-15 Z" id="Stroke-1"></path>
                                        <path class="header-item-icon-stroke" d="M2.44892104,9.76996262e-15 L5.71449064,9.76996262e-15 C7.06703281,9.76996262e-15 8.16341169,1.10589743 8.16341169,2.47018211 L8.16341169,5.76410278 C8.16341169,7.12735391 7.06703281,8.23428489 5.71449064,8.23428489 L2.44892104,8.23428489 C1.09637888,8.23428489 3.55271368e-15,7.12735391 3.55271368e-15,5.76410278 L3.55271368e-15,2.47018211 C3.55271368e-15,1.10589743 1.09637888,9.76996262e-15 2.44892104,9.76996262e-15 Z" id="Stroke-3"></path>
                                        <path class="header-item-icon-stroke" d="M2.44892104,11.7657151 L5.71449064,11.7657151 C7.06703281,11.7657151 8.16341169,12.8716125 8.16341169,14.2369308 L8.16341169,17.5298179 C8.16341169,18.8941026 7.06703281,20 5.71449064,20 L2.44892104,20 C1.09637888,20 3.55271368e-15,18.8941026 3.55271368e-15,17.5298179 L3.55271368e-15,14.2369308 C3.55271368e-15,12.8716125 1.09637888,11.7657151 2.44892104,11.7657151 Z" id="Stroke-5"></path>
                                        <path class="header-item-icon-stroke" d="M14.2855094,11.7657151 L17.5521036,11.7657151 C18.9036211,11.7657151 20,12.8716125 20,14.2369308 L20,17.5298179 C20,18.8941026 18.9036211,20 17.5521036,20 L14.2855094,20 C12.9329672,20 11.8365883,18.8941026 11.8365883,17.5298179 L11.8365883,14.2369308 C11.8365883,12.8716125 12.9329672,11.7657151 14.2855094,11.7657151 Z" id="Stroke-7"></path>
                                    </g>
                                </g>
                            </svg>
                            -->

                            <!-- Duo tone -->
                            <svg class="header-item-icon" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>@1xIconly/Two-tone/Category</title>
                                <desc>Created with Sketch.</desc>
                                <g id="Iconly/Two-tone/Category" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                    <g id="Category" transform="translate(2.000000, 2.000000)" stroke="#200E32" stroke-width="1.5">
                                        <path class="header-item-icon-stroke" d="M14.2855094,9.76996262e-15 L17.5521036,9.76996262e-15 C18.9036211,9.76996262e-15 20,1.10589743 20,2.47018211 L20,5.76410278 C20,7.12735391 18.9036211,8.23428489 17.5521036,8.23428489 L14.2855094,8.23428489 C12.9329672,8.23428489 11.8365883,7.12735391 11.8365883,5.76410278 L11.8365883,2.47018211 C11.8365883,1.10589743 12.9329672,9.76996262e-15 14.2855094,9.76996262e-15 Z" id="Stroke-1" opacity="0.400000006"></path>
                                        <path class="header-item-icon-stroke" d="M2.44892104,9.76996262e-15 L5.71449064,9.76996262e-15 C7.06703281,9.76996262e-15 8.16341169,1.10589743 8.16341169,2.47018211 L8.16341169,5.76410278 C8.16341169,7.12735391 7.06703281,8.23428489 5.71449064,8.23428489 L2.44892104,8.23428489 C1.09637888,8.23428489 3.55271368e-15,7.12735391 3.55271368e-15,5.76410278 L3.55271368e-15,2.47018211 C3.55271368e-15,1.10589743 1.09637888,9.76996262e-15 2.44892104,9.76996262e-15 Z" id="Stroke-3"></path>
                                        <path class="header-item-icon-stroke" d="M2.44892104,11.7657151 L5.71449064,11.7657151 C7.06703281,11.7657151 8.16341169,12.8716125 8.16341169,14.2369308 L8.16341169,17.5298179 C8.16341169,18.8941026 7.06703281,20 5.71449064,20 L2.44892104,20 C1.09637888,20 3.55271368e-15,18.8941026 3.55271368e-15,17.5298179 L3.55271368e-15,14.2369308 C3.55271368e-15,12.8716125 1.09637888,11.7657151 2.44892104,11.7657151 Z" id="Stroke-5"></path>
                                        <path class="header-item-icon-stroke" d="M14.2855094,11.7657151 L17.5521036,11.7657151 C18.9036211,11.7657151 20,12.8716125 20,14.2369308 L20,17.5298179 C20,18.8941026 18.9036211,20 17.5521036,20 L14.2855094,20 C12.9329672,20 11.8365883,18.8941026 11.8365883,17.5298179 L11.8365883,14.2369308 C11.8365883,12.8716125 12.9329672,11.7657151 14.2855094,11.7657151 Z" id="Stroke-7"></path>
                                    </g>
                                </g>
                            </svg>

                            <!-- Bulk -->
                            <!--
                            <svg class="header-item-icon" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>@1xIconly/Bulk/Category</title>
                                <desc>Created with Sketch.</desc>
                                <g id="Iconly/Bulk/Category" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Category" transform="translate(2.000000, 2.000000)" fill="#200E32" fill-rule="nonzero">
                                        <path class="header-item-icon-stroke" d="M14.0755097,2.66453526e-15 L17.4614756,2.66453526e-15 C18.8637443,2.66453526e-15 20,1.1458518 20,2.55996321 L20,5.97452492 C20,7.38863633 18.8637443,8.53448813 17.4614756,8.53448813 L14.0755097,8.53448813 C12.673241,8.53448813 11.5369853,7.38863633 11.5369853,5.97452492 L11.5369853,2.55996321 C11.5369853,1.1458518 12.673241,2.66453526e-15 14.0755097,2.66453526e-15" id="Fill-1" opacity="0.400000006"></path>
                                        <path class="header-item-icon-stroke" d="M5.9244903,11.4655119 C7.32675901,11.4655119 8.46301469,12.6113637 8.46301469,14.0254751 L8.46301469,17.4400368 C8.46301469,18.8531901 7.32675901,20 5.9244903,20 L2.53852439,20 C1.13625568,20 8.8817842e-16,18.8531901 8.8817842e-16,17.4400368 L8.8817842e-16,14.0254751 C8.8817842e-16,12.6113637 1.13625568,11.4655119 2.53852439,11.4655119 L5.9244903,11.4655119 Z M17.4614756,11.4655119 C18.8637443,11.4655119 20,12.6113637 20,14.0254751 L20,17.4400368 C20,18.8531901 18.8637443,20 17.4614756,20 L14.0755097,20 C12.673241,20 11.5369853,18.8531901 11.5369853,17.4400368 L11.5369853,14.0254751 C11.5369853,12.6113637 12.673241,11.4655119 14.0755097,11.4655119 L17.4614756,11.4655119 Z M5.9244903,7.99360578e-15 C7.32675901,7.99360578e-15 8.46301469,1.1458518 8.46301469,2.55996321 L8.46301469,5.97452492 C8.46301469,7.38863633 7.32675901,8.53448813 5.9244903,8.53448813 L2.53852439,8.53448813 C1.13625568,8.53448813 8.8817842e-16,7.38863633 8.8817842e-16,5.97452492 L8.8817842e-16,2.55996321 C8.8817842e-16,1.1458518 1.13625568,7.99360578e-15 2.53852439,7.99360578e-15 L5.9244903,7.99360578e-15 Z" id="Combined-Shape"></path>
                                    </g>
                                </g>
                            </svg>
                            -->
                            Project
                        </div>
                        <div class="col-md text-right">
                            <button class="header-burger"></button>
                        </div>
                    </nav>

                </div>
            </header>
            <!-- End header -->

            @yield('content')
        </main>
        <!-- End main -->

    </div>
    <!-- End app VueJs -->

</body>
</html>
