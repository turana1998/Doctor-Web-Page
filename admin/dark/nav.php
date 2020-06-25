<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div><img src="<?= $_SESSION["user_img"] ?>" alt="user-img" class="img-circle"></div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $_SESSION["user_AdSoyad"] ?>
                        <span class="caret"></span></a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="profil.php" class="dropdown-item"><i class="ti-user"></i> Profil</a>
                        <!-- text-->
                        <a href="logout.php" class="dropdown-item"><i class="ti-power-off"></i> Çıxış</a>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="icon-speedometer"></i><span class="hide-menu">İstifadəçilər</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="istifadeciler.php">Siyahı </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="icon-speedometer"></i><span class="hide-menu">Nizamlamalar</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="nizamlamalar.php">Nizamlamalar </a></li>
                        <li><a href="haqqinda.php">Haqqında</a></li>
                        <li><a href="sosial-sebekeler.php">Sosial Şəbəkələr </a></li>
                        <li><a href="elaqe-melumatlari.php">Əlaqə Məlumatları</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="icon-speedometer"></i><span class="hide-menu">Slider</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="slider-elave.php">Slider Əlavə</a></li>
                        <li><a href="slider-siyahi.php">Slider Siyahı</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="icon-speedometer"></i><span class="hide-menu">Xidmətlər</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="xidmetler-elave.php">Xidmətlər Əlavə</a></li>
                        <li><a href="xidmetler-siyahi.php">Xidmətlər Siyahı</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="icon-speedometer"></i><span class="hide-menu">Portfolio</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="port-kat-elave.php">Portfolio Kateqoriya Əlavə </a></li>
                        <li><a href="port-kat-siyahi.php">Portfolio Kateqoriya Siyahı </a></li>
                        <li><a href="port-elave.php">Portfolio Əlavə </a></li>
                        <li><a href="port-siyahi.php">Portfolio Siyahı </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="icon-speedometer"></i><span class="hide-menu">Blog</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="blog-kat-elave.php">Blog Kateqoriya Əlavə </a></li>
                        <li><a href="blog-kat-siyahi.php">Blog Kateqoriya Siyahı </a></li>
                        <li><a href="blog-elave.php">Blog Əlavə </a></li>
                        <li><a href="blog-siyahi.php">Blog Siyahı</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="icon-speedometer"></i><span class="hide-menu">Şərhlər</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="comment.php">Siyahı</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->