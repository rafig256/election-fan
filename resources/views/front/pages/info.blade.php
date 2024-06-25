<html lang="fa" dir="rtl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('front/assets/css/create_card.css')}}">
    <!--    toastr  -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" class="rel">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
    </div>
</div>
</body>
</html>
