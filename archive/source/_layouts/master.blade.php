<!doctype html>
<html lang="en">
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PWQ6PJ');</script>
        <!-- End Google Tag Manager -->

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $page->pageTitle() }}</title>
        <meta name="description" content="{{ $page->pageDescription() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="https://www.gravatar.com/avatar/c2db930ff62d116e3533eadf7c4d5785?s=32&d=mm">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWQ6PJ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div class="nav-wrap">
            <div class="nav">
                <div class="container">
                    <ul class="nav-links">
                        <li class="main">
                            <a href="{{ $page->baseUrl }}">michaeljdennis</a>
                        </li>
                        {{-- <li>
                            <a href="{{ $page->baseUrl }}#posts">Posts</a>
                        </li>
                        <li>
                            <a href="{{ $page->baseUrl }}#about">About</a>
                        </li> --}}
                        <li class="social">
                            <a href="{{ $page->keybaseUrl }}">
                                <i class="fab fa-keybase"></i>
                            </a>
                        </li>
                        <li class="social">
                            <a href="{{ $page->linkedInUrl }}">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="social">
                            <a href="{{ $page->twitterUrl }}">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="social">
                            <a href="{{ $page->githubUrl }}">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            @yield('body')

            <div class="footer">
                &copy; {{ date('Y') }} Michael Dennis
            </div>
        </div>

        <!--
         .---.           _....._
        /  p  `\     .-""`:     :`"-.
        |__   - |  ,'     .     '    ',
         ._>    \ /:      :     ;      :,
          '-.    '\`.     .     :     '  \
             `.   | .'._.' '._.' '._.'.  |
               `;-\.   :     :     '   '/,__,
               .-'`'._ '     .     : _.'.__.'
              ((((-'/ `";--..:..--;"` \
                  .'   /           \   \
                 ((((-'           ((((-'
        -->
    </body>
</html>
