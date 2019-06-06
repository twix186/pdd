<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ПДД Онлайн</title>
    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <style>
        body {
            background-color: #eaeaea;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>

<body>
<section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">

        <!--logo start-->
        <a href="{{ url('/') }}" class="logo"><b>ПДД<span>Онлайн</span></b></a>
        <!--logo end-->
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right"></div>
        </div>
        <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a class="logout" href="{{ url('/login') }}">Войти</a></li>
                        <li><a class="logout" href="{{ url('/registration') }}">Регистрация</a></li>
                    @else
                        <li><a class="logout" href="{{ url('/results') }}">Личный кабинет</a></li>
                        {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
                        <button type="submit">Logout</button>
                        {!! Form::close() !!}
                        <li><a class="logout" href="#logout" onclick="$('#logout').submit();">Выйти</a></li>
                    @endif

                </ul>
        </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <h5 class="centered">
                    @if (Auth::guest())
                    @else
                        {{ Auth::user()->name }}
                        <hr style="margin-top: 16px; margin-bottom: 10px; border: 0; border-top: 3px solid #22242a;">
                    @endif
                </h5>

                @if (\Request::is('/'))
                <li class="sub-menu centered">
                    <a href="{{url('/')}}" class="active">
                        <span>Новости</span>
                    </a>
                </li>
                @else
                    <li class="sub-menu centered">
                        <a href="{{url('/')}}" >
                            <span>Новости</span>
                        </a>
                    </li>
                @endif

                @if (\Request::is('pdd'))
                <li class="sub-menu centered">
                    <a href="" class="active">
                        <span>Правила</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#p1">1. Общие положения</a></li>
                        <li><a href="#p2">2. Водители</a></li>
                        <li><a href="#p3">3. Спец. сигналы</a></li>
                        <li><a href="#p4">4. Пешеходы</a></li>
                        <li><a href="#p5">5. Пассажиры</a></li>
                        <li><a href="#p6">6. Светофор</a></li>
                        <li><a href="#p7">7. Знак остановки</a></li>
                        <li><a href="#p8">8. Начало движения</a></li>
                        <li><a href="#p9">9. Проезжая часть</a></li>
                        <li><a href="#p10">10. Скорость движения</a></li>
                        <li><a href="#p11">11. Обгон</a></li>
                        <li><a href="#p12">12. Остановка и стоянка</a></li>
                        <li><a href="#p13">13. Проезд перекрестков</a></li>
                        <li><a href="#p14">14. Пеш. переходы</a></li>
                        <li><a href="#p15">15. Ж/Д пути</a></li>
                        <li><a href="#p16">16. Автомагистрали</a></li>
                        <li><a href="#p17">17. Жилые зоны</a></li>
                        <li><a href="#p18">18. Маршрутные ТС</a></li>
                        <li><a href="#p19">19. Фары</a></li>
                        <li><a href="#p20">20. Буксировка</a></li>
                        <li><a href="#p21">21. Учебная езда</a></li>
                        <li><a href="#p22">22. Перевозка людей</a></li>
                        <li><a href="#p23">23. Перевозка грузов</a></li>
                        <li><a href="#p24">24. Мопеды</a></li>
                        <li><a href="#p25">25. Гужевые повозки</a></li>
                    </ul>
                </li>
                @else
                    <li class="sub-menu centered">
                        <a href="{{ url('/pdd') }}">
                            <span>Правила</span>
                        </a>
                    </li>
                @endif

                @if (\Request::is('tickets'))
                    <li class="sub-menu centered">
                        <a href="" class="active">
                            <span>Билеты ПДД</span>
                        </a>
                    </li>
                @else
                    <li class="sub-menu centered">
                        <a href="{{ url('/tickets') }}" >
                            <span>Билеты ПДД</span>
                        </a>
                    </li>
                @endif

                @if (\Request::is('tests'))
                    <li class="sub-menu centered">
                        <a href="" class="active">
                            <span>Экзамен</span>
                        </a>
                    </li>
                @else
                    <li class="sub-menu centered">
                        <a href="{{ url('/tests') }}" >
                            <span>Экзамен</span>
                        </a>
                    </li>
                @endif

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            @yield('css')
            @yield('content')
        </section>
        <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            <p>
                &copy; Copyrights <strong>ПДДОНЛАЙН</strong>.
            </p>
            <a href="inbox.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="lib/jquery.scrollTo.min.js"></script>
<script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
<!--common script for all pages-->
<script src="lib/common-scripts.js"></script>
<!-- Тест-->
<script type="text/javascript" src="js/jQuizler.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</body>

</html>
