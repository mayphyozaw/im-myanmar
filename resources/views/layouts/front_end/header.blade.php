<header class="main-header-three" >
    <div class="main-menu-three__top">
        <div class="container">
            <div class="main-menu-three__top-inner">
                <ul class="list-unstyled main-menu-three__contact-list">
                    <li>
                        <div class="icon">
                            <i class="icon-email"></i>
                        </div>
                        <div class="text">
                            <p><a href="mailto:info@iam-myanmar.com">info@iam-myanmar.com</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="icon-pin"></i>
                        </div>
                        <div class="text">
                            <p>Ayar Chan Thar Condo, Yangon, Myanmar</p>
                        </div>
                    </li>
                </ul>

                <div class="main-menu-three__top-right">
                    <div class="main-menu-three__social">
                        <a href="#"><i class="fab fa-line"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-viber"></i></a>
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <nav class="main-menu main-menu-three">
        <div class="main-menu-three__wrapper">
            <div class="container">
                <div class="main-menu-three__wrapper-inner">
                    <div class="main-menu-three__left">
                        <div class="main-menu-three__logo">
                            <a href="">
                                <img src="{{ asset('data/logo1.png') }}" alt=""
                                    style="width:190px;height:50px;">
                            </a>
                        </div>
                    </div>
                    <div class="main-menu-two__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li>
                                <a href="{{ route('welcome') }}">Home</a>
                            </li>

                            <li class="current">
                                <a href="{{ route('about.index') }}">About Us</a>
                            </li>


                            <li class="dropdown">
                                <a href="#">Our Partners</a>
                                <ul class="shadow-box">
                                    <li><a href="">Shwe Wutt Hmone Kha Co.,Ltd</a></li>
                                    <li><a href="">KQ International Services Co.,Ltd</a></li>
                                    <li><a href="">Myat Linn Thit Co.,Ltd</a></li>
                                </ul>
                            </li>

                            <li hidden>
                                <a href="">Employer Form</a>
                            </li>
                            <li>
                                <a href="">Activities</a>
                            </li>

                            <li>
                                <a href="">News</a>
                            </li>

                            <li>
                                <a href="">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="main-menu-three__right">

                        <div class="main-menu-three__nav-sidebar-icon">
                            <a class="navSidebar-button" href="#">
                                <span class="icon-dots-menu-three-one"></span>
                                <span class="icon-dots-menu-three-two"></span>
                                <span class="icon-dots-menu-three-three"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu main-menu-three">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="{{ asset('data/logo.jpg') }}" width="100"
                    alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:info@iam-myanmar.com">info@iam-myanmar.com</a>
            </li>
            <li>
                <i class="fas fa-phone"></i>
                <a href="tel:+959 763 307 719">+959 763 307 719</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-youtube"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
