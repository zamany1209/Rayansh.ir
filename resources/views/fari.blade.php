

      <!DOCTYPE html>
      <html lang='fa'>
      <head>
          <meta charset='UTF-8'>
          <meta name='viewport' content='width=device-width, initial-scale=1.0'>
          <title>develop</title>
          <meta name='description' content=''>
          <link rel='stylesheet' href='../css/fare.css'>
          <link href='../css/bootstrap.min.css' rel='stylesheet'>
          <link href='../css/style -menu.min.css' rel='stylesheet'>
          <link href='../css/footer.min.css' rel='stylesheet'>
          <link href='../css/style.min.css' rel='stylesheet'>
          <link href='../css/owl.carousel.min.css' rel='stylesheet'>
          <script src='../js/jquery.min.js' type='text/javascript'>
          </script>
          <script src='../js/bootstrap.min.js'>
          </script>
          <script src='../js/jquery.mixitup.min.js' type='text/javascript'>
          </script>
      </head>
      <body class='sticky-header'>
      <div class="bg-farie"></div>
    <header id="header-menu">
            <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" style="background: none; border: none;" type="button"><a href="#hhh"><img alt="" src="../img/menu-whte.png"></a></button>
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
                            <a class="nav-link" href="../insert-teacher/insert-modares.php" id="s">جذب مدرس</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Admin/index8.html" id="s">پشتیبانی</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">اموزش</a>
                            <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                                <a class="dropdown-item" href="#">CSS</a> <a class="dropdown-item" href="#">HTML5</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">JS</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Abute.php" id="s">درباره ما</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="../index.php" id="s">خانه<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <img src="../img/rayansh.png" height="35px" alt="rayansh.ir" title="rayansh.ir" srcset="">
                        </li>
                    </ul>
                </div>
            </nav>
        </header>      <!-- <nav class="navbar navbar-expand navbar-light navbar-fixed-top col-12">
        <div class="col-7 mr-3"></div>
                <div class="collapse navbar-collapse text-right" id="navbarSupportedContentt">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="" role="button">طراحی سایت</a>
                            <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                                <a class="dropdown-item" href="#">برنامه نویسی</a> <a class="dropdown-item" href="#">فتوشاپ</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">طراحی</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="" role="button">سئو سایت</a>
                            <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                                <a class="dropdown-item" href="#">برنامه نویسی</a> <a class="dropdown-item" href="#">فتوشاپ</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">طراحی</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="" role="button">فتوشاپ</a>
                            <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                                <a class="dropdown-item" href="#">برنامه نویسی</a> <a class="dropdown-item" href="#">فتوشاپ</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">طراحی</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="" role="button">برنامه نویسی</a>
                            <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                                <a class="dropdown-item" href="#">برنامه نویسی</a> <a class="dropdown-item" href="#">فتوشاپ</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">طراحی</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav> -->    <div class='col-12 bg-headers p-3'>
            <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="center">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="bg-white shadow bor-2 mt-2">
                            <video class="col-12 p-2" id="intro" controls preload="none" height="100%" poster="img/RAYANSH_POST.png" data-setup="{}">
                                <source src="{{ $data_rayansh->url_movese }}" type="video/mp4">
                            </video>
                            <div class="text-center p-1 dir">
                                <h5 class=" bg-hed">{{ $data_rayansh->text_header }}</h5>
                            </div>
                            <div class="text-right p-1 mr-3 lin-8 dir"><p>{{ $data_rayansh->text }}</p></div>
                        </div>
                        <div id="hhh" class="bg-white shadow bor-2 mt-2">
                            @foreach($filme_a as $filme_a)
                            <hr>
                            <div class="col-12 head-doaw p-1">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="row p-1">
                                            <div class="ml-4 p-1 text-left">
                                                <p class="text-center"><a><img src="../img/lock.svg" width="25px" alt="" srcset=""></a></p>
                                            </div>
                                            <div class="p-1 text-left">
                                                <p class="text-center">{{ $filme_a->us }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 dir">
                                        <div class="row p-1">
                                            <div class="bor-r-6 mr-3 text-right">
                                                <p class="text-center">{{ $filme_a->id }}</p>
                                            </div>
                                            <div class="p-1 text-right">
                                                <p class="text-center font-sm">{{ $filme_a->mozo }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <hr>                                                                                                                  <hr>
                        </div>
                        <div class="bor-2 mt-2">
                            <div class=" mt-4 mb-3">
                                <div class="text-center">
                                    <nav class=" navbar-expand-lg nav-border shadow  bg-raya">
                                        <div class="con-center">
                                            <a class="nav-link tanha">نظرات کاربران </a>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 bg-white shadow mt-2 mb-2 bor-4">
                            @foreach($name_coment_a as $name_coment_a)
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <div class="row p-1">
                                    </div>
                                </div>
                                <div class="col-8 dir">
                                    <div class="row p-1">
                                        <div class="{{ $name_coment_a->mt }} p-1 text-left">
                                            <p class="text-center"><a><img src="../img/{{ $name_coment_a->img }}" width="45px" alt="" srcset=""></a></p>
                                        </div>
                                        <div class="p-3 text-left">
                                            <p class="text-center">{{ $name_coment_a->username }}</p>
                                        </div>
                                        <div class="p-3 text-left">
                                            <p class="text-center">{{ $name_coment_a->text }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach



                        </div>

                        @if($test_user)
                        <div class='col-12 bg-white shadow mt-2 mb-2 bor-4'>
                            <div class='p-1'>
                                <div class='bg-hed-bk mt-3 mb-3 bor-2 mr-2 ml-2 p-1'>
                                    <p class='text-center mt-3'>جهت ارسال نظر وارد حساب کاربری خود شوید</p>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class='col-12 bg-white shadow mt-2 mb-2 bor-4'>
                            <div class='p-1'>
                                <div class='bg-hed-bk mt-2 bor-2 mr-2 ml-2'>
                                    <p class='text-center p-1'>ارسال نظر</p>
                                </div>
                            </div>
                            <div class='con-center col-12 p-2'>
                                <form action='' method='post'>
                                    <input type='button' value='$cament_po' name='name_cament_po' id='name_cament_po' style='height:0;width:0;'>
                                    <textarea class='col-12 dir_rtl bor-4' name='text' rows='7' id='text_user_c' placeholder='نظر خود را بنویسید ....'></textarea>
                                    <input class='tanha p-1 col-3 mt-3 mb-1 bor-4 submit-user' type='submit' id='insert_post_1' value='ارسال'>
                                </form>
                            </div>
                        </div>
                        @endif
                                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="col-lg-12 col-sm-12 bg-white shadow mt-2 mb-2 bor-4">
                            <div class="row">
                                <div class="tanha col-7 eshterak mt-2">
                                    <img src="../img/telegram.png" alt="" srcset="">
                                    <img src="../img/twitter.png" alt="" srcset="">
                                    <img src="../img/instagram.png" alt="" srcset="">
                                    <img src="../img/email.png" alt="" srcset="">
                                </div>
                                <div class="col-5 mt-3">
                                    <p class="font-smsm">اشتراک گذاری</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white shadow mt-2 mb-2 col-12 bor-4">
                            <div class="text-center">
                                <p class="text-center p-2">اطلاعات دوره</p>
                            </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="etelaate-dioreh">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <img src="../img/sote.png" alt="" srcset="">
                                            <p class="text-center font-smsd">زمان</p>
                                            <p class="text-center font-smsm lin">{{ $data_rayansh->namber_sm }}</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <img src="../img/wideoo.png" alt="" srcset="">
                                            <p class="text-center font-smsd">ویدیو</p>
                                            <p class="text-center font-smsm lin">{{ $data_rayansh->namber_movis }}</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <img src="../img/sol.png" alt="" srcset="">
                                            <p class="text-center font-smsd">پرسش</p>
                                            <p class="text-center font-smsm lin">0</p>
                                        </div>
                                    </div>
                                </div>
                                                            <hr class="p-2 mt-1 mb-1">
                                <div class="bor-2">
                                    <div class="row">
                                        @if($test_user)
                                        <div class='bg-white mt-2 mb-2 bor-4'>
                                            <div class='p-1'>
                                                <div class='bg-hed-bk shadow mt-3 mb-3 bor-2 p-1 ml-1 mr-1'>
                                                    <p class='text-center mt-3 font-sm'>جهت ثبت نام در دوره آموزشی وارد حساب کاربری خود شوید</p>
                                                </div>
                                            </div>
                                        </div>
                                        @else

                                        @endif
                                    </div>
                                </div>
                                <div class="text-center">
                                    <b><p class="mt-2 font-smsd">تضمین بازگشت وجه در صورت نارضایتی</p></b>
                                </div>
                                <div class="text-center">
                                    <p class="mt-2 font-smsd">وضعیت دوره: <b><span class="bg-doreh">{{ $data_rayansh->vaseyat }}</span></b></p>
                                </div>
                                <hr class="mt-1">
                                <div class="row">
                                    <div class="col-1">
                                        <img src="../img/wiuo.png" width="23px" alt="" srcset="">
                                    </div>
                                    <div class="col-2">
                                        <p>{{ $data_rayansh->wiuo }}</p>
                                    </div>
                                    <div class="col-1">
                                        <img src="../img/like.png" width="23px" alt="" srcset="">
                                    </div>
                                    <div class="col-2">
                                        <p>{{ $data_rayansh->like_po }}</p>
                                    </div>
                                    <div class="col-1">
                                        <img src="../img/mail (1).png" width="23px" alt="" srcset="">
                                    </div>
                                    <div class="col-2">
                                        <p>12</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="bg-white shadow mt-3 mb-2 bor-4 p-1">
                            <div class="text-center p-2">
                                <img class="text-center" src="../img/{{ $name_teacher->url_pikcher }}" alt="" srcset="">
                                <p>{{ $name_teacher->name." ". $name_teacher->family }}</p>
                            </div>
                            <p class="gainsboro text-center lin"> درباره مدرس</p>
                            <p class="text-center p-1 font-sm">{{ $name_teacher->tozihe }}</p>
                            <p class="text-center lin font-sm">{{ $name_teacher->Rahe_Ertebate }}</p>
                        </div>
                        <div class="bg-white shadow mt-3 mb-2 bor-4 p-1">
                            <div class="bg-hed-bk mt-2 bor-2 mr-2 ml-2">
                                <p class="text-center p-1">حساب کاربری</p>
                            </div>

                            @if($test_user)
                            <div class='text-center'>
                            <form action='' method='post'>
                                <input class='col-10 text-right p-1 bor-none-2 mt-1 tanha' name='username' id='username' type='text' placeholder='نام کاربری'>
                                <input class='col-10 text-right p-1 bor-none-2 mt-3 tanha' name='password' id='password' type='password' placeholder='پسورد'>
                                <input class='tanha p-1 col-4 mt-3 mb-1 bor-4 submit-user' id='log_in_us' type='submit' value='ارسال'>
                            </form>
                        </div>
                        @else
                            <div class='text-center'>
                            <img class='text-center' src='../img/users.png' alt='' srcset=''>
                            <p id='user_c'>$use_clayent</p>
                            <p id='email_user_c'>$email_use_clayent</p>
                            <form action='../admin/exsit.php' method='post'>
                            <input class='tanha p-1 col-4 mb-1 bor-4 submit-user' type='submit' value='خروج'>
                            </form>
                        </div>
                        @endif
                    </div>
                        <div class="bor-2 mt-2">
                            <div class=" mt-4 mb-3">
                                <div class="text-center">
                                    <nav class=" navbar-expand-lg nav-border shadow  bg-raya">
                                        <div class="con-center">
                                            <a class="nav-link tanha">دوره های پیشنهادی</a>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="mt-3 mb-2">
                                    <div class="ko-cvx">
                                        <div class="col-11 con-center mod-cvx shadow">
                                            <img alt="" src="../img/img-cvx.png" srcset="">
                                            <h6 class="tanha text-right mt-2">قالب سفارشی werteros</h6>
                                            <hr class="text-center">
                                            <div class="row">
                                                <div class="col-6 p-1 font-vm comnter-folooo"><img src="../img/wiuo.png" alt=""><a>12</a><img src="../img/like.png" alt=""><a>5</a></div>
                                                <div class="col-6 text-right acte insert-admin"><a class="font-smsm" href="#">زمانیان</a> <img alt="" src="../img/user.png" srcset=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 mb-2">
                                    <div class="ko-cvx">
                                        <div class="col-11 con-center mod-cvx shadow">
                                            <img alt="" src="../img/img-cvx.png" srcset="">
                                            <h6 class="tanha text-right mt-2">قالب سفارشی werteros</h6>
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
        </div>

    </div>
    <script>
    function fun()
    {
        $('#id').html(date);
    }
    $('#log_in_us').click(function(){
        var send_1 = $('#username').val();
        var send_2 = $('#password').val();
        $.ajax({
            url:'../admin/chek _user_f.php',
            type:'post',
            data:{'username': send_1 ,'password': send_2},
            success:function(date){
                $('#id').html(date);
            }
        })
    })
    </script>
    <script>
    function fun()
    {
        $('#id').html(date);
    }
    $('#insert_post_1').click(function(){
        var send_4 = $('#text_user_c').val();
        var send_3 = $('#name_cament_po').val();
        $.ajax({
            url:'di/insert_coment_po.php',
            type:'post',
            data:{'name_cament_po': send_3 ,'text_user_c': send_4},
            success:function(date){
                $('#id').html(date);
            }
        })
    })
    </script>
    <script>
    function fun()
    {
        $('#id').html(date);
    }
    $('#insert_post').click(function(){
        var send_5 = $('#name_save_po').val();
        $.ajax({
            url:'di/inser_save_move.php',
            type:'post',
            data:{'name_save_po': send_5},
            success:function(date){
                $('#id').html(date);
            }
        })
    })
    </script>
    <script src="../js/main.js">
        </script>
        <script src="../js/javaSCRIPT.js" type="text/javascript">
        </script>
        <div class="">
            <footer id="myFooter">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <h2 class="logo"><a href="http://www.rayansh.ir/"><img class="darraft ml-3" height="90px" src="../img/rayansh.png" width="98px"></a></h2>
                            <h2 class="logo"><a href="#"><img height="90px" src="../imgg/trust.png" width="120px"></a></h2>
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
        </div>     </body>
        </html>
