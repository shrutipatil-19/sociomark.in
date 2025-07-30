<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>{{ $meta['meta_title'] ?? 'Sociomark' }}</title>
    <meta name="description" content="{{ $meta['meta_desciption'] ?? 'Sociomark blog page' }}">
    <meta name="keywords" content="{{ $meta['meta_keywords'] ?? '' }}">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    @hasSection('canonical')
    @yield('canonical')
    @else
    <link rel="canonical" href="{{ url()->current() }}">
    @endif
    @yield('schema')

    @include('Frontend/partial/styleLinks')
    @yield('custome-style')
    @stack('styles')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"
        integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/additional-methods.min.js"
        integrity="sha512-TiQST7x/0aMjgVTcep29gi+q5Lk5gVTUPE9XgN0g96rwtjEjLpod4mlBRKWHeBcvGBAEvJBmfDqh2hfMMmg+5A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>

<body>
    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader p-3">
        <button class="th-btn style1 preloaderCls"><i class="fa-solid fa-close ms-2"></i></button>
        <div class="preloader-inner">
            <img src="{{ asset('frontend-assets/img/preloader.gif') }}" alt="Sociomark" height="200">

            {{-- <span class="loader"></span> --}}
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>

    @include('Frontend/partial/Header')
    <style>
        #cursor {
            width: 2.3rem;
            height: 2.3rem;
            background: #ffffff;
            mix-blend-mode: difference;
            border-radius: 50%;
            position: fixed;
            z-index: 99999;
        }
    </style>
    <script>
        // $("a").each(function() { // Use .each() to iterate over jQuery elements
        //     $(this).on('mouseenter', () => { // 'this' refers to the current 'a' element
        //         $("#cursor").css("transform", "scale(1.5)"); // Use .css() for style manipulation
        //     });
        //     $(this).on('mouseleave', () => { // 'this' refers to the current 'a' element
        //         $("#cursor").css("transform", "scale(1)"); // Use .css() for style manipulation
        //     });
        // });
    </script>
    <div id="cursor" class="d-none d-md-block"></div>
    <aside class="showreel-fixed d-none d-md-block">
        <a class="wrapper" href="https://www.instagram.com/reel/C53hrnWSGXQ/" target="_blank">
            <img src="{{ asset('frontend-assets/img/showreel.gif') }}" alt="Showreel">
        </a>
    </aside>
    <main class="overflow-hidden">
        @yield('content')
    </main>
    @include('Frontend/partial/Footer')
    @include('Frontend/partial/jsLinks')
    {{-- This will render all scripts pushed with @push('scripts') --}}

    <!-- Before </body> -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 700,
            easing: 'ease-in-out',
            once: true
        });
    </script>
    <script>
        const cursor = document.querySelector("#cursor");
        var timeout;

        //follow cursor on mousemove
        document.addEventListener("mousemove", (e) => {
            let x = e.clientX;
            let y = e.clientY;

            cursor.style.top = y + "px";
            cursor.style.left = x + "px";
            cursor.style.display = "block";

            //cursor effects when mouse stopped
            function mouseStopped() {
                cursor.style.display = "none";
            }
            clearTimeout(timeout);
            timeout = setTimeout(mouseStopped, 8000);
        });

        //cursor effects when mouseout
        document.addEventListener("mouseout", () => {
            cursor.style.display = "none";
        });

        window.onload = function() {
            var pageTitle = document.title;
            var attentionMessage = 'Missing you already';
            var orginalfavicon = $("link[rel*='icon']").attr("href");
            document.addEventListener('visibilitychange', function(e) {
                var isPageActive = !document.hidden;
                if (!isPageActive) {
                    document.title = attentionMessage;
                    $("link[rel*='icon']").attr("href", "https://www.sociomark.in/assets/media/icons/sad.png");
                } else {
                    document.title = pageTitle;
                    $("link[rel*='icon']").attr("href", orginalfavicon);
                }
            });
        };
    </script>

    @stack('script')
    @yield('custome-script')
</body>

</html>