<?php require_once "header.php"?>

  <!-- ***** Welcome Area Start ***** -->
  <section class="welcome-area">
    <!-- Welcome Slides -->

    <div class="welcome-slides owl-carousel">
       <?php for($i = 0; $i<count($Slider);$i++){  ?>
      <!-- Single Welcome Slide -->
      <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image:url('<?=$Slider[$i]["sekil"]?>');">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <!-- Welcome Text -->
              <div class="welcome-text text-center">
                 <h2 data-animation="fadeInUp" data-delay="100ms"><?=$Slider[$i]["basliq"]?></h2>
                <p data-animation="fadeInUp" data-delay="300ms"><?=$Slider[$i]["alt_basliq"]?></p>
                <!-- <h2 data-animation="fadeInUp" data-delay="100ms">Nə elm, nə pul, nə də şöhrət sağlamlığın yerini verər!</h2>
                <p data-animation="fadeInUp" data-delay="300ms">“Gözəlliyin əlavə bəzək-düzəyə ehtiyacı yoxdur, əksinə, bəzək-düzəyin olmaması ona əlavə hüsn gətirir ”</p> -->
                <div class="welcome-btn-group">
                  <a href="#" class="btn dento-btn mx-2" data-animation="fadeInUp" data-delay="500ms">Başla</a>
                  <a href="#" class="btn dento-btn mx-2 active" data-animation="fadeInUp" data-delay="700ms">Əlaqə</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </section>
  <!-- ***** Welcome Area End ***** -->

  <div class="container">
    <div class="dento-border clearfix"></div>
  </div>

  <!-- Cool Facts Area Start -->
  <section class="dento-cta-area">
    <div class="container">
      <div class="row">
        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_genius"></i>
            <h2><span class="counter">10</span></h2>
            <h5>İl Təcrübəsi</h5>
          </div>
        </div>

        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_heart_alt"></i>
            <h2><span class="counter">700</span>+</h2>
            <h5>Müştərilər</h5>
          </div>
        </div>

        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_book_alt"></i>
            <h2><span class="counter">120</span></h2>
            <h5>Sertifikat</h5>
          </div>
        </div>

        <!-- Cool Facts Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-cta text-center mt-50 mb-100">
            <i class="icon_id"></i>
            <h2><span class="counter">40</span>+</h2>
            <h5>Həkimlırimiz</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Cool Facts Area End -->

  <!-- Dento Service Area Start -->
  <section class="dento-service-area section-padding-100-0 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('img/bg-img/indexbg1.jpg');">
    <div class="container">
      <div class="row align-items-center">
        <!-- Service Content -->
        <div class="col-12 col-lg-6">
          <div class="service-content mb-30">
            <!-- Section Heading -->
            <div class="section-heading white">
              <h2>Məqsədlərimiz</h2>
              <div class="line"></div>
            </div>

            <div class="row">
              <!-- Single Service -->
              <div class="col-6 col-md-4">
                <div class="single-service mb-70">
                <img src="./img/core-img/index1.png" alt="">
                  <h6>Sağlamlıq</h6>
                </div>
              </div>

              <!-- Single Service -->
              <div class="col-6 col-md-4">
                <div class="single-service mb-70">
                <img src="./img/core-img/index1.png" alt="">
                  <h6>Müştəri Məmnuniyyəti</h6>
                </div>
              </div>

              <!-- Single Service -->
              <div class="col-6 col-md-4">
                <div class="single-service mb-70">
                <img src="./img/core-img/index1.png" alt="">
                  <h6>Kosmetoloji Müalice</h6>
                </div>
              </div>

              <!-- Single Service -->
              <div class="col-6 col-md-4">
                <div class="single-service mb-70">
                <img src="./img/core-img/index1.png" alt="">
                  <h6>Sərfəli qiymətlər</h6>
                </div>
              </div>

              <!-- Single Service -->
              <div class="col-6 col-md-4">
                <div class="single-service mb-70">
                  <img src="./img/core-img/index1.png" alt="">
                  <h6>Səmimi kollektiv</h6>
                </div>
              </div>

              <!-- Single Service -->
              <div class="col-6 col-md-4">
                <div class="single-service mb-70">
                  <img src="./img/core-img/index1.png" alt="">
                  <h6>Əvəzedilməz Xidmətlər</h6>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Video Area -->
        <div class="col-12 col-lg-6">
          <div class="dento-video-area mb-100">
            <img src="./img/bg-img/doc1.jpeg" alt="">
            <!-- Play Button -->
            <a href="#" class="video-play-button"><i class="fa fa-play" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Dento Service Area End -->

  <!-- Dento Pricing Table Area Start -->
  <section class="dento-pricing-table-area section-padding-100">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Doktorların siyahısı</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="dento-price-table table-responsive">
            <table class="table table-borderless mb-0">
              <thead>
                <tr>
                  <th scope="col">Ad Soyad</th>
                  <th scope="col">Sahə</th>
                  <th scope="col">Müraciət sayı</th>
                </tr>
              </thead>
              <tbody>
              <?php for ($i = 0; $i<count($SonElave); $i++) { ?>
                <tr>
                  <th scope="row"><?= $SonElave[$i]["Basliq"] ?></th>
                  <td><?= substr($SonElave[$i]["Mezmun"],0,150)?>.....</td>
                  <td><?= substr($SonElave[$i]["tarix"],0,10) ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="col-12">
          <div class="more-btn text-center mt-50">
            <a href="#" class="btn dento-btn">Ətraflı<i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Dento Pricing Table Area End -->

  <!-- Book An Oppointment Area Start -->
  <section style="margin-bottom:100px" class="book-an-oppointment-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('img/bg-img/12.jpg');">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center white">
            <h2>Sorğu qeydiyyatı</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <!-- Appointment Form -->
          <div class="appointment-form">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="your-name" class="form-control" placeholder="Ad Soyad" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="your-phone" class="form-control" placeholder="Elaqə nömresi" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="email" name="your-email" class="form-control" placeholder="Email" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="your-address" class="form-control" placeholder="Ünvan">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="your-address" class="form-control" placeholder="Həkimin adı">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <select name="your-scheldule" class="form-control">
                      <option value="Choose Your Scheldule">Zamanı Seçin</option>
                      <option value="9 AM to 10 AM">9 AM to 10 AM</option>
                      <option value="11 AM to 12 PM">11 AM to 12 PM</option>
                      <option value="2 PM to 4 PM">2 PM to 4 PM</option>
                      <option value="8 PM to 10 PM">8 PM to 10 PM</option>
                    </select>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group mb-30">
                    <textarea name="your-message" class="form-control" placeholder="Sualınız və ya şikayətiniz"></textarea>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn dento-btn">Müracət et</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Book An Oppointment Area End -->

<?php require_once "footer.php"?>
 