<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Nathan Isaac - Full Stack Developer') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700" rel="stylesheet">
    <link href="https://unpkg.com/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    {{--<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png?v=201608162100">--}}
    {{--<link rel="icon" type="image/png" href="/favicons/favicon-32x32.png?v=201608162100" sizes="32x32">--}}
    {{--<link rel="icon" type="image/png" href="/favicons/favicon-16x16.png?v=201608162100" sizes="16x16">--}}
    {{--<link rel="manifest" href="/favicons/manifest.json?v=201608162100">--}}
    {{--<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg?v=201608162100" color="#ff2450">--}}
    {{--<link rel="shortcut icon" href="/favicons/favicon.ico?v=201608162100">--}}
    {{--<meta name="msapplication-config" content="/favicons/browserconfig.xml?v=201608162100">--}}
    {{--<meta name="theme-color" content="#ffffff">--}}

    {{--<meta property="og:url" content="http://nathanisaac.io/">--}}
    {{--<meta property="og:type" content="website">--}}
    {{--<meta property="og:title" content="Nathan Isaac – Full Stack Developer">--}}
    {{--<meta property="og:image" content="http://jgthms.com/images/share/jgthms.png">--}}
    {{--<meta property="og:image:type" content="image/png">--}}
    {{--<meta property="og:image:width" content="1200">--}}
    {{--<meta property="og:image:height" content="630">--}}

    {{--<meta name="twitter:card" content="summary_large_image">--}}
    {{--<meta name="twitter:site" content="@jgthms">--}}
    {{--<meta name="twitter:creator" content="@jgthms">--}}
    {{--<meta name="twitter:title" content="Jeremy Thomas – Frontend Designer">--}}
    {{--<meta name="twitter:image" content="http://jgthms.com/images/share/jgthms.png">--}}


    {{--<meta property="og:description" content="Blog of Jeremy Thomas, Frontend Designer from Bordeaux, currently working for Improbable in sunny London.">--}}
    {{--<meta name="twitter:description" content="Blog of Jeremy Thomas, Frontend Designer from Bordeaux, currently working for Improbable in sunny London.">--}}

    <!-- Scripts -->
    <script>
        window.Global = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>

    @if(app()->environment('production'))
        @include('partials.analytics')
    @endif
</body>
</html>
