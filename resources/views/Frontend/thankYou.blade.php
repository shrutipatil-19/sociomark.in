<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    @include('Frontend/partial/styleLinks')
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            background-color: #f5f5f5;
        }

        /* body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-image: url('{{ asset('frontend-assets/img/thankYou/thankyou.webp') }}');
            background-size: cover;
            background-position: center;
            opacity: 0.1;
            z-index: -1;
        } */

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            /* Full viewport height */
            padding: 20px;

        }

        .fa-solid {
            font-size: 4rem;
            color: green;
        }

        .sec-title {
            margin: 1rem 0px;

        }

        .box {
            background-color: white;
            padding: 2.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .big {
            font-size: 3.2rem;
            font-weight: 500 !important;
            line-height: 1.3;
        }

        .text-blue {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-cenetr align-items-center flex-column flex-sm-row">
            <div class="col-12 col-md-7">
                <h1 class="sec-title big me-md-5">Thanks for stopping by. Let’s build something impactful together! <span
                        class="text-blue">remarkable team</span> </h1>
            </div>
            <div class="col-sm-5 col-12">
                <div class="text-center d-flex justify-content-cenetr align-items-center flex-column box">
                    <i class="fa-solid fa-circle-check"></i>
                    <h2 class="sec-title">Thank You</h2>
                    <p class="sec-para text-center">
                        You're on our radar!
                    </p>
                    <p class="sec-para text-center">
                        Appreciate you reaching out. Our team of experts will be in touch with you soon to take things
                        forward. Until then, explore more or download our deck below.
                    </p>
                    <div class="row">
                        <div class="col-12 text-end">
                            <a href="{{ route('home') }}" class="th-btn white-border th-icon th-radius">
                                Back To Home
                            </a>
                            <!--<a href="" class="th-btn white-border th-icon th-radius">-->
                            <!--    Download-->
                            <!--</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('Frontend/partial/jsLinks')
</body>

</html>
