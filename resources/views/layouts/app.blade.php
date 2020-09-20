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
                            <logo height="50" width="50"></logo>
                        </div>
                        <div class="col-md-auto header-item">
                            <i class="color-red">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 64 (93537) - https://sketch.com -->
    <title>@1xIconly/Light/Bookmark</title>
    <desc>Created with Sketch.</desc>
    <g id="Iconly/Light/Bookmark" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
        <g id="Bookmark" transform="translate(3.500000, 2.000000)" stroke="#200E32" stroke-width="1.5">
            <path d="M8.16475977,16.631579 L2.23340962,19.881007 C1.75983818,20.1271252 1.17640846,19.9529066 0.915331812,19.4874143 L0.915331812,19.4874143 C0.839799009,19.3432192 0.79904873,19.1833528 0.796338677,19.0205951 L0.796338677,4.62242565 C0.796338677,1.87643022 2.67276889,0.778032041 5.37299774,0.778032041 L11.7162472,0.778032041 C14.3340962,0.778032041 16.2929063,1.80320367 16.2929063,4.43935929 L16.2929063,19.0205951 C16.2929063,19.2803494 16.1897192,19.5294649 16.0060452,19.713139 C15.8223711,19.8968131 15.5732556,20.0000001 15.3135012,20.0000001 C15.1478164,19.9973723 14.9849578,19.9566576 14.8375287,19.881007 L8.86956526,16.631579 C8.64965001,16.5127732 8.38467502,16.5127732 8.16475977,16.631579 Z" id="Path_33968"></path>
            <line x1="4.86956524" y1="7.3226545" x2="12.1647598" y2="7.3226545" id="Line_209"></line>
        </g>
    </g>
</svg>
                            </i>
                        Skills</div>
                        <div class="col-md-auto header-item"><i class="far fa-map"></i> Project</div>
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
