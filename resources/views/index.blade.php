{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body style="background-color:rgb(31, 176, 205);">
    <center>
        <h1>hello laravel</h1>
    </center>

</body>

</html> --}}

<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="auther" content="Babak chalacki">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link type="text/css" rel="stylesheet" href="CSS/bootstrap.rtl.css">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="CSS/all.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</head>

<body>

    <div class="container-fluid">

        <img src="https://picsum.photos/1500/50" class="img-fluid" alt="بنر تلیغاتی">


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="https://picsum.photos/500/300" class="img-fluid"
                        style="height: 30px;" alt="..."></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <form class="d-flex"><i
                            style="border-style: solid; border-width: 1px; color:rgb(189, 186, 186); border-color: rgb(230, 221, 221); border-radius: 0px 20px 20px 0px;"
                            class="p-2 fas fa-search"></i>
                        <input style="width: 600px;" class="d-lg-block d-none form-control me-2" type="search"
                            placeholder="جست و جو در دیجی کالا ..." aria-label="Search">

                        <input style="width: 230px;" class=" d-lg-none form-control me-2" type="search"
                            placeholder="به آسانی جست و جو کنید ..." aria-label="Search">
                        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                    </form>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    ورود به حساب کاربری
                    <i class="fas fa-user"></i>
                </button>
                <i class=" ps-3	fa fa-shopping-cart"></i>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">حساب کاربری</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                                <button type="button" class="btn btn-primary">ثبت کردن</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="fas fa-navicon"></i> دسته بندی کالا</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#"> <i
                                    style="color: rgb(138, 135, 135);" class="fal fa-percent"></i> شگفت انگیزها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> <i style="color: rgb(138, 135, 135);"
                                    class="fal fa-cutlery"></i>
                                سوپرمارکت</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> <i style="color: rgb(138, 135, 135);"
                                    class="fal fa-credit-card"></i> کارت
                                هدیه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true"> <i
                                    style="color: rgb(138, 135, 135);" class="fal fa-fire"></i> پرفروشترین ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> <i style="color: rgb(138, 135, 135);"
                                    class="fal fas fa-glass-martini-alt"></i> تخفیف ها و پیشنهادها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> <i style="color: rgb(138, 135, 135);"
                                    class="	fa fa-question-circle"></i>
                                سوالی دارد؟ </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">در دیجی کالا بفروشید!</a>
                        </li>
                    </ul>
                </div>
                <a class="nav-link mt-3" href="#">
                    <p style="font-size: 13px;"><i style="color: rgb(138, 135, 135);" class="fad fa-home"></i> لطفا
                        شهره خود را
                        انتخاب کنید </p>
                </a>
            </div>
        </nav>





        <div id="carouselExampleIndicators" class="carousel slide d-sm-block d-none" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    class="active" aria-current="true" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    class="active" aria-current="true" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    class="active" aria-current="true" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    class="active" aria-current="true" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    class="active" aria-current="true" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                    class="active" aria-current="true" aria-label="Slide 7"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/200/300" height="400px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/201/300" height="400px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/202/300" height="400px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/203/300" height="400px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/204/300" height="400px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/205/300" height="400px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/206/300" height="400px" class="d-block w-100" alt="...">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- زیره نوبار -->

        <div class="row mt-5">
            <div class="col col-4 col-sm mt-1 d-xxl-block d-xl-block d-lg-block d-sm-block d-none"
                style="font-size: 12px;">
                <img id="pic1" src="https://picsum.photos/200/300" class="img-fluid" alt="..."><br>ارسال
                امروز
            </div>
            <div class="col col-4 col-sm mt-1 d-xxl-block d-xl-block d-lg-block d-sm-block d-none"
                style="font-size: 12px;">
                <img id="pic1" src="https://picsum.photos/201/300" class="img-fluid" alt="..."><br>بازی ها
            </div>
            <div class="col col-4 col-sm mt-1 d-xxl-block d-xl-block d-lg-block d-sm-block d-none"
                style="font-size: 12px;">
                <img id="pic1" src="https://picsum.photos/202/300" class="img-fluid" alt="..."><br>وقت
                خرید!
            </div>
            <div class="col col-4 col-sm mt-1 d-xxl-block d-xl-block d-lg-block d-sm-block d-none"
                style="font-size: 12px;">
                <img id="pic1" src="https://picsum.photos/203/300" class="img-fluid" alt="..."><br>شیوه
                ارسال
            </div>
            <div class="col col-4 col-sm mt-1 d-xxl-block d-xl-block d-lg-block d-sm-block d-none"
                style="font-size: 12px;">
                <img id="pic1" src="https://picsum.photos/204/300" class="img-fluid"
                    alt="..."><br>سوپرمارکت
            </div>
            <div class="col col-4 col-sm mt-1 d-xxl-block d-xl-block d-lg-block d-sm-block d-none"
                style="font-size: 12px;">
                <img id="pic1" src="https://picsum.photos/205/300" class="img-fluid" alt="..."><br>دیجی پی
            </div>
            <div class="col col-4 col-sm mt-1 d-xxl-block d-xl-block d-lg-block d-sm-block d-none"
                style="font-size: 12px;">
                <img id="pic1" src="https://picsum.photos/206/300" class="img-fluid" alt="..."><br>دیجی
                کالا
            </div>
            <div class="col col-4 col-sm mt-1 d-xxl-block d-xl-block d-lg-block d-sm-block d-none"
                style="font-size: 12px;">
                <img id="pic1" src="https://picsum.photos/207/300" class="img-fluid" alt="..."><br>موارد
                بیشتر
            </div>
        </div>

        <center class="d-xxl-none d-xl-none d-lg-none d-sm-none d-block">
            <div class="row mt-2">
                <div class="col col-4 col-sm mt-4" style="font-size: 12px;"><img id="pic1"
                        src="https://picsum.photos/200/300" class="img-fluid" alt="..."><br>ارسال امروز</div>
                <div class="col col-4 col-sm mt-4" style="font-size: 12px;"><img id="pic1"
                        src="https://picsum.photos/201/300" class="img-fluid" alt="..."><br>بازی ها</div>
                <div class="col col-4 col-sm mt-4" style="font-size: 12px;"><img id="pic1"
                        src="https://picsum.photos/202/300" class="img-fluid" alt="..."><br>وقت خرید!</div>
                <div class="col col-4 col-sm mt-4" style="font-size: 12px;"><img id="pic1"
                        src="https://picsum.photos/203/300" class="img-fluid" alt="..."><br>شیوه ارسال</div>
                <div class="col col-4 col-sm mt-4" style="font-size: 12px;"><img id="pic1"
                        src="https://picsum.photos/204/300" class="img-fluid" alt="..."><br>سوپرمارکت</div>
                <div class="col col-4 col-sm mt-4" style="font-size: 12px;"><img id="pic1"
                        src="https://picsum.photos/205/300" class="img-fluid" alt="..."><br>دیجی پی</div>
                <div class="col col-4 col-sm mt-4" style="font-size: 12px;"><img id="pic1"
                        src="https://picsum.photos/206/300" class="img-fluid" alt="..."><br>دیجی کالا</div>
                <div class="col col-4 col-sm mt-4" style="font-size: 12px;"><img id="pic1"
                        src="https://picsum.photos/207/300" class="img-fluid" alt="..."><br>موارد بیشتر</div>
            </div>
        </center>

        <!-- زیره نوبار -->


        <!-- پیشنهاد ویژه -->

        <div id="row2" class="row mt-4 bg-danger pt-4 pb-3 ">
            <div class="col-12 col-lg ps-1 col-sm-12 d-sm-none d-none d-lg-block">
                <div class="card bg-danger" style="border-style: none; color: white;">
                    <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                    <div class="card-body bg-danger">
                        <button type="button" class="btn btn-outline-light mt-4">پیشنهاد ویژه <i
                                class="fa fa-angle-left"></i></button>



                    </div>
                </div>
            </div>

            <div class="col-6 col-lg col-sm-4 mt-3">
                <div class="card">
                    <img src="https://picsum.photos/201/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-danger">
                            <p class="card-text">2,990,00 تومان</p>
                        </button>


                    </div>
                </div>
            </div>

            <div class="col-6 col-lg col-sm-4 mt-3">
                <div class="card">
                    <img src="https://picsum.photos/202/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-danger">
                            <p class="card-text">603,200 تومان</p>
                        </button>

                    </div>
                </div>
            </div>

            <div class="col-6 col-lg col-sm-4 mt-3">
                <div class="card">
                    <img src="https://picsum.photos/203/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-danger">
                            <p class="card-text">979,000 تومان</p>
                        </button>


                    </div>
                </div>
            </div>

            <div class="col-6 col-lg col-sm-4 mt-3">
                <div class="card">
                    <img src="https://picsum.photos/204/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-danger">
                            <p class="card-text">799,000 تومان</p>
                        </button>


                    </div>
                </div>
            </div>

            <div class="col-6 col-lg col-sm-4 mt-3">
                <div class="card">
                    <img src="https://picsum.photos/204/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-danger">
                            <p class="card-text">9,400,00 تومان</p>
                        </button>


                    </div>
                </div>
            </div>

            <div class="col-6 col-lg col-sm-4 mt-3">
                <div class="card">
                    <img src="https://picsum.photos/205/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-primary">
                            <p class="card-text">صلواتی</p>
                        </button>


                    </div>
                </div>
            </div>

        </div>
        <!-- پیشنهاد ویژه -->

        <!--شگفت انگیزان -->

        <nav id="color" class="navbar mt-2 p-2">

            <a class="navbar-brand d-xxl-block d-xl-block d-lg-block d-sm-block d-none" href="#">
                <img class="ps-4" src="https://picsum.photos/500/50" alt="">
            </a>
            <div class="row d-xxl-block d-xl-block d-lg-block d-sm-block d-none">
                <div class="col">
                    <a class="navbar-brand" href="#">
                        <img src="https://picsum.photos/200/300" height="70px" alt="">
                    </a>
                    <a class="navbar-brand" href="#">
                        <img src="https://picsum.photos/200/300" height="70px" alt="">
                    </a>
                    <a class="navbar-brand" href="#">
                        <img src="https://picsum.photos/200/300" height="70px" alt="">
                    </a>
                    <a class="navbar-brand" href="#">
                        <img src="https://picsum.photos/200/300" height="70px" alt="">
                    </a>
                    <a class="navbar-brand" href="#">
                        <img src="https://picsum.photos/200/300" height="70px" alt="">
                    </a>
                    <a class="navbar-brand" href="#">
                        <img src="https://picsum.photos/200/300" height="70px" alt="">
                    </a>
                </div>
            </div>

        </nav>

        <nav id="color" class="navbar">
            <center class="d-xxl-none d-xl-none d-lg-none d-sm-none d-block">

                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img class="mb-4 " src="https://picsum.photos/100/100" alt="بنر">
                    </a>
                    <div class="row">
                        <div class="col">
                            <a class="navbar-brand" href="#">
                                <img src="https://picsum.photos/200/300" height="70px" alt="">
                            </a>
                            <a class="navbar-brand" href="#">
                                <img src="https://picsum.photos/200/300" height="70px" alt="">
                            </a>
                            <a class="navbar-brand" href="#">
                                <img src="https://picsum.photos/200/300" height="70px" alt="">
                            </a>
                            <a class="navbar-brand" href="#">
                                <img src="https://picsum.photos/200/300" height="70px" alt="">
                            </a>
                            <a class="navbar-brand" href="#">
                                <img src="https://picsum.photos/200/300" height="70px" alt="">
                            </a>
                            <a class="navbar-brand" href="#">
                                <img src="https://picsum.photos/200/300" height="70px" alt="">
                            </a>
                        </div>
                    </div>
                </div>

            </center>
        </nav>
        <!--شگفت انگیزان -->

        <!-- بعده شگفت انگیز -->
        <!-- کامپیوتر -->
        <div class="row mt-3 " style="margin-left: 10px; margin-right: 10px;">
            <div class="col-6 col-sm-4 col-lg mt-4 d-xxl-block d-xl-block d-lg-block d-sm-block d-none"><img
                    src="https://picsum.photos/400/300" class="img-fluid rounded" alt="Responsive image"></div>
            <div class="col-6 col-sm-4 col-lg mt-4 d-xxl-block d-xl-block d-lg-block d-sm-block d-none"><img
                    src="https://picsum.photos/401/300" class="img-fluid rounded" alt="Responsive image"></div>
            <div class="col-6 col-sm-4 col-lg mt-4 d-xxl-block d-xl-block d-lg-block d-sm-block d-none"><img
                    src="https://picsum.photos/402/300" class="img-fluid rounded" alt="Responsive image"></div>
            <div class="col-6 col-sm-4 col-lg mt-4 d-xxl-block d-xl-block d-lg-block d-sm-block d-none"><img
                    src="https://picsum.photos/403/300" class="img-fluid rounded" alt="Responsive image"></div>
        </div>
        <!-- گوشی -->
        <div class="row mt-3 " style="margin-left: 10px; margin-right: 10px;">
            <div class="col-6 col-sm-4 col-lg mt-4 d-xxl-none d-xl-none d-lg-none d-sm-none d-block"><img
                    src="https://picsum.photos/200/300" class="img-fluid rounded" alt="Responsive image"></div>
            <div class="col-6 col-sm-4 col-lg mt-4 d-xxl-none d-xl-none d-lg-none d-sm-none d-block"><img
                    src="https://picsum.photos/201/300" class="img-fluid rounded" alt="Responsive image"></div>
            <div class="col-6 col-sm-4 col-lg mt-4 d-xxl-none d-xl-none d-lg-none d-sm-none d-block"><img
                    src="https://picsum.photos/202/300" class="img-fluid rounded" alt="Responsive image"></div>
            <div class="col-6 col-sm-4 col-lg mt-4 d-xxl-none d-xl-none d-lg-none d-sm-none d-block"><img
                    src="https://picsum.photos/203/300" class="img-fluid rounded" alt="Responsive image"></div>
        </div>
        <!-- بعده شگفت انگیز -->

        <hr>
        <!-- دسته‌بندی‌های دیجی‌کالا -->
        <center>
            <div class="row mt-5">
                <div class="col">

                </div>
                <div class="col">
                    <p style="font-size: 20px;">دسته بندیی های دیجی کالا</p>
                </div>
                <div class="col">

                </div>
            </div>
        </center>


        <center class="d-xxl-block d-xl-block d-lg-block d-sm-block d-none">
            <div class="row mt-3">
                <div class="col-lg col-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                        alt="Responsive image"><br>کودک و نوجوان</div>

                <div class="col-lg  col-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                        alt="Responsive image"><br>لوازم التحریر</div>

                <div class="col-lg  col-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                        alt="Responsive image"><br>لبنیات و خوراکی جات
                </div>

                <div class="col-lg  col-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                        alt="Responsive image"><br>انواع مدل پوشاک و لباس
                </div>

                <div class="col-lg  col-4 "><img src="https://picsum.photos/200/300" class="img-fluid"
                        alt="Responsive image"><br>لوازم لازم خانگی
                </div>

                <div class="col-lg  col-4 "><img src="https://picsum.photos/200/300" class="img-fluid"
                        alt="Responsive image"><br>
                    <p>شست و شو</p>
                </div>

                <div class="col-lg  col-4 col-4 "><img src="https://picsum.photos/200/300" class="img-fluid"
                        alt="Responsive image"><br>لولزم بهداشتی</div>

            </div>
        </center>



        <center class="d-xxl-none d-xl-none d-lg-none d-sm-none d-block">
            <div class="row mt-3">
                <div class="col-lg col-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                        alt="Responsive image"><br>کودک و نوجوان</div>

                <div class="col-lg  col-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                        alt="Responsive image"><br>لوازم التحریر</div>

                <div class="col-lg  col-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                        alt="Responsive image"><br>لبنیات و خوراکی جات
                </div>

                <div class="col-lg  col-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                        alt="Responsive image"><br>انواع مدل پوشاک و لباس
                </div>

                <div class="col-lg  col-4  "></div>
                <div class="col-lg  col-4"><img src="https://picsum.photos/200/300" class="img-fluid"
                        alt="Responsive image"><br>لوازم لازم خانگی</div>
                <div class="col-lg  col-4 col-4 "></div>




            </div>
        </center>




        <center class="mt-4 d-xxl-block d-xl-block d-lg-block d-sm-block d-none">
            <div class="row container">
                <div class="col-lg col-4"><img src="https://picsum.photos/201/300" class="img-fluid"
                        alt="Responsive image"><br>فرش و گلیم</div>
                <div class="col-lg col-4"><img src="https://picsum.photos/201/300" style="border-radius: 100px;"
                        class="img-fluid" alt="Responsive image"><br>روشنایی الکتریکی</div>
                <div class="col-lg col-4"><img src="https://picsum.photos/201/300" style="border-radius: 100px;"
                        class="img-fluid" alt="Responsive image"><br>اکسسوری لوازم شخصی</div>
                <div class="col-lg col-4"><img src="https://picsum.photos/201/300" style="border-radius: 100px;"
                        class="img-fluid" alt="Responsive image"><br>خواب</div>
                <div class="col-lg col-4"><img src="https://picsum.photos/201/300" class="img-fluid"
                        alt="Responsive image"><br>دکراتیو</div>
            </div>
        </center>


        <!-- گوشی -->

        <center>
            <div class="row container mt-4">
                <div class="col-lg col-4 d-xxl-none d-xl-none d-lg-none d-sm-none d-block"><img
                        src="https://picsum.photos/201/300" class="img-fluid" alt="Responsive image"><br>فرش و گلیم
                </div>
                <div class="col-lg col-4 d-xxl-none d-xl-none d-lg-none d-sm-none d-block"><img
                        src="https://picsum.photos/201/300" class="img-fluid" alt="Responsive image"><br>روشنایی
                    الکتریکی</div>
                <div class="col-lg col-4 d-xxl-none d-xl-none d-lg-none d-sm-none d-block"><img
                        src="https://picsum.photos/201/300" class="img-fluid" alt="Responsive image"><br>اکسسوری
                    لوازم شخصی</div>
                <div class="col-lg col-4 d-xxl-none d-xl-none d-lg-none d-sm-none d-block mt-3"><img
                        style="border-radius: 100px;" src="https://picsum.photos/201/300" class="img-fluid"
                        alt="Responsive image"><br>خواب</div>
                <div class="col-lg col-4 d-xxl-none d-xl-none d-lg-none d-sm-none d-block"></div>
                <div class="col-lg col-4 d-xxl-none d-xl-none d-lg-none d-sm-none d-block mt-3"><img
                        style="border-radius: 100px;" src="https://picsum.photos/201/300" class="img-fluid"
                        alt="Responsive image"><br>دکراتیو</div>
            </div>
        </center>

        <!-- دسته‌بندی‌های دیجی‌کالا -->




        <!-- بخش بعدی -->
        <!-- کامپیوتر -->
        <center>
            <div class="d-xxl-block d-xl-block d-lg-block d-sm-block d-none" style="background-color: white;">
                <div class="row mt-5" style="background-color: white;">
                    <div class="col-12 col-lg"><img src="https://picsum.photos/800/250"
                            style="border-radius: 10px; margin-top: 20px; " class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-12 col-lg "><img src="https://picsum.photos/800/250"
                            style="border-radius: 10px; margin-top: 20px; " class="img-fluid" alt="Responsive image">
                    </div>
                </div>
                <div class="row mt-3" style="background-color: white;">
                    <div class="col-12 col-lg"><img src="https://picsum.photos/800/250" style="border-radius: 10px;"
                            class="img-fluid" alt="Responsive image"></div>
                    <div class="col-12 col-lg"><img src="https://picsum.photos/800/250" style="border-radius: 10px; "
                            class="img-fluid" alt="Responsive image"></div>
                </div>
            </div>
        </center>


        <!-- گوشی -->
        <center class=" d-xxl-none d-xl-none d-lg-none d-sm-none d-block">
            <div style="background-color: white;">
                <div class="row mt-5" style="background-color: white;">
                    <div class="col-12 col-lg mt-3"><img src="https://picsum.photos/400/200"
                            style="border-radius: 10px;" class="img-fluid" alt="Responsive image"></div>
                    <div class="col-12 col-lg mt-3"><img src="https://picsum.photos/400/200"
                            style="border-radius: 10px;" class="img-fluid" alt="Responsive image"></div>
                </div>
                <div class="row mt-3" style="background-color: white;">
                    <div class="col-12 col-lg "><img src="https://picsum.photos/400/200" style="border-radius: 10px;"
                            class="img-fluid" alt="Responsive image"></div>
                    <div class="col-12 col-lg mt-3"><img src="https://picsum.photos/400/200"
                            style="border-radius: 10px;" class="img-fluid" alt="Responsive image"></div>
                </div>
            </div>
        </center>

        <!-- بخش بعدی -->




        <!-- پشنهاد دیجی کالا -->
        <center>
            <div class="row mt-4 ">
                <div class="col-2 col-lg"></div>
                <div class="col-8 col-lg">
                    <p style="font-size: 20px;">پیشنهادهای دیجی کالا</p>
                </div>
                <div class="col-2 col-lg"></div>
            </div>
        </center>

        <!-- کامپیوتر -->
        <center>
            <div class="d-xxl-block d-xl-block d-lg-block d-sm-block d-none"
                style="border-style: solid; border-width:0.5px; border-color: lightgrey; border-radius: 10px; ">
                <div class="row mt-3" id="rowd">
                    <div class="d-none  d-lg-block col-lg"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="...">
                        <p><br>لوازم التحریر</p>
                    </div>
                    <div class="d-none  d-lg-block col-lg"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="...">
                        <p><br>انواع مواد غذایی</p>
                    </div>
                    <div class="d-none  d-lg-block col-lg"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="...">
                        <p><br>کیف و کفش</p>
                    </div>
                    <div class="d-none  d-lg-block col-lg"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="...">
                        <p><br>لوازم خانگی</p>
                    </div>
                    <div class="d-none  d-lg-block col-lg"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="...">
                        <p><br>کیف و کفش</p>
                    </div>
                    <div class="d-none  d-lg-block col-lg"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="...">
                        <p><br>انواع مواد غذایی</p>
                    </div>
                    <div class="d-none  d-lg-block col-lg"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="...">
                        <p><br>لوازم التحریر</p>
                    </div>
                </div>
                <div class="row mt-3" id="rowd">
                    <div class="d-none  d-lg-block col-lg"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="...">
                        <p><br>لوازم التحریر</p>
                    </div>
                    <div class="d-none  d-lg-block col-lg"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="...">
                        <p><br>انواع مواد غذایی</p>
                    </div>
                    <div class="d-none  d-lg-block col-lg"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="...">
                        <p><br>کیف و کفش</p>
                    </div>
                    <div class="d-none  d-lg-block col-lg"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="...">
                        <p><br>لوازم خانگی</p>
                    </div>
                    <div class="d-none  d-lg-block col-lg"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="...">
                        <p><br>کیف و کفش</p>
                    </div>
                    <div class="d-none  d-lg-block col-lg"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="...">
                        <p><br>انواع مواد غذایی</p>
                    </div>
                    <div class="d-none  d-lg-block col-lg"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="...">
                        <p><br>لوازم التحریر</p>
                    </div>
                </div>
            </div>
        </center>

        <!-- گوشی -->
        <center>
            <div style="border-style: solid; border-width:0.5px; border-color: lightgrey; border-radius: 10px; ">
                <div class="row mt-3" id="rowd">
                    <div class="d-xxl-none d-xl-none d-lg-none d-sm-block d-block col-lg col-6 col-md-3 col-sm-4"><img
                            src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                        <p><br>لوازم التحریر</p>
                    </div>
                    <div class="d-xxl-none d-xl-none d-lg-none d-sm-block d-block col-lg col-6 col-md-3 col-sm-4"><img
                            src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                        <p><br>انواع مواد غذایی</p>
                    </div>
                    <div class="d-xxl-none d-xl-none d-lg-none d-sm-block d-block col-lg col-6 col-md-3 col-sm-4"><img
                            src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                        <p><br>کیف و کفش</p>
                    </div>
                    <div class="d-xxl-none d-xl-none d-lg-none d-sm-block d-block col-lg col-6 col-md-3 col-sm-4"><img
                            src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                        <p><br>لوازم خانگی</p>
                    </div>
                    <div class="d-xxl-none d-xl-none d-lg-none d-sm-block d-block col-lg col-6 col-md-3 col-sm-4"><img
                            src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                        <p><br>کیف و کفش</p>
                    </div>
                    <div class="d-xxl-none d-xl-none d-lg-none d-sm-block d-block col-lg col-6 col-md-3 col-sm-4"><img
                            src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                        <p><br>انواع مواد غذایی</p>
                    </div>


                    <div class="d-xxl-none d-xl-none d-lg-none d-sm-block d-block col-lg col-6 col-md-3 col-sm-4"><img
                            src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                        <p><br>لوازم التحریر</p>
                    </div>
                    <div class="d-xxl-none d-xl-none d-lg-none d-sm-block d-block col-lg col-6 col-md-3 col-sm-4"><img
                            src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                        <p><br>انواع مواد غذایی</p>
                    </div>
                    <div class="d-xxl-none d-xl-none d-lg-none d-sm-block d-block col-lg col-6 col-md-3 col-sm-4"><img
                            src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                        <p><br>کیف و کفش</p>
                    </div>
                    <div class="d-xxl-none d-xl-none d-lg-none d-sm-block d-block col-lg col-6 col-md-3 col-sm-4"><img
                            src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                        <p><br>لوازم خانگی</p>
                    </div>
                    <div class="d-xxl-none d-xl-none d-lg-none d-sm-block d-block col-lg col-6 col-md-3 col-sm-4"><img
                            src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                        <p><br>کیف و کفش</p>
                    </div>
                    <div class="d-xxl-none d-xl-none d-lg-none d-sm-block d-block col-lg col-6 col-md-3 col-sm-4"><img
                            src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                        <p><br>انواع مواد غذایی</p>
                    </div>

                </div>
            </div>
        </center>
        <!-- پشنهاد دیجی کالا -->

        <!-- محبوب ترین برندها -->
        <!-- کامپیوتر -->
        <div class="d-xxl-block d-xl-block d-lg-block d-sm-none d-none">

            <div class="row mt-5 p-5 col   col-lg"
                style="background-color: aliceblue; border-style: solid; border-width: 1px; border-color: lightgrey; border-radius: 20px;">
                <div class="row">
                    <div class="row mb-3">
                        <center style="background-color: white;">
                            <div class="col"></div>
                            <div class="col">
                                <p style="font-size: 20px;">محبوب‌ترین برندها</p>
                            </div>
                            <div class="col"></div>
                        </center>
                    </div>
                    <div class="col"><img src="https://picsum.photos/300/300" class="img-fluid" alt="...">
                    </div>
                    <div class="col"><img src="https://picsum.photos/300/300" class="img-fluid" alt="...">
                    </div>
                    <div class="col"><img src="https://picsum.photos/300/300" class="img-fluid" alt="...">
                    </div>
                    <div class="col"><img src="https://picsum.photos/300/300" class="img-fluid" alt="...">
                    </div>
                    <div class="col"><img src="https://picsum.photos/300/300" class="img-fluid" alt="...">
                    </div>
                    <div class="col"><img src="https://picsum.photos/300/300" class="img-fluid" alt="...">
                    </div>
                    <div class="col"><img src="https://picsum.photos/300/300" class="img-fluid" alt="...">
                    </div>
                    <div class="col"><img src="https://picsum.photos/300/300" class="img-fluid" alt="...">
                    </div>
                    <div class="col"><img src="https://picsum.photos/300/300" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <!-- گوشی -->
        <div style="background-color: white;">
            <center>
                <div class="row mb-3 d-xl-none d-lg-none d-sm-block d-block">
                    <center>
                        <div class="col"></div>
                        <div class="col">
                            <p style="font-size: 20px; margin-top: 5%;">محبوب‌ترین برندها</p>
                        </div>
                        <div class="col"></div>
                    </center>
                </div>
                <div class="row">
                    <div class="col-sm-4 d-xl-none d-lg-none d-sm-block d-block col-lg col-6 mt-4"><img
                            src="https://picsum.photos/300/300" class="img-fluid" alt="..."></div>
                    <div class="col-sm-4 d-xl-none d-lg-none d-sm-block d-block col-lg col-6 mt-4"><img
                            src="https://picsum.photos/300/300" class="img-fluid" alt="..."></div>
                    <div class="col-sm-4 d-xl-none d-lg-none d-sm-block d-block col-lg col-6 mt-4"><img
                            src="https://picsum.photos/300/300" class="img-fluid" alt="..."></div>
                    <div class="col-sm-4 d-xl-none d-lg-none d-sm-block d-block col-lg col-6 mt-4"><img
                            src="https://picsum.photos/300/300" class="img-fluid" alt="..."></div>
                    <div class="col-sm-4 d-xl-none d-lg-none d-sm-block d-block col-lg col-6 mt-4"><img
                            src="https://picsum.photos/300/300" class="img-fluid" alt="..."></div>
                    <div class="col-sm-4 d-xl-none d-lg-none d-sm-block d-block col-lg col-6 mt-4"><img
                            src="https://picsum.photos/300/300" class="img-fluid" alt="..."></div>
                    <div class="col-sm-4 d-xl-none d-lg-none d-sm-block d-block col-lg col-6 mt-4"><img
                            src="https://picsum.photos/300/300" class="img-fluid" alt="..."></div>
                    <div class="col-sm-4 d-xl-none d-lg-none d-sm-block d-block col-lg col-6 mt-4"><img
                            src="https://picsum.photos/300/300" class="img-fluid" alt="..."></div>
                    <div class="col-sm-4 d-xl-none d-lg-none d-md-block d-sm-block d-none col-lg col-6 mt-4"><img
                            src="https://picsum.photos/300/300" class="img-fluid" alt="..."></div>
                </div>
            </center>
        </div>


        <!-- محبوب ترین برندها -->

        <center>
            <div class="row mt-3">
                <div class="col-12 col-lg-6 mt-3"><img src="https://picsum.photos/800/300"
                        style="border-radius: 20px;" class="img-fluid" alt="...">
                </div>
                <div class="col-12 col-lg-6 mt-3"><img src="https://picsum.photos/800/300"
                        style="border-radius: 20px;" class="img-fluid" alt="...">
                </div>
            </div>
        </center>


        <!-- طرح گوشی -->

        <!--    کامپیوتر -->

        <div class="  row mt-4 p-4"
            style="background-color: white; border-style: solid; border-width: 1px; border-color: lightgrey; border-radius: 20px;">
            <center class="d-lg-none d-block">
                <p><button type="button" class="btn btn-dark">جهت سفارش کلیک کنید</button></p>
            </center>
            <div class="d-xxl-block d-xl-block d-lg-block d-sm-none d-none col-lg col-12" style="padding: 0px;">
                <div class="row" id="pics">
                    <h4>گوشی موبایل</h4>
                    <h6>بر اساس بازدیدهای شما</h6>
                    <div class="col mt-4 ms-4"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-4"><img src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                    </div>
                </div>
                <div id="pics" class="row">
                    <div class="col mt-4 ms-4"><img src="https://picsum.photos/200/200" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-4"><img src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                    </div>
                </div>
                <center>
                    <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i></p>
                </center>
            </div>


            <div class="d-xxl-block d-xl-block d-lg-block d-sm-none d-none col-lg col-12" style="padding: 0px;">
                <div class="row" id="pics">
                    <h4>گوشی موبایل</h4>
                    <h6>بر اساس بازدیدهای شما</h6>
                    <div class="col mt-4 ms-4"><img src="https://picsum.photos/201/200" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-4"><img src="https://picsum.photos/201/200" class="img-fluid" alt="...">
                    </div>
                </div>
                <div id="pics" class="row">
                    <div class="col mt-4 ms-4"><img src="https://picsum.photos/201/200" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-4"><img src="https://picsum.photos/201/200" class="img-fluid" alt="...">
                    </div>
                </div>
                <center>
                    <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i></p>
                </center>
            </div>

            <div class="d-xxl-block d-xl-block d-lg-block d-sm-none d-none col-lg col-12" style="padding: 0px;">
                <div class="row" id="pics">
                    <h4>گوشی موبایل</h4>
                    <h6>بر اساس بازدیدهای شما</h6>
                    <div class="col mt-4 ms-4"><img src="https://picsum.photos/202/200" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-4"><img src="https://picsum.photos/202/200" class="img-fluid" alt="...">
                    </div>
                </div>
                <div id="pics" class="row">
                    <div class="col mt-4 ms-4"><img src="https://picsum.photos/202/200" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-4"><img src="https://picsum.photos/202/200" class="img-fluid" alt="...">
                    </div>
                </div>
                <center>
                    <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i></p>
                </center>
            </div>


            <div class="d-xxl-block d-xl-block d-lg-block d-sm-none d-none col-lg col-12" style="padding: 0px;">
                <div class="row" id="pics">
                    <h4>گوشی موبایل</h4>
                    <h6>بر اساس بازدیدهای شما</h6>
                    <div class="col mt-4 ms-4"><img src="https://picsum.photos/203/200" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-4"><img src="https://picsum.photos/203/200" class="img-fluid" alt="...">
                    </div>
                </div>
                <div id="pics" class="row">
                    <div class="col mt-4 ms-4"><img src="https://picsum.photos/203/200" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-4"><img src="https://picsum.photos/203/200" class="img-fluid" alt="...">
                    </div>
                </div>
                <center>
                    <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i></p>
                </center>
            </div>
        </div>


        <!-- گوشی -->
        <center class="d-xl-none d-lg-none d-sm-block d-block">
            <div class=" row mt-4 p-4"
                style="background-color: white; border-style: solid; border-width: 1px; border-color: lightgrey; border-radius: 20px;">
                <div class=" col-lg col-12 col-sm-6 col-md-6" style="padding: 0px;">
                    <div class="row" id="pics">
                        <h4>گوشی موبایل</h4>
                        <h6>بر اساس بازدیدهای شما</h6>
                        <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                        <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                    </div>
                    <div id="pics" class="row">
                        <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                        <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                    </div>
                    <center>
                        <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i>
                        </p>
                    </center>
                </div>


                <div class="col-lg col-12 col-sm-6 col-md-6" style="padding: 0px;">
                    <div class="row" id="pics">
                        <h4>گوشی موبایل</h4>
                        <h6>بر اساس بازدیدهای شما</h6>
                        <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                        <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                    </div>
                    <div id="pics" class="row">
                        <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                        <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                    </div>
                    <center>
                        <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i>
                        </p>
                    </center>
                </div>

                <div class="col-lg col-12 col-sm-6 col-md-6" style="padding: 0px;">
                    <div class="row" id="pics">
                        <h4>گوشی موبایل</h4>
                        <h6>بر اساس بازدیدهای شما</h6>
                        <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                        <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                    </div>
                    <div id="pics" class="row">
                        <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                        <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                    </div>
                    <center>
                        <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i>
                        </p>
                    </center>
                </div>


                <div class=" col-lg col-12 col-sm-6 col-md-6" style="padding: 0px;">
                    <div class="row" id="pics">
                        <h4>گوشی موبایل</h4>
                        <h6>بر اساس بازدیدهای شما</h6>
                        <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                        <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                    </div>
                    <div id="pics" class="row">
                        <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                        <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                                alt="..."></div>
                    </div>
                    <center>
                        <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i>
                        </p>
                    </center>
                </div>
            </div>
        </center>
        <!-- طرح گوشی -->






        <!-- ارسال فوری -->

        <!-- کامپیوتر -->
        <div class="d-xxl-block d-xl-block d-lg-block d-sm-none d-none">
            <div class="row  p-2" style="border-radius: 20px; background-color: rgb(149, 23, 187);">
                <div class="col-lg-3 d-xxl-block d-xl-block d-lg-block d-sm-none d-none  p-5"
                    style="margin-top: 100px;">
                    <img src="https://picsum.photos/220/300" class="img-fluid" alt="...">
                </div>
                <!-- first -->
                <div class="col-lg-9 pb-3 " style="border-radius: 20px; background-color:white;">
                    <button type="button" class="d-xxl-block d-xl-block d-lg-block d-sm-none d-none btn btn-light">
                        <p style="margin-top: 20px; font-size: 20px;">ارسال فوری</p>
                    </button>
                    <div class="row">
                        <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"><img
                                src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                        <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"><img
                                src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                        <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"><img
                                src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                        <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"><img
                                src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                        <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"><img
                                src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                        <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"><img
                                src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                    </div>
                    <!-- f -->
                    <div class="row mt-3">
                        <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"><img
                                src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                        <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"><img
                                src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                        <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"><img
                                src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                        <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"><img
                                src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                        <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"><img
                                src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                        <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"><img
                                src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- گوشی -->

        <!-- first -->
        <div class="col-lg-9 pb-3 " style="border-radius: 20px; background-color:white;">
            <center><button type="button" class="d-xl-none d-lg-none d-sm-block d-block btn btn-light">
                    <p style="margin-top: 20px; font-size: 20px;">ارسال فوری</p>
                </button></center>
            <div class="row">
                <div class="col d-xl-none d-lg-none d-sm-block d-block col-6 col-sm-4 col-md-3 mt-3"><img
                        src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                <div class="col d-xl-none d-lg-none d-sm-block d-block col-6 col-sm-4 col-md-3 mt-3"><img
                        src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                <div class="col d-xl-none d-lg-none d-sm-block d-block col-6 col-sm-4 col-md-3 mt-3"><img
                        src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                <div class="col d-xl-none d-lg-none d-sm-block d-block col-6 col-sm-4 col-md-3 mt-3"><img
                        src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                <div class="col d-xl-none d-lg-none d-sm-block d-block col-6 col-sm-4 col-md-3 mt-3"><img
                        src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                <div class="col d-xl-none d-lg-none d-sm-block d-block col-6 col-sm-4 col-md-3 mt-3"><img
                        src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>

                <div class="col d-xl-none d-lg-none d-sm-block d-block col-6 col-sm-4 col-md-3 mt-3"><img
                        src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                <div class="col d-xl-none d-lg-none d-sm-block d-block col-6 col-sm-4 col-md-3 mt-3"><img
                        src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                <div class="col d-xl-none d-lg-none d-sm-block d-block col-6 col-sm-4 col-md-3 mt-3"><img
                        src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                <div class="col d-xl-none d-lg-none d-sm-block d-block col-6 col-sm-4 col-md-3 mt-3"><img
                        src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                <div class="col d-xl-none d-lg-none d-sm-block d-block col-6 col-sm-4 col-md-3 mt-3"><img
                        src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
                <div class="col d-xl-none d-lg-none d-sm-block d-block col-6 col-sm-4 col-md-3 mt-3"><img
                        src="https://picsum.photos/200/300" class="img-fluid" alt="..."></div>
            </div>
        </div>
    </div>
    </div>
    <!-- ارسال فوری -->

    <!-- دیجی کلاب -->
    <!-- کامپیوتر -->
    <div class=" row bg-primary mt-2 p-3 " style="width:101%; border-radius: 20px;"><button type="button"
            class="d-xl-none d-lg-none d-sm-block d-block btn btn-info">مشاهده بیشتر</button>
        <div class="d-xxl-block d-xl-block d-lg-block d-sm-none d-none col-lg col-12 p-3">
            <img src="https://picsum.photos/400/50" class="img-fluid" alt="...">
        </div>


        <div class="col-lg col-12">
            <div class="row">
                <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"></div>
                <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"><img
                        src="https://picsum.photos/200/300"
                        style="border-radius: 0px 20px 20px 0px ; height: 70px; width: 276px;" class="img-fluid"
                        alt="..."></div>
                <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"><img
                        src="https://picsum.photos/200/300" style="height: 70px; width: 276px;" class="img-fluid"
                        alt="..."></div>
                <div class="col d-xxl-block d-xl-block d-lg-block d-sm-none d-none"><img
                        src="https://picsum.photos/200/300"
                        style="border-radius: 20px 0px 0px 20px ;  height: 70px; width: 276px;" class="img-fluid"
                        alt="..."></div>
            </div>
        </div>
    </div>
    <!-- گوشی -->

    <div class="d-xl-none d-lg-none d-sm-block d-block row bg-primary mt-2 p-3 "
        style="width:101%; border-radius: 20px;">
        <center>
            <div class="col-lg col-12 p-3">
                <img style="border-radius: 20px 0px 20px 0px;" src="https://picsum.photos/200/100"
                    class="img-fluid" alt="...">
            </div>
        </center>



        <div class="col-lg col-12">
            <div class="row">
                <div class="col-4"><img src="https://picsum.photos/200/300"
                        style="border-radius: 0px 20px 20px 0px ; height: 70px; width: 276px;" class="img-fluid"
                        alt="..."></div>
                <div class="col-4"><img src="https://picsum.photos/200/300" style="height: 70px; width: 276px;"
                        class="img-fluid" alt="...">
                </div>
                <div class="col-4"><img src="https://picsum.photos/200/300"
                        style="border-radius: 20px 0px 0px 20px ;  height: 70px; width: 276px;" class="img-fluid"
                        alt="..."></div>
            </div>
        </div>
    </div>
    <!-- دیجی کلاب -->




    <!-- طرح گوشی -->

    <!--    کامپیوتر -->

    <div class="  row mt-4 p-4"
        style="background-color: white; border-style: solid; border-width: 1px; border-color: lightgrey; border-radius: 20px;">
        <center class="d-lg-none d-block">
            <p><button type="button" class="btn btn-dark">جهت سفارش کلیک کنید</button></p>
        </center>
        <div class="d-xxl-block d-xl-block d-lg-block d-sm-none d-none col-lg col-12" style="padding: 0px;">
            <div class="row" id="pics">
                <h4>گوشی موبایل</h4>
                <h6>بر اساس بازدیدهای شما</h6>
                <div class="col mt-4 ms-4"><img src="https://picsum.photos/200/200" class="img-fluid"
                        alt="..."></div>
                <div class="col mt-4"><img src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                </div>
            </div>
            <div id="pics" class="row">
                <div class="col mt-4 ms-4"><img src="https://picsum.photos/200/200" class="img-fluid"
                        alt="..."></div>
                <div class="col mt-4"><img src="https://picsum.photos/200/200" class="img-fluid" alt="...">
                </div>
            </div>
            <center>
                <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i></p>
            </center>
        </div>


        <div class="d-xxl-block d-xl-block d-lg-block d-sm-none d-none col-lg col-12" style="padding: 0px;">
            <div class="row" id="pics">
                <h4>گوشی موبایل</h4>
                <h6>بر اساس بازدیدهای شما</h6>
                <div class="col mt-4 ms-4"><img src="https://picsum.photos/201/200" class="img-fluid"
                        alt="..."></div>
                <div class="col mt-4"><img src="https://picsum.photos/201/200" class="img-fluid" alt="...">
                </div>
            </div>
            <div id="pics" class="row">
                <div class="col mt-4 ms-4"><img src="https://picsum.photos/201/200" class="img-fluid"
                        alt="..."></div>
                <div class="col mt-4"><img src="https://picsum.photos/201/200" class="img-fluid" alt="...">
                </div>
            </div>
            <center>
                <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i></p>
            </center>
        </div>

        <div class="d-xxl-block d-xl-block d-lg-block d-sm-none d-none col-lg col-12" style="padding: 0px;">
            <div class="row" id="pics">
                <h4>گوشی موبایل</h4>
                <h6>بر اساس بازدیدهای شما</h6>
                <div class="col mt-4 ms-4"><img src="https://picsum.photos/202/200" class="img-fluid"
                        alt="..."></div>
                <div class="col mt-4"><img src="https://picsum.photos/202/200" class="img-fluid" alt="...">
                </div>
            </div>
            <div id="pics" class="row">
                <div class="col mt-4 ms-4"><img src="https://picsum.photos/202/200" class="img-fluid"
                        alt="..."></div>
                <div class="col mt-4"><img src="https://picsum.photos/202/200" class="img-fluid" alt="...">
                </div>
            </div>
            <center>
                <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i></p>
            </center>
        </div>


        <div class="d-xxl-block d-xl-block d-lg-block d-sm-none d-none col-lg col-12" style="padding: 0px;">
            <div class="row" id="pics">
                <h4>گوشی موبایل</h4>
                <h6>بر اساس بازدیدهای شما</h6>
                <div class="col mt-4 ms-4"><img src="https://picsum.photos/203/200" class="img-fluid"
                        alt="..."></div>
                <div class="col mt-4"><img src="https://picsum.photos/203/200" class="img-fluid" alt="...">
                </div>
            </div>
            <div id="pics" class="row">
                <div class="col mt-4 ms-4"><img src="https://picsum.photos/203/200" class="img-fluid"
                        alt="..."></div>
                <div class="col mt-4"><img src="https://picsum.photos/203/200" class="img-fluid" alt="...">
                </div>
            </div>
            <center>
                <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i></p>
            </center>
        </div>
    </div>


    <!-- گوشی -->
    <center class="d-xl-none d-lg-none d-sm-block d-block">
        <div class=" row mt-4 p-4"
            style="background-color: white; border-style: solid; border-width: 1px; border-color: lightgrey; border-radius: 20px;">
            <div class=" col-lg col-12 col-sm-6 col-md-6" style="padding: 0px;">
                <div class="row" id="pics">
                    <h4>گوشی موبایل</h4>
                    <h6>بر اساس بازدیدهای شما</h6>
                    <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                </div>
                <div id="pics" class="row">
                    <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                </div>
                <center>
                    <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i></p>
                </center>
            </div>


            <div class="col-lg col-12 col-sm-6 col-md-6" style="padding: 0px;">
                <div class="row" id="pics">
                    <h4>گوشی موبایل</h4>
                    <h6>بر اساس بازدیدهای شما</h6>
                    <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                </div>
                <div id="pics" class="row">
                    <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                </div>
                <center>
                    <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i></p>
                </center>
            </div>

            <div class="col-lg col-12 col-sm-6 col-md-6" style="padding: 0px;">
                <div class="row" id="pics">
                    <h4>گوشی موبایل</h4>
                    <h6>بر اساس بازدیدهای شما</h6>
                    <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                </div>
                <div id="pics" class="row">
                    <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                </div>
                <center>
                    <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i></p>
                </center>
            </div>


            <div class=" col-lg col-12 col-sm-6 col-md-6" style="padding: 0px;">
                <div class="row" id="pics">
                    <h4>گوشی موبایل</h4>
                    <h6>بر اساس بازدیدهای شما</h6>
                    <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                </div>
                <div id="pics" class="row">
                    <div class="col mt-2 ms-3"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                    <div class="col mt-2"><img src="https://picsum.photos/200/300" class="img-fluid"
                            alt="..."></div>
                </div>
                <center>
                    <p style="margin-top: 5%; color: rgb(41, 92, 233);">مشاهده <i class="fa fa-angle-left"></i></p>
                </center>
            </div>
        </div>
    </center>
    <!-- طرح گوشی -->


    <!-- پرفروشترین کالاها -->

    <!-- کامپیوتر -->
    <div class="d-xxl-block d-xl-block d-lg-block d-sm-none d-none row" style="background-color: white;">
        <div class="col">
            <center>
                <div class="row">
                    <div class="col"></div>
                    <div class="col"><br>
                        <p style="font-size: 20px;"> <i style="color:rgb(196, 196, 11);" class="fal fa-fire"></i>
                            پرفروشترین کالاها</p>
                    </div>
                    <div class="col"></div>
                </div>
            </center>


            <div class="row mt-3">
                <div class="col-6 col-lg"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">1</p>
                    <p id="number2">گوشی موبایل سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">4</p>
                    <p id="number2">گوشی موبایل سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">7</p>
                    <p id="number2">گوشی موبایل سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">10</p>
                    <p id="number2">گوشی موبایل سامسونگ<br>دو سیمکارت</p>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-6  col-lg"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">2</p>
                    <p id="number2">گوشی موبایل سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">5</p>
                    <p id="number2">گوشی موبایل سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">8</p>
                    <p id="number2">گوشی موبایل سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">11</p>
                    <p id="number2">گوشی موبایل سامسونگ<br>دو سیمکارت</p>
                </div>
            </div>


            <div class="row mt-3">
                <div class="col-6  col-lg"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">3</p>
                    <p id="number2">گوشی موبایل سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">6</p>
                    <p id="number2">گوشی موبایل سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">9</p>
                    <p id="number2">گوشی موبایل سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">12</p>
                    <p id="number2">گوشی موبایل سامسونگ<br>دو سیمکارت</p>
                </div>
            </div>

        </div>
    </div>



    <!-- گوشی -->
    <div class="d-xl-none d-lg-none d-sm-block d-block row" style="background-color: white;">
        <div class="col">
            <center>
                <div class="row">
                    <div class="col"></div>
                    <div class="col"><br><i style="color: rgb(138, 135, 135);" class="fal fa-fire"></i>
                        <p style="font-size: 20px;"> پرفروشترین کالاها</p>
                    </div>
                    <div class="col"></div>
                </div>
            </center>


            <div class="row mt-3 ms-4">
                <div class="col-6  col-lg mb-4"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">1</p>
                    <p id="number3">گوشی موبایل<br> سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg mb-4"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">7</p>
                    <p id="number3">گوشی موبایل<br> سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg mb-4"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">2</p>
                    <p id="number3">گوشی موبایل<br> سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg mb-4"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">8</p>
                    <p id="number3">گوشی موبایل<br> سامسونگ<br>دو سیمکارت</p>
                </div>
            </div>

            <div class="row ms-4">
                <div class="col-6  col-lg mb-4"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">3</p>
                    <p id="number3">گوشی موبایل<br> سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg mb-4"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">9</p>
                    <p id="number3">گوشی موبایل<br> سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg mb-4"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">4</p>
                    <p id="number3">گوشی موبایل<br> سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg mb-4"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">10</p>
                    <p id="number3">گوشی موبایل<br> سامسونگ<br>دو سیمکارت</p>
                </div>
            </div>


            <div class="row ms-4">
                <div class="col-6  col-lg mb-4"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">5</p>
                    <p id="number3">گوشی موبایل<br> سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg mb-4"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">11</p>
                    <p id="number3">گوشی موبایل<br> سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg mb-4"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">6</p>
                    <p id="number3">گوشی موبایل<br> سامسونگ<br>دو سیمکارت</p>
                </div>
                <div class="col-6  col-lg mb-4"><img style="height: 100px;" src="https://picsum.photos/200/300"
                        class="img-fluid" alt="...">
                    <p id="number">12</p>
                    <p id="number3">گوشی موبایل<br> سامسونگ<br>دو سیمکارت</p>
                </div>
            </div>

        </div>
    </div>

    <!-- پرفروشترین کالاها -->


    <div class="row">
        <div class="col">
            <button style="width: 100%; height: 100%;" type="button" class="btn btn-secondary mt-5">
                <p style="padding-top: 15px; font-size: 20px;">تخفیف ویژه</p>
            </button>
        </div>
    </div>

    <div class="row d-lg-block d-none" style="margin-top: 20%;">
        <div class="col"><a class="navbar-brand" href="#"><img src="https://picsum.photos/200/100"
                    class="img-fluid" style="height: 30px;" alt="..."></a></div><br><br>
        <p>تلفن پشتیبانی ۶۱۹۳۰۰۰۰ - ۰۲۱

            |
            ۷ روز هفته، ۲۴ ساعته پاسخگوی شما هستیم</p>
    </div>

    <br><br><br>

    <div class="row " style="background-color: seashell;">
        <div class="col d-lg-block d-none">امکان تحویل اکسپرس</div>
        <div class="col d-lg-block d-none">امکان پرداخت در محل</div>
        <div class="col d-lg-block d-none">7 روزه هفته , 24 ساعته</div>
        <div class="col d-lg-block d-none">هفت روز ضمانت بازگشت کالا</div>
        <div class="col d-lg-block d-none">ضمانت اصل بودن کالا</div>
    </div>



    <div class="row mt-5">
        <div class="col d-lg-block d-none">
            <p>با دیجی کالا</p>

            <br>
            اتاق خبر دیجی‌کالا<br>
            فروش در دیجی‌کالا<br>
            فرصت‌های شغلی<br>
            گزارش تخلف در دیجی‌کالا<br>
            تماس با دیجی‌کالا<br>
            درباره دیجی‌کالا</p>
        </div>

        <div class="col d-lg-block d-none">
            <p>خدمات مشتریان<br>

                <br><br>
                پاسخ به پرسش‌های متداول<br>
                رویه‌های بازگرداندن کالا<br>
                شرایط استفاده<br>
                حریم خصوصی<br>
                گزارش باگ
            </p>
        </div>

        <div class="col d-lg-block d-none">
            <p>راهنمای خرید از دیجی‌کالا

                <br><br>
                نحوه ثبت سفارش<br>
                رویه ارسال سفارش<br>
                شیوه‌های پرداخت
            </p>
        </div>

        <div class="col d-lg-block d-none">
            <p>همراه ما باشید!
                <br><br>
                با ثبت ایمیل، از جدید‌ترین تخفیف‌ها با‌خبر شوید<br>
                ایمیل شما
            </p>
        </div>

    </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="JS/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
