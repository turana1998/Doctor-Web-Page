<?php  require_once "header.php"?>
  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/blogbg.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">Blog</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i>Əsas səhifə</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- *****Blog Area Start ***** -->
  <section class="dento-blog-area mt-50">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8">
        <?php for ($i = 0; $i < count($BlogSiyahi); $i++) { ?>
          <!-- Single Blog Item -->
          <div class="single-blog-item style-2 d-flex flex-wrap align-items-center mb-50">
            <!-- Blog Thumbnail -->
            <div class="blog-thumbnail">
              <a href="./blog-details.html">
                <img src="<?= $BlogSiyahi[$i]["Sekil"] ?>" alt="">
              </a>
            </div>
            <!-- Blog Content -->
            <div class="blog-content">
              <a href="./blog-details.html" class="post-title"><?= $BlogSiyahi[$i]["Basliq"] ?></a>
              <p>...</p>
              <div class="post-meta">
                <a href="#"><i class="icon_clock_alt"></i><?=substr($BlogSiyahi[$i]["tarix"], 0, 10) ?></a>
                <a href="#"><i class="icon_chat_alt"></i> 3 Comments</a>
              </div>
            </div>
          </div>
          <?php } ?>
          <!-- Pagination -->
          <nav class="dento-pagination mb-100">
            <ul class="pagination">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </nav>
        </div>

        <!-- Dento Sidebar Area -->
        <div class="col-12 col-lg-4">
          <div class="dento-sidebar">

            <!-- Single Widget Area -->
            <div class="single-widget-area search-widget">
              <form action="#" method="post">
                <input type="search" name="search"  class="form-control" placeholder="Search ...">
                <ul  id="search_data"  style="position:absolute; z-index:1000; background-color:white;min-width: 480px !important;max-width: 560px !important;list-style: none; ">
                 
                </ul>
                <button type="submit"><i class="icon_search"></i></button>
              </form>
            </div>

            <!-- Single Widget Area -->
            <div class="single-widget-area catagories-widget">
              <h5 class="widget-title">Kateqoriyalar</h5>

              <!-- catagories list -->
              <ul class="catagories-list">
              <?php for ($i = 0; $i < count($BlogKat); $i++) { ?>
                <li><a href="blog-category-<?= $BlogKat[$i]["slug"]."-".$BlogKat[$i]["id"] ?>"><?= $BlogKat[$i]["Ad"] ?> <span><?= count($CRUD->Select("blog",1,"where Kat_id=:id and status=:st",["id"=>$BlogKat[$i]["id"],"st"=>1])) ?></span></a></li>
              <?php } ?>
              </ul>
            </div>

            <!-- Single Widget Area -->
            <div class="single-widget-area news-widget">
              <h5 class="widget-title">Recent News</h5>

             
              <?php for ($i = 0; $i< (count($SonElave)>3 ? 3 : count($SonElave)); $i++) { ?>
              <!-- Single News Area -->
              <div class="single-news-area d-flex align-items-center">
                <div class="blog-thumbnail">
                <a href="blog-<?= $SonElave[$i]["slug"]."-".$SonElave[$i]["id"] ?>"><img style="height:100px" src="<?= $SonElave[$i]["Sekil"] ?>" alt=""></a>
                </div>
                <div class="blog-content">
                  <a href="#" class="post-title">Everything you need to know about sinus infection</a>
                  <span class="post-date"><?= substr($SonElave[$i]["tarix"],0,10) ?></span>
                </div>
              </div>
            </div>
            <?php } ?>
            <!-- Single Widget Area -->
            <div class="single-widget-area adds-widget">
              <a href="#"><img class="w-100" src="./img/bg-img/adds.png" alt=""></a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- *****Blog Area End ***** -->

  <?php  require_once "footer.php"?>