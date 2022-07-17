<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/assets/img/logo ig.png" sizes="32x32">
    <link rel="icon" href="/assets/img/logo ig.png" sizes="192x192">
    <link rel="apple-touch-icon" href="/assets/img/logo ig.png">

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Work+Sans&display=swap" rel="stylesheet">

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
        }(window, document, 'script'
            , 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '542311994175321');
        fbq('track', 'PageView');

    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=542311994175321&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Ads: 10944468836 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10944468836"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10944468836');

    </script>


    <script src="{{ mix('js/app.js') }}" defer></script>

    <title>Kawan CCTV {{ $page->title }}</title>
</head>

<body>
    @include('_components.navbar')

    <section class="container mx-auto md:px-24 lg:px-32 mt-10">
        <h3 class="text-center text-base mb-0 font-extralight text-blue-500 uppercase">{{ $page->category }}</h3>
        <h1 class="text-center text-4xl">{{ $page->title }}</h1>
        <div class="text-center">
            <span class="text-gray-500 mr-5">
                <svg class="inline mr-0.5" style="width:19px;height:19px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z" />
                </svg>4min read
            </span>

            <span class="text-gray-500 mr-5">
                <svg class="inline mr-0.5" style="width:19px;height:19px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M9,10H7V12H9V10M13,10H11V12H13V10M17,10H15V12H17V10M19,3H18V1H16V3H8V1H6V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M19,19H5V8H19V19Z" />
                </svg>

                {{ $page->date }}
            </span>
        </div>
        <img class="object-cover w-full my-8" style="max-height: 30rem;" src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Article">
    </section>

    <article class="prose max-w-none container mx-auto px-4 md:px-24 lg:px-52 mb-10 text-justify">
        @yield('content')
    </article>

    {{-- <section class="container mx-auto md:px-24 lg:px-32 px-2 py-5">
        <div class="text-center mb-10">
            <h2>Artkel Lainya</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <div class="overflow-hidden bg-white rounded-sm shadow-md">
                    <img class="object-cover w-full h-64" src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Article">

                    <div class="p-6">
                        <div>
                            <span class="text-xs font-medium text-blue-600 uppercase">Product</span>
                            <a href="#" class="block mt-2 text-2xl font-semibold transition-colors duration-200 transform hover:text-blue-500">I Built A Successful Blog In One Year</a>
                        </div>

                        <div class="mt-4">
                            <span class="mx-1 text-xs text-gray-600">21 SEP 2015</span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="overflow-hidden bg-white rounded-sm shadow-md">
                    <img class="object-cover w-full h-64" src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Article">

                    <div class="p-6">
                        <div>
                            <span class="text-xs font-medium text-blue-600 uppercase">Product</span>
                            <a href="#" class="block mt-2 text-2xl font-semibold transition-colors duration-200 transform hover:text-blue-500">I Built A Successful Blog In One Year</a>
                        </div>

                        <div class="mt-4">
                            <span class="mx-1 text-xs text-gray-600">21 SEP 2015</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}

    @include('_components.footer')
</body>

</html>
