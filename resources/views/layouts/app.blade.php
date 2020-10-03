<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="format-detection" content="telephone=no">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('img/site.webmanifest') }}">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@ui8">
  <meta name="twitter:title" content="Yvann Marivint Portfolio">
  <meta name="twitter:description" content="FullStack Developper from Paris. I design and make websites, ERP applications.">
  <meta name="twitter:creator" content="@ui8">
  <meta name="twitter:image" content="">

  <meta property="og:title" content="Yvann Marivint Portfolio">
  <meta property="og:type" content="Article">
  <meta property="og:url" content="https://ui8.net/ui8/products/folio-designer">
  <meta property="og:image" content="https://ui8-folio.herokuapp.com/img/fb-og-image.jpg">
  <meta property="og:description" content="Production-ready Portfolio and Case Study Template for Visual Designers">
  <meta property="og:site_name" content="Yvann Marivint Portfolio">
  <meta property="fb:admins" content="132951670226590">



  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Yvann Marivint - Portfolio</title>
  <meta name="description" content="FullStack Developper from Paris. I design and make websites, ERP applications">

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


        <!-- Header -->
        <header>
            <div class="container-fluid">

                <nav class="row header-center">
                    <div class="col-10">

                        <div class="d-inline header-item-logo">
                            <logo class="header-logo"></logo>
                        </div>

                        <div class="d-inline header-item">
                            <svg class="header-item-icon" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Iconly/Broken/Chart" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Chart" transform="translate(2.000000, 2.000000)" fill="#200E32" fill-rule="nonzero">
                                        <path class="header-item-icon-stroke" d="M13.7467018,-4.61852778e-14 C17.5901495,-4.61852778e-14 20,2.39226033 20,6.25329815 L20,6.25329815 L20,8.57519789 L19.9930149,8.67902713 C19.9423479,9.05250791 19.622205,9.34036939 19.2348285,9.34036939 L19.2348285,9.34036939 L19.2260334,9.34036939 L19.1052038,9.33069252 C18.9464135,9.30504163 18.7987699,9.22918985 18.6848781,9.1126494 C18.5425134,8.96697383 18.46492,8.77003645 18.469657,8.56640281 L18.469657,8.56640281 L18.469657,6.25329815 C18.469657,3.21020229 16.7897977,1.53034301 13.7467018,1.53034301 L13.7467018,1.53034301 L6.25329815,1.53034301 C3.20140721,1.53034301 1.53034301,3.21020229 1.53034301,6.25329815 L1.53034301,6.25329815 L1.53034301,13.7554969 C1.53034301,16.7985928 3.21020229,18.469657 6.25329815,18.469657 L6.25329815,18.469657 L13.7467018,18.469657 C16.7985928,18.469657 18.469657,16.7897977 18.469657,13.7554969 C18.469657,13.3329044 18.812236,12.9903255 19.2348285,12.9903255 C19.657421,12.9903255 20,13.3329044 20,13.7554969 C20,17.6077397 17.6077397,20 13.7554969,20 L13.7554969,20 L6.25329815,20 C2.39226033,20 1.0658141e-14,17.6077397 1.0658141e-14,13.7554969 L1.0658141e-14,13.7554969 L1.0658141e-14,6.25329815 C1.0658141e-14,2.39226033 2.39226033,-4.61852778e-14 6.25329815,-4.61852778e-14 L6.25329815,-4.61852778e-14 Z M5.75197889,7.55496922 C5.95495612,7.56184761 6.14687208,7.64913852 6.28544665,7.79761127 C6.42402122,7.94608402 6.49788492,8.14355704 6.49076517,8.34652595 L6.49076517,8.34652595 L6.49076517,14.7405453 C6.47619301,15.1631378 6.121801,15.4939037 5.69920844,15.4793316 C5.27661589,15.4647594 4.94585001,15.1103674 4.96042216,14.6877748 L4.96042216,14.6877748 L4.96042216,8.28496042 L4.97405581,8.16530218 C5.0047359,8.00845634 5.08458828,7.8642268 5.20358863,7.75448204 C5.35233906,7.61730108 5.54985383,7.54544217 5.75197889,7.55496922 Z M10.0351803,4.55584872 C10.4577729,4.55584872 10.8003518,4.89842768 10.8003518,5.32102023 L10.8003518,5.32102023 L10.8003518,14.6965699 C10.8003518,15.1191625 10.4577729,15.4617414 10.0351803,15.4617414 C9.61258775,15.4617414 9.2700088,15.1191625 9.2700088,14.6965699 L9.2700088,14.6965699 L9.2700088,5.32102023 C9.2700088,4.89842768 9.61258775,4.55584872 10.0351803,4.55584872 Z M14.2744063,10.9322779 C14.6969989,10.9322779 15.0395778,11.2748569 15.0395778,11.6974494 L15.0395778,11.6974494 L15.0395778,14.6877748 C15.0395778,15.1103674 14.6969989,15.4529463 14.2744063,15.4529463 C13.8518138,15.4529463 13.5092348,15.1103674 13.5092348,14.6877748 L13.5092348,14.6877748 L13.5092348,11.6974494 C13.5092348,11.2748569 13.8518138,10.9322779 14.2744063,10.9322779 Z"></path>
                                    </g>
                                </g>
                            </svg>
                            Skills
                        </div>

                        <div class="d-inline header-item">
                            <svg class="header-item-icon" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Iconly/Broken/Category" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Category" transform="translate(2.000000, 2.000000)" fill="#200E32" fill-rule="nonzero">
                                        <path class="header-item-icon-stroke" d="M16.9651972,10.7910943 C18.6355551,10.7962613 19.9898225,12.1745282 20,13.8796779 L20,13.8796779 L20,16.9019422 C19.9898672,18.6086493 18.6370574,19.989656 16.9651972,20 L16.9651972,20 L14.0046404,20 C12.3343058,19.9896104 10.9841799,18.6071157 10.9791183,16.9019422 L10.9791183,16.9019422 L10.9791183,13.8796779 C10.9791183,12.1739003 12.3336907,10.7910943 14.0046404,10.7910943 L14.0046404,10.7910943 Z M4.25058005,10.7911094 C4.56143174,10.7571369 4.86400582,10.9072962 5.02984404,11.1778368 C5.19568227,11.4483775 5.19568227,11.7918234 5.02984404,12.0623641 C4.86400582,12.3329047 4.56143174,12.483064 4.25058005,12.4490914 L4.25058005,12.4490914 L3.03480278,12.4490914 C2.25931969,12.4490743 1.62923179,13.0880635 1.62412993,13.879693 L1.62412993,13.879693 L1.62412993,16.8640606 C1.64384865,17.6493393 2.26544423,18.2797163 3.03480278,18.2946623 L3.03480278,18.2946623 L6.01392111,18.2946623 C6.38719882,18.2971859 6.74603726,18.147577 7.01085993,17.8790132 C7.27568261,17.6104493 7.42460215,17.245127 7.42459397,16.8640606 L7.42459397,16.8640606 L7.42459397,12.3827722 L7.4119274,12.2712944 C7.39792632,11.9748017 7.54013038,11.6892532 7.790386,11.527269 C8.07192357,11.3450368 8.43369689,11.3557726 8.70438922,11.5543927 C8.97508155,11.7530127 9.10035302,12.0996451 9.02088167,12.4301431 L9.02088167,12.4301431 L9.02088167,16.8924832 C9.02088167,18.6034933 7.66215418,19.990541 5.98607889,19.990541 L5.98607889,19.990541 L3.03480278,19.990541 C1.37321638,19.9553489 0.0344735814,18.5887024 -1.15463195e-14,16.8924832 L-1.15463195e-14,16.8924832 L-1.15463195e-14,13.879693 C-1.15463195e-14,13.0589056 0.320029324,12.2718731 0.889433607,11.6923782 C1.45883789,11.1128833 2.23077765,10.7885917 3.03480278,10.7911094 L3.03480278,10.7911094 Z M16.9651972,12.4490763 L14.0046404,12.4490763 C13.2306729,12.4490763 12.6032171,13.0895784 12.6032171,13.8796779 L12.6032171,13.8796779 L12.6032171,16.9019422 C12.600757,17.2821353 12.7476031,17.6474939 13.0109571,17.916337 C13.2743111,18.1851801 13.6322099,18.335087 14.0046404,18.3325757 L14.0046404,18.3325757 L16.9651972,18.3325757 C17.3376276,18.335087 17.6955265,18.1851801 17.9588805,17.916337 C18.2222345,17.6474939 18.3690806,17.2821353 18.3666205,16.9019422 L18.3666205,16.9019422 L18.3666205,13.8796779 C18.3666205,13.5002587 18.2189431,13.1363796 17.9561311,12.8680898 C17.6933191,12.5997999 17.3368695,12.4490763 16.9651972,12.4490763 L16.9651972,12.4490763 Z M16.9651972,1.42108547e-14 C18.6231586,0.0401888697 19.9564291,1.40542407 19.9907193,3.09805779 L19.9907193,3.09805779 L19.9907193,6.11084794 C20.0006255,6.93000939 19.6913283,7.71963098 19.1308818,8.30597331 C18.5704353,8.89231564 17.8047578,9.22733887 17.0023202,9.23732828 L17.0023202,9.23732828 L15.7772622,9.23732828 C15.3622318,9.19197022 15.0474942,8.83443927 15.0474942,8.40833728 C15.0474942,7.98223529 15.3622318,7.62470434 15.7772622,7.57934628 L15.7772622,7.57934628 L16.9651972,7.57934628 C17.3409577,7.57685591 17.7002159,7.42142485 17.963298,7.14752348 C18.2263802,6.87362212 18.3715416,6.50388945 18.3665893,6.12032212 L18.3665893,6.12032212 L18.3665893,3.09805779 C18.3565908,2.31222501 17.7349852,1.67766309 16.9651972,1.66745618 L16.9651972,1.66745618 L14.0046404,1.66745618 C13.2306729,1.66745618 12.6032483,2.30795834 12.6032483,3.09805779 L12.6032483,3.09805779 L12.6032483,7.61724301 L12.5935698,7.72116039 C12.5305946,8.1290042 12.1825523,8.43701778 11.7679814,8.43202274 C11.5521645,8.42708972 11.3472696,8.33413973 11.1990474,8.1739275 C11.0508253,8.01371527 10.9716204,7.79958378 10.9791183,7.57934628 L10.9791183,7.57934628 L10.9791183,3.09805779 C10.976652,2.2772742 11.2943223,1.48924474 11.8619853,0.907972252 C12.4296483,0.32669976 13.2006115,1.42108547e-14 14.0046404,1.42108547e-14 L14.0046404,1.42108547e-14 Z M5.99535968,9.32587341e-14 C7.66931968,0.00520201691 9.02506666,1.3892071 9.03016246,3.09805779 L9.03016246,3.09805779 L9.03016246,6.12032212 C9.03016246,6.94110958 8.71013314,7.7281421 8.14072886,8.307637 C7.57132457,8.8871319 6.79938482,9.21142348 5.99535968,9.20892028 L5.99535968,9.20892028 L3.03480284,9.20892028 C1.36444497,9.20373866 0.0101775379,7.82547177 5.10440676e-08,6.12032212 L5.10440676e-08,6.12032212 L5.10440676e-08,3.09805779 C0.0101328156,1.39135069 1.36294265,0.0103439638 3.03480284,9.32587341e-14 L3.03480284,9.32587341e-14 Z M5.99535968,1.66745618 L3.03480284,1.66745618 C2.6583302,1.65981918 2.29468591,1.80716464 2.02582107,2.07628669 C1.75695622,2.34540874 1.60549417,2.7136624 1.6055685,3.09805779 L1.6055685,3.09805779 L1.6055685,6.12032212 C1.59791363,6.50962241 1.74603381,6.88528857 2.0157445,7.1606209 C2.28545519,7.43595322 2.65345114,7.5871607 3.03480284,7.57934628 L3.03480284,7.57934628 L5.99535968,7.57934628 C6.37112019,7.57685591 6.73037836,7.42142485 6.99346051,7.14752348 C7.25654266,6.87362212 7.40170403,6.50388945 7.39675179,6.12032212 L7.39675179,6.12032212 L7.39675179,3.09805779 C7.39169024,2.31010852 6.76722089,1.67262323 5.99535968,1.66745618 L5.99535968,1.66745618 Z"></path>
                                    </g>
                                </g>
                            </svg>
                            Project
                        </div>

                    </div>
                    <div class="col text-right">
                        <button class="header-burger"></button>
                    </div>
                </nav>

            </div>
        </header>
        <!-- End header -->

        <!-- Main -->
        <main>

            <!-- Main background -->
            <div class="main-bg">
                <img src="{{ asset('img/bg-main.jpg') }}" alt="">
            </div>

            @yield('content')
        </main>
        <!-- End main -->

    </div>
    <!-- End app VueJs -->

</body>
</html>
