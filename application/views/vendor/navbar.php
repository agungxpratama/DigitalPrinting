<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="index.html">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="main-menu  d-none d-lg-block text-center">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="index.html">home</a></li>

                                    <!-- <li><a href ="Portfolio.html">Portfolio</a></li> -->
                                    <li><a href="<?= base_url('vendor#vendor1') ?>">Vendor <i class="ti-angle-down"></i></a>

                                        <ul class="submenu">
                                            <li><a href="<?= base_url('jasa/vendor') ?>">Vendor 1</a></li>
                                            <li><a href="portfolio_details.html">Vendor 2</a></li>
                                            <li><a href="about.html">Vendor 3</a></li>
                                            <li><a href="elements.html">Vendor 4</a></li>
                                        </ul>
                                    </li>
                                    <!-- 
                                    <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="single-blog.html">single-blog</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block">
                        <div class="log_chat_area d-flex align-items-end">
                            <a href="<?= base_url('profile/profile') ?>" data-scroll-nav="0" class="say_hi">Akun</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>