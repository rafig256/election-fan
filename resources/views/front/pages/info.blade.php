<html lang="fa" dir="rtl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('front/assets/css/create_card.css')}}">
    <!--    toastr  -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" class="rel">
    <!-- Bootstrap -->
    <link href="{{asset('front/assets/css/bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous">
    <script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"  crossorigin="anonymous"></script>

    <title>پیام موفیت آمیز</title>
    <style>
        @media (max-width: 768px) {
            .checkout {
                width: 100%;
            }
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="checkout">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">کارت مجازی شما با موفقیت ثبت شد</h4>
            <p> شما می توانید کارت مجازی خود را
                <a href="{{$link}}" >اینجا  </a>
                مشاهده کنید. برای دریافت کارت فیزیکی مراجعه به ستاد مرکزی مشگین شهر الزامیست.</p>
            <hr>
            <p class="mb-0"><a href="{{route('create-card')}}" target="_blank">ثبت هوادار جدید</a></p>
        </div>

        <div class="alert alert-warning" role="alert">
            برنامه نویسی توسط <a href="https://rafig.ir" target="_blank">رافق مجتهدزاده</a>
        </div>
        <div class="alert alert-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="https://www.facebook.com/meshgin/" class="social-link">
                            <svg fill="#37BBFE" height="32px" width="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="-337 273 123.5 256" xml:space="preserve">
<path d="M-260.9,327.8c0-10.3,9.2-14,19.5-14c10.3,0,21.3,3.2,21.3,3.2l6.6-39.2c0,0-14-4.8-47.4-4.8c-20.5,0-32.4,7.8-41.1,19.3
	c-8.2,10.9-8.5,28.4-8.5,39.7v25.7H-337V396h26.5v133h49.6V396h39.3l2.9-38.3h-42.2V327.8z"/>
</svg>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="https://t.me/rafig256" class="social-link">
                            <svg width="32px" height="32px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="14" fill="url(#paint0_linear_87_7225)"/>
                                <path d="M22.9866 10.2088C23.1112 9.40332 22.3454 8.76755 21.6292 9.082L7.36482 15.3448C6.85123 15.5703 6.8888 16.3483 7.42147 16.5179L10.3631 17.4547C10.9246 17.6335 11.5325 17.541 12.0228 17.2023L18.655 12.6203C18.855 12.4821 19.073 12.7665 18.9021 12.9426L14.1281 17.8646C13.665 18.3421 13.7569 19.1512 14.314 19.5005L19.659 22.8523C20.2585 23.2282 21.0297 22.8506 21.1418 22.1261L22.9866 10.2088Z" fill="white"/>
                                <defs>
                                    <linearGradient id="paint0_linear_87_7225" x1="16" y1="2" x2="16" y2="30" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#37BBFE"/>
                                        <stop offset="1" stop-color="#007DBB"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                    </div>

                    <div class="col-md-3">
                        <a href="https://www.instagram.com/rafig256/" class="social-link">
                            <svg width="32px" height="32px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint0_radial_87_7153)"/>
                                <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint1_radial_87_7153)"/>
                                <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint2_radial_87_7153)"/>
                                <path d="M23 10.5C23 11.3284 22.3284 12 21.5 12C20.6716 12 20 11.3284 20 10.5C20 9.67157 20.6716 9 21.5 9C22.3284 9 23 9.67157 23 10.5Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 21C18.7614 21 21 18.7614 21 16C21 13.2386 18.7614 11 16 11C13.2386 11 11 13.2386 11 16C11 18.7614 13.2386 21 16 21ZM16 19C17.6569 19 19 17.6569 19 16C19 14.3431 17.6569 13 16 13C14.3431 13 13 14.3431 13 16C13 17.6569 14.3431 19 16 19Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 15.6C6 12.2397 6 10.5595 6.65396 9.27606C7.2292 8.14708 8.14708 7.2292 9.27606 6.65396C10.5595 6 12.2397 6 15.6 6H16.4C19.7603 6 21.4405 6 22.7239 6.65396C23.8529 7.2292 24.7708 8.14708 25.346 9.27606C26 10.5595 26 12.2397 26 15.6V16.4C26 19.7603 26 21.4405 25.346 22.7239C24.7708 23.8529 23.8529 24.7708 22.7239 25.346C21.4405 26 19.7603 26 16.4 26H15.6C12.2397 26 10.5595 26 9.27606 25.346C8.14708 24.7708 7.2292 23.8529 6.65396 22.7239C6 21.4405 6 19.7603 6 16.4V15.6ZM15.6 8H16.4C18.1132 8 19.2777 8.00156 20.1779 8.0751C21.0548 8.14674 21.5032 8.27659 21.816 8.43597C22.5686 8.81947 23.1805 9.43139 23.564 10.184C23.7234 10.4968 23.8533 10.9452 23.9249 11.8221C23.9984 12.7223 24 13.8868 24 15.6V16.4C24 18.1132 23.9984 19.2777 23.9249 20.1779C23.8533 21.0548 23.7234 21.5032 23.564 21.816C23.1805 22.5686 22.5686 23.1805 21.816 23.564C21.5032 23.7234 21.0548 23.8533 20.1779 23.9249C19.2777 23.9984 18.1132 24 16.4 24H15.6C13.8868 24 12.7223 23.9984 11.8221 23.9249C10.9452 23.8533 10.4968 23.7234 10.184 23.564C9.43139 23.1805 8.81947 22.5686 8.43597 21.816C8.27659 21.5032 8.14674 21.0548 8.0751 20.1779C8.00156 19.2777 8 18.1132 8 16.4V15.6C8 13.8868 8.00156 12.7223 8.0751 11.8221C8.14674 10.9452 8.27659 10.4968 8.43597 10.184C8.81947 9.43139 9.43139 8.81947 10.184 8.43597C10.4968 8.27659 10.9452 8.14674 11.8221 8.0751C12.7223 8.00156 13.8868 8 15.6 8Z" fill="white"/>
                                <defs>
                                    <radialGradient id="paint0_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(12 23) rotate(-55.3758) scale(25.5196)">
                                        <stop stop-color="#B13589"/>
                                        <stop offset="0.79309" stop-color="#C62F94"/>
                                        <stop offset="1" stop-color="#8A3AC8"/>
                                    </radialGradient>
                                    <radialGradient id="paint1_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(11 31) rotate(-65.1363) scale(22.5942)">
                                        <stop stop-color="#E0E8B7"/>
                                        <stop offset="0.444662" stop-color="#FB8A2E"/>
                                        <stop offset="0.71474" stop-color="#E2425C"/>
                                        <stop offset="1" stop-color="#E2425C" stop-opacity="0"/>
                                    </radialGradient>
                                    <radialGradient id="paint2_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(0.500002 3) rotate(-8.1301) scale(38.8909 8.31836)">
                                        <stop offset="0.156701" stop-color="#406ADC"/>
                                        <stop offset="0.467799" stop-color="#6A45BE"/>
                                        <stop offset="1" stop-color="#6A45BE" stop-opacity="0"/>
                                    </radialGradient>
                                </defs>
                            </svg>
                        </a>
                    </div>


                    <div class="col-md-3">
                        <a href="https://github.com/rafig256" class="social-link">
                            <svg width="32px" height="32px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)" fill="#000000">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]">

                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>
