<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/assets/img/logo ig.png" sizes="32x32">
    <link rel="icon" href="/assets/img/logo ig.png" sizes="192x192">
    <link rel="apple-touch-icon" href="/assets/img/logo ig.png">

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Work+Sans&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '542311994175321');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=542311994175321&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Ads: 10944468836 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10944468836"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-10944468836');
    </script>


    <script src="{{ mix('js/app.js') }}"></script>

    <title>@yield('title', 'Kawan CCTV')</title>
</head>

<body>
    @include('_components.navbar')

    @yield('content')

    @include('_components.footer')
</body>

</html>
