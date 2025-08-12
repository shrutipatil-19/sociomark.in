<!doctype html>
<!-- <html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"> -->
<html lang="{{ app()->getLocale() }}">

<!-- <html class="no-js" lang="en-ae"> -->

<head>

    <title>{!! $meta['title'] ?? 'Sociomark' !!}</title>
    <meta name="description" content="{!!  $meta['description'] ?? 'Sociomark' !!}">
    <meta name="keywords" content="{{ $meta['keywords'] ?? 'Sociomark' }}">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    @php
    $canonicalList = config('canonical');
    $currentPath = request()->getPathInfo(); // returns e.g., /blog
    @endphp

    @if (array_key_exists($currentPath, $canonicalList))
    <link rel="canonical" href="{{ $canonicalList[$currentPath] }}" />
    @endif
    <!-- @if(app()->getLocale() == 'ar')
    <link href="{{ asset('css/rtl.css') }}" rel="stylesheet">
    @else
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @endif -->

    @if (app()->getLocale() === 'ar')
    <!-- Arabic-specific styles -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/arabic.css') }}">
    @endif

    @include('Frontend/partial/styleLinks')
    @yield('custome-style')
    @stack('styles')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"
        integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/additional-methods.min.js"
        integrity="sha512-TiQST7x/0aMjgVTcep29gi+q5Lk5gVTUPE9XgN0g96rwtjEjLpod4mlBRKWHeBcvGBAEvJBmfDqh2hfMMmg+5A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script> -->

    <!-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script> -->
    <!-- <style>
        body {
            direction: rtl;
            text-align: right;
            font-family: 'Cairo', sans-serif;
            /* Optional Arabic-friendly font */
        }

        .navbar,
        .content {
            text-align: right;
        }
    </style> -->
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
        function changeLanguage(lang) {
            window.location.href = "{{ url('switch-locale') }}/" + lang;
        }
    </script>
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
        <button class="th-btn style1 showreel-close position-absolute"><i class="fa-solid fa-close"></i></button>
        <a class="wrapper" href="https://www.instagram.com/reel/C53hrnWSGXQ/" target="_blank">
            <img src="{{ asset('frontend-assets/img/showreel.gif') }}" alt="Showreel">
        </a>
    </aside>
    <script>
        $(".showreel-close").on("click", () => {
            $("aside.showreel-fixed").toggleClass('collapsed');
            if ($("aside.showreel-fixed").hasClass('collapsed')) {
                $(".showreel-close").html('<i class="fa-solid fa-expand"></i>');
            } else {
                $(".showreel-close").html('<i class="fa-solid fa-close"></i>');
            }
        });
    </script>
    <main class="overflow-hidden">
        @yield('content')
    </main>
    @include('Frontend/partial/Footer')
    @include('Frontend/partial/jsLinks')

    {{-- This will render all scripts pushed with @push('scripts') --}}
    @stack('scripts')
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
    <!-- <script src="https://run.confettipage.com/here.js" data-confetticode="U2FsdGVkX1+2zXN19p8GqkbiHmWMt4OPWdq/ishFv8pFcRn5TsnqQsogAfoR8JzH1csgezOZQ45AZea+8Lfl2XgwUg9AXSHAX/3FnI75NjYjcYHFjIF3Jz/CDTLLQ3xqNdT9Fmbq8eVxoHAR4zt10ExvLo65j9kd89yvtL1fPFcQ9x7nporv94MApDbccIWJhv3z3Zbwwj0q36bX/8RG6YC5DuXB0wfm8nzWk9cfE0v2noiSdoeVWJfHmni2+RPOdCSG6dsZZH2Xj9GKyKKc0iuhF+1siTPRz9m/sZ6C25wZrbIxlnatUOOk3fDouGdfcplJjxHt4rro+6Nu71mdTfrI4IkeWRa4yqvEc+spKA7UGMPFEIbb+o338yq/eSJesLZDGsQY1JS1PyqGtPv+YN+HD0a4G4Nk7NRyRFz6Hzu8fTmGcUbMcxOXPyvj6p1sW6Iz3LWzDJRt6B5RqB1bIDGBKN0jZJTv0GVCX4OIkJcc37NHsBIv+og552nuEq3+St09r2d+Z3AUULMp++HL1nu+2JMozdkymGpkNTKedYNAOnYTcoyINLfROjGtICGpepwtDwc7MgIsePTCNJWinSimaBRO8AfyLd1No2kwUzRvTNa1GLfb/OxihRqiW+aoqsEiJPdSRQEIU3NR7xM3TrhbThz2MyEtPLV6YL1Hz+HClYSssICsPGWHwvq7YXXD3d+x0nWJxnYtEMe+tm6UYj7SbV0NcFjkR3jjMD3AtK4="></script> -->

    <!-- <script src="https://run.confettipage.com/here.js" data-confetticode="U2FsdGVkX19yuAq+fpDkAHpxq+NuQafrSaZFnh/j9k18H68ia51Z1/HvouwulKjiYBL4hAEJtcX1ghWg6fPkC+joqrlWhp/XfwkCE6lONEn7OZbeZkRxk2wHuebSoaXh+KSA72gWA6CL0HK5GjNJ3MQjDjdOGOrZJUQEO9h8ADGMtnKFbKylCJq7CfW4Vk4tfSovcc7+TJG9teIxGomHZ2j3VCLmSMNhvdRa1779GYbVUpMMmzGoGw/baylktdLJfxDBaZxdU6h/aMLhXqgxqLtMG8hDw9/1K5xtZsv0NEsdfB7gbbmaK0ZXR7Zp2ScfwAa1QR4LlOPu6xnbrlUFOfiT7wTwo+bKhUX3TtR3Buvb/TSrQWRqVGeQ22K8iB8dwz8z4cAGJSnz7WmfY4bFSKXJ6kvs8r2JwXjfIj8O6ztz9piiSg8Z6veWkfRefwj+GqRRA6fk0dsfxvEw4q3qVyJ/4evbAcfKXoUzKuLmFmMxBVAWjzTfFpcUqY/DZbP2n7YGCGr5Qw1un1+JX8XJo/+psgOCtK/AS7JUC5Ctkp5cmKOQWwXSU1dz5hIiuQqA0Nuaepkepsa4kzsjGdyMOoggpkp/0LhARP1JNNvWZ5iwppfW/00QUF6TCVTTnGD6dySg/tE/EbXrb0kYIv3dJKcJl7nFpY0DmtK780VxQh78rALC31MzoR7riUcOw2bPavJ2Z2xd5SjaD2QH1W+Dk7/WqYUGzf1YYmtPZD+QfuY="></script> -->
     
    <!-- <script src="https://run.confettipage.com/here.js" data-confetticode="U2FsdGVkX19c5a6/FN4luRqNwRGlZhrgf68NUuYrZhswTFdRiXIGu/Cd1aOA2NdTBiYKK7cFDK3PrnObm+0Sf1mNyzgDFMkdY2/hrTaC0FHBW2REg/ydBfOScVRoeZPCSubnvrx+Chm6XMg+AjzPBC/TIPQ4facVtua1Vzy4r2Rf3bInswkN1zAzNWt5Nde7MazgVhunKXRp8BPKiGJxe0H0laXh6/vpJaX/TbLclRbVZP+cp3E1jMePnoXHcemz69P869koCO9W9qxwP+h7A4x/pFi+64/4VT4P8IPuxtLqf0QwBREJVEBY9Kiw9btYdlsWxZX6XcUHUf9CwBsrJbLz19T/qIfAkR7HYKv1fhK9cGruCCb0oOJpST6FeHULyLlADa9qw4MRm4wv30YuXPssycuvk0KrzocOYvybqOkpsMX/Kr4EmzAj7FFyjoc1iBAUtmyncX07ctWrk9FYz7WZaQk6dhdNWMwQNy1ZNduH8aKm2fC+OT2DwCBJMpmkDoqejK7Jl9xJJ8PWe93HRtAPExDtM8Vr8Qd0s1vqKCBT4nC4hNMioNbLke02oFj1o+5XraZduzd/+WpPfTxdUwOVS4pFtgAlbm/ofBKXDwiploU12UnCedUeNLpUzd6cr9ZNzvgxHYhxiTHNujvXk361wqmFkbUWLrrZy6/5i4Oc+g2lDHrRASNEvXknImNEUuhigm+wrOZZA+htTReQrpk/+2p5erf3XTv9R7bxonQ="></script> -->

    <!-- <script src="https://run.confettipage.com/here.js" data-confetticode="U2FsdGVkX1+h4/rEns8cU7JjN9DE9lAgsrOj0SmpPAq6dhA+pgLp7Y1tD4e8+gAtH0BsYwEdKr1vh46hj1WMBRZTrwFoRZwozYMfOntXFChhUOhHDmbE8WCjAD9/ZlGVFde96vJ4THvLWmIIssFmL/s+bpKZdUavPMyDdjzDcnr2FmrOY0TUd5SaGFG8gK+xKx9o8oVr/QzsNv7n2nMHEMBXnclG7TCYbSj5+F1wkrFpbOImiKgTB2YMPcPlURCGhVXdccPh+4OCZjfc3SJgNW+iBMYqbdBY0OVviPt21xaaBk5HHpgCwIcvViMczEJW9++7JQcYZWFUV9q00ef+hNLVHZUusPfF3zHgCfJ24txJnOK7q0Teifh16DV0JrsKiDGOcThYhLJjimKpWvjpFvAZhICsIjcOYLslzUwzfarMNn0Mb5zPRvOdk/R2ctUN1Kmc2nduyVmWi7ghXvWO9ldOqLutmMtUIykk5Ij6Jt+VYCfujE9GtuzJaViSkzQ1D33+6NVMb/Y9pJXLUpcdfs6U9JQ361cDkp/ARKzRkdMDWHFEcplwANsYItX1AvPRwLE7EAiZmZS5lJdmlGefZn730VCBp8Puslz84ivc4vu3FA786u0UxooireR2CbVXefQT1jB4MwTVW8WeZPMiLwPdxtBwveKcRW1K1XgLUL16isWDnhMYReyAp0KT21E39qhCi4iavzNVJ3wj+em7SUMTK3lGtAslPQiPb3Bu0EFqXtC+6tBbcM3Lq12Za6jJ"></script> -->
    @stack('script')
</body>

</html>