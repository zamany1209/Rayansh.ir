<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="آکادمی رایانش | آموزش فتوشاپ" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>رایانش</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style -menu.min.css" rel="stylesheet">
    <link href="/css/footer.min.css" rel="stylesheet">
    <link href="/css/style.min.css" rel="stylesheet">
    <link href="/css/owl.carousel.min.css" rel="stylesheet">
    <script src="/js/jquery.min.js" type="text/javascript">
    </script>
    <script src="/js/bootstrap.min.js">
    </script>
    <script src="/js/jquery.mixitup.min.js" type="text/javascript">
    </script>
</head>
<body class="sticky-header">
    <header id="header-menu">
        <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" style="background: none; border: none;" type="button"><img alt="" src="img/menu-whte.png"></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @if($test_user)
                        <li class='nav-item'>
                        <a class='nav-link' href='login.php' id='s'>ورود</a>
                    </li>
                    <li class='nav-item active'>
                        <a class='nav-link' href='login.php' id='s'>ثبت نام<span class='sr-only'>(current)</span></a>
                    </li>
                    @else
                    <li class='nav-item dropdown'>
                        <a aria-expanded='false' aria-haspopup='true' class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' id='navbarDropdown' role='button'><img src='img/user.svg' height='29px' alt='' srcset=''><span id='user_clayent_R'>$use_clayent</span></a>
                        <div aria-labelledby='navbarDropdown' class='dropdown-menu'>
                            <a class='dropdown-item' href='profile/profile.php'>ویرایش اطلاعات</a> <a class='dropdown-item' href='#'>علاقه مندی ها</a>
                            <div class='dropdown-divider'></div><a class='dropdown-item text-center' href='admin/exsit.php'>خروج</a>
                        </div>
                    </li>
                    @endif
                </ul>
            <div class=" col-lg-6 col-md-6"></div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="insert-teacher/insert-modares.php" id="s">جذب مدرس</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Admin/index8.html" id="s">اطلاعات</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">اموزش</a>
                        <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                            <a class="dropdown-item" href="#">CSS</a> <a class="dropdown-item" href="#">HTML5</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">JS</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Abute.php" id="s">درباره ما</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php" id="s">خانه<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a aria-disabled="true" class="nav-link disabled" href="#" tabindex="-1">Rayansh.ir</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="col-lg-12 col-md-12 col-sm-12 backerane-header">
        <div class="container">
            <div class="carousel-caption rayaneshe content">
                <h3></h3>
                <p></p>
                <h3></h3>
                <h2 class="p-3">به <span>آکادمی</span> <span>رایانش</span> خوش آمدید</h2>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-md-offset-12">
        <div class="container"></div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 backerane-header-2">
        <div class="carousel-caption">
            <div class="center">
                <div class="col-lg-6 col-md-6 col-sm-4 container text-center grop-cape"><img alt="" class="cape" src="img/cape.png" srcset=""></div>
                <form action="" class="col-lg-8 col-md-7 col-ms-7 col-md-offset-12 form-serch text-center">
                    <input class="bg-dark col-lg-3 col-md-3 col-sm-3 col-sm-offset-12 btn text-white" type="submit" value="جستجو"> <input class="col-lg-8 col-md-8 col-sm-8 btn" id="sherch" name="sherch" type="search">
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 con-center">
                <div class="center row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="elaneyeh">
                            <img alt="" src="../img/22.png" srcset="">
                            <h5 class="tanha text-center p-2">بستر های با کیفیت</h5>
                            <p class="tanha text-center font-sm">لورم ایپسوم متن ساختگی با تولید ساختگی نامفهوم از صنعت چاپ. و با استفاده از طراحان گرافیک است. چابگرها و متون بلکه روزنامه ومجله</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="elaneyeh">
                            <img alt="" src="../img/23.png" srcset="">
                            <h5 class="tanha text-center p-2">کنترل محصولات</h5>
                            <p class="tanha text-center font-sm">لورم ایپسوم متن ساختگی با تولید ساختگی نامفهوم از صنعت چاپ. و با استفاده از طراحان گرافیک است. چابگرها و متون بلکه روزنامه ومجله</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="elaneyeh">
                            <img alt="" src="../img/24.png" srcset="">
                            <h5 class="tanha text-center p-2">معامله امن</h5>
                            <p class="tanha text-center font-sm">لورم ایپسوم متن ساختگی با تولید ساختگی نامفهوم از صنعت چاپ. و با استفاده از طراحان گرافیک است. چابگرها و متون بلکه روزنامه ومجله</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="elaneyeh">
                            <img alt="" src="../img/25.png" srcset="">
                            <h5 class="tanha text-center p-2">خرید و فروش آسان</h5>
                            <p class="tanha text-center font-sm">لورم ایپسوم متن ساختگی با تولید ساختگی نامفهوم از صنعت چاپ. و با استفاده از طراحان گرافیک است. چابگرها و متون بلکه روزنامه ومجله</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="text-center container">
            <nav class="navbar navbar-expand-lg nav-border navbar-expand-md navbar-expand-sm navbar-light bg-raya col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <ul class="navbar-nav mr-auto col-lg-5 col-md-5 col-sm-5 con-center">
                    <li class="nav-item dropdown con-center">
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle tanha" data-toggle="dropdown" href="#" id="filter-icon" role="button">همه موارد</a>
                        <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                            <a class="dropdown-item tanha"><button class="filter button filter-btn" data-filter='all' onclick="ALLE()">همه موارد</button></a> <a class="dropdown-item tanha"><button class="filter button filter-btn" data-filter='.develope' onclick="develope()">برنامه نویسی</button></a> <a class="dropdown-item tanha"><button class="filter button filter-btn" data-filter='.potoshop' onclick="potoshop()">فتوشاپ</button></a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
        <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 con-center">
                <div class="center row clearfix" id="mixcontainer">
                    @foreach($data_rayansh as $data_rayansh)
                    <div class="col-lg-3 col-md-6 col-sm-12 mt-3 mix {{ $data_rayansh->Groop }}">
                        <div class="ko-cvx">
                            <div class="col-lg-12 col-md-11 col-sm-11 mod-cvx">
                                <a href="1209/{{  $data_rayansh->id }}"><img alt="" src="../img/{{ $data_rayansh->url_pikcher }}" srcset=""></a>
                                <h6 class="tanha text-right mt-2">{{ $data_rayansh->text_header }}</h6>
                                <p class="text-right tanha font-vm font-cm">تولید کننده اکادمی <a href="#">رایانش</a></p>
                                <div class="row">
                                    <div class="text-left tanha col-lg-5 col-md-5 col-sm-5 float-right">
                                        <a class="font-cm">{{ $data_rayansh->Pole }}</a>
                                    </div>
                                    <div class="text-right tanha col-lg-7 col-md-7 col-sm-7 float-left acte">
                                        <a class="font-cm">{{ $data_rayansh->text_header }}</a>
                                    </div>
                                </div>
                                <hr class="text-center">
                                <div class="row">
                                    <div class="col-6 p-1 font-vm comnter-folooo"><img src="../img/wiuo.png" alt=""><a>{{ $data_rayansh->wiuo }}</a><img src="../img/like.png" alt=""><a>{{ $data_rayansh->like_po }}</a></div>
                                    <div class="col-6 text-right acte insert-admin"><a class="font-smsm">{{ $data_rayansh->family_teacher }}</a> <img alt="" src="../img/user.png" srcset=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 mt-4 mb-3">
        <div class="text-center container">
            <nav class="navbar navbar-expand-lg nav-border navbar-expand-md navbar-expand-sm navbar-light bg-raya col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <ul class="navbar-nav mr-auto col-lg-5 col-md-5 col-sm-5 con-center">
                    <li class="nav-item dropdown con-center">
                        <a class="nav-link tanha">پر بازدید ترین ها</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-3">
        <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11 con-center">
                <div class="center row clearfix" id="">
                    <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                        <div class="ko-cvx">
                            <div class="col-lg-12 col-md-11 col-sm-11 mod-cvx shadow shawod-hover">
                                <img alt="" src="../img/img-cvx.png" srcset="">
                                <h6 class="tanha text-right mt-2">قالب سفارشی werteros</h6>
                                <p class="text-right tanha font-vm font-cm">تولید کننده اکادمی <a href="#">رایانش</a></p>
                                <div class="row">
                                    <div class="text-left tanha col-lg-5 col-md-5 col-sm-5 float-right">
                                        <a class="font-cm">12 تومان</a>
                                    </div>
                                    <div class="text-right tanha col-lg-7 col-md-7 col-sm-7 float-left acte">
                                        <a class="font-cm">قالب های HTML</a>
                                    </div>
                                </div>
                                <hr class="text-center">
                                <div class="row">
                                    <div class="col-6 p-1 font-vm comnter-folooo"><img src="../img/wiuo.png" alt=""><a>12</a><img src="../img/like.png" alt=""><a>5</a></div>
                                    <div class="col-6 text-right acte insert-admin"><a class="font-smsm" href="#">زمانیان</a> <img alt="" src="../img/user.png" srcset=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                        <div class="ko-cvx">
                            <div class="col-lg-12 col-md-11 col-sm-11 mod-cvx shadow shawod-hover">
                                <img alt="" src="../img/img-cvx.png" srcset="">
                                <h6 class="tanha text-right mt-2">قالب سفارشی werteros</h6>
                                <p class="text-right tanha font-vm font-cm">تولید کننده اکادمی <a href="#">رایانش</a></p>
                                <div class="row">
                                    <div class="text-left tanha col-lg-5 col-md-5 col-sm-5 float-right">
                                        <a class="font-cm">12 تومان</a>
                                    </div>
                                    <div class="text-right tanha col-lg-7 col-md-7 col-sm-7 float-left acte">
                                        <a class="font-cm">قالب های HTML</a>
                                    </div>
                                </div>
                                <hr class="text-center">
                                <div class="row">
                                    <div class="col-6 p-1 font-vm comnter-folooo"><img src="../img/wiuo.png" alt=""><a>12</a><img src="../img/like.png" alt=""><a>5</a></div>
                                    <div class="col-6 text-right acte insert-admin"><a class="font-smsm" href="#">زمانیان</a> <img alt="" src="../img/user.png" srcset=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                        <div class="ko-cvx">
                            <div class="col-lg-12 col-md-11 col-sm-11 mod-cvx shadow shawod-hover">
                                <img alt="" src="../img/img-cvx.png" srcset="">
                                <h6 class="tanha text-right mt-2">قالب سفارشی werteros</h6>
                                <p class="text-right tanha font-vm font-cm">تولید کننده اکادمی <a href="#">رایانش</a></p>
                                <div class="row">
                                    <div class="text-left tanha col-lg-5 col-md-5 col-sm-5 float-right">
                                        <a class="font-cm">12 تومان</a>
                                    </div>
                                    <div class="text-right tanha col-lg-7 col-md-7 col-sm-7 float-left acte">
                                        <a class="font-cm">قالب های HTML</a>
                                    </div>
                                </div>
                                <hr class="text-center">
                                <div class="row">
                                    <div class="col-6 p-1 font-vm comnter-folooo"><img src="../img/wiuo.png" alt=""><a>12</a><img src="../img/like.png" alt=""><a>5</a></div>
                                    <div class="col-6 text-right acte insert-admin"><a class="font-smsm" href="#">زمانیان</a> <img alt="" src="../img/user.png" srcset=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                        <div class="ko-cvx">
                            <div class="col-lg-12 col-md-11 col-sm-11 mod-cvx shadow shawod-hover">
                                <img alt="" src="../img/img-cvx.png" srcset="">
                                <h6 class="tanha text-right mt-2">قالب سفارشی werteros</h6>
                                <p class="text-right tanha font-vm font-cm">تولید کننده اکادمی <a href="#">رایانش</a></p>
                                <div class="row">
                                    <div class="text-left tanha col-lg-5 col-md-5 col-sm-5 float-right">
                                        <a class="font-cm">12 تومان</a>
                                    </div>
                                    <div class="text-right tanha col-lg-7 col-md-7 col-sm-7 float-left acte">
                                        <a class="font-cm">قالب های HTML</a>
                                    </div>
                                </div>
                                <hr class="text-center">
                                <div class="row">
                                    <div class="col-6 p-1 font-vm comnter-folooo"><img src="../img/wiuo.png" alt=""><a>12</a><img src="../img/like.png" alt=""><a>5</a></div>
                                    <div class="col-6 text-right acte insert-admin"><a class="font-smsm" href="#">زمانیان</a> <img alt="" src="../img/user.png" srcset=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rah-ertebat col-lg-12 col-sm-12 col-md-12">
        <div class="filter-rah-ertebat ">
            <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="col-lg-9 col-md-9 col-sm-12 con-center form-ertebat bg-white">
                    <div class="form-email col-lg-12 col-sm-12 col-md-12">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-7 mt-2">
                                <form action="" method="post">
                                    <input class="btn tanha text-white col-lg-4 col-md-4 col-sm-4 col-xl-4" id="rah_ertebat" type="submit" value="عضویت"> <input class="font-sm tanha col-lg-8 col-md-8 col-sm-8 col-xl-8" id="email" name="email" placeholder="آدرس پست الکترونیک خود را وارد کنید" type="email">
                                </form>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <h6 class="tanha text-right text-white mt-2">اشتراک در خبرنامه ما</h6>
                                        <p class="tanha text-right text-white font-sm">و دریافت آخرین اخبار ما</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1"><img alt="" class="float-left text-right" src="img/Gmail.png" srcset="" width="70px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <footer id="myFooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h2 class="logo"><a href="http://www.rayansh.ir/"><img class="darraft" height="100px" src="../imgg/tz222.png" width="140px"></a></h2>
                        <h2 class="logo"><a href="#"><img height="100px" src="../imgg/trust.png" width="140px"></a></h2>
                    </div>
                    <div class="col-sm-2">
                        <h5>دسترسی سریع</h5>
                        <ul>
                            <li>
                                <a href="#">صفحه نخست</a>
                            </li>
                            <li>
                                <a href="#">ورود به سایت</a>
                            </li>
                            <li>
                                <a href="Sabt%20Name.html">ثبت نام در سایت</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>رایانش</h5>
                        <ul>
                            <li>
                                <a href="#">درباره شرکت</a>
                            </li>
                            <li>
                                <a href="#">تماس با ما</a>
                            </li>
                            <li>
                                <a href="#">سوالات متداول</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>پشتیبانی</h5>
                        <ul>
                            <li>
                                <a href="#">ارسال تیکت</a>
                            </li>
                            <li>
                                <a href="#">مرکز آموزش</a>
                            </li>
                            <li>
                                <a href="#">تالار گفتگو</a>
                            </li>
                        </ul>
                    </div>
                    <div class="fore col-lg-3 col-md-3 col-sm-3">
                        <div class="social-networks">
                            <a class="twitter" href="#"><img alt="" src="../imgg/instagram.png" width="40px"></a> <a class="facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="google" href="#"><img alt="" src="../imgg/telegram.png" width="40px"></a>
                        </div>
                        <form action="">
                            <p id="labelaee">برای اشتراک در خبرنامه ما ایمیل خود وارد کنید</p><input class="float-left" name="email" placeholder="ایمیل خود را وارد کنید" type="email"> <input class="float-right" type="button" value="ثبت ">
                        </form><button class="btn btn-default" type="button">ما را دنبال کنید</button>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>© 2020 کلیه حقوق مادی و معنوی این سورس متعلق به <a href="http://www.amzcomputer.ir/" style="direction: rtl" target="_blank">آمز کامپیوتر</a> می باشد.</p>
            </div>
        </footer>
    </div>
<script>
function fun()
{
    $('#id').html(date);
}
$('#rah_ertebat').click(function(){
    var send_1 = $('#email').val();
    var send_2 = $('#user_clayent_R').val();
    $.ajax({
        url:'admin/rah_ertebat.php',
        type:'post',
        data:{'email': send_1 ,'user_clayent': send_2},
        success:function(date){
            $('#id').html(date);
        }
    })
})
$('#rah_ertebat').click(function(){
    alert('اشتراک خبرنامه با موفقیت برای شما ساخته شد');
})
</script>
    <script src="/js/main.js">
    </script>
    <script src="/js/jquery.parallax.js">
    </script>
    <script src="/js/javaSCRIPT.js" type="text/javascript">
    </script>
</body>
</html>

