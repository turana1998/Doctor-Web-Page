 <!-- ***** Footer Area Start ***** -->
 <footer class="footer-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/footerbg.jpg);">
    <div class="container">
      <div class="row">
        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-footer-widget">
            <a class="nav-brand" href="index.html"><img src="./img/core-img/s9.png" alt=""></a>          
            <p><b>Heydər ƏLİYEV</b><br/>
               Müasir dövrdə hər bir dövlətin iqtisadi potensialı və qüdrəti bir sıra mühüm meyarlarla yanaşı, həm də milli səhiyyə sisteminin inkişaf səviyyəsi, tərəqqi yönümü ilə ölçülür. </p>
            <div class="footer-contact">
              <p><i class="icon_pin"></i>Q.Qarayev 81-132 AZE ,BAKU</p>
              <p><i class="icon_phone"></i> 012-421-35-37</p>
              <p><i class="icon_mail"></i>turana221298@gmail.com</p>
            </div>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget">
            <!-- Widget Title -->
            <h5 class="widget-title">Opening Hours</h5>

            <!-- Opening Hours -->
            <ul class="opening-hours">
              <li><span>Bazar/ertəsi</span> <span>8.00-18.00</span></li>
              <li><span>Çərşənbə axşamı</span> <span>8.00-17.00</span></li>
              <li><span>Çərşənbə</span> <span>9.00-17.00</span></li>
              <li><span>Cümə axşamı</span> <span>10.00-17.00</span></li>
              <li><span>Cümə </span> <span>11.00-17.00</span></li>
              <li><span>Şənbə</span> <span>13.00-17.00</span></li>
              <li><span>Bazar</span> <span style="margin-right:35px">Bağlı</span></li>
            </ul>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget">
            <!-- Widget Title -->
            <h5 class="widget-title">Cəld Müraciət</h5>

            <!-- Quick Links Nav -->
            <nav>
              <ul class="quick-links">
                <li><a href="#">Haqqında</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Əlaqə</a></li>
                <li><a href="#">Siyasi</a></li>
                <li><a href="#">Məqalələr</a></li>
                <li><a href="#">Məsləhətlər</a></li>
                <li><a href="#">Vakansiya</a></li>
                <li><a href="#">Həkimlər</a></li>
                <li><a href="#">Xidmətlət</a></li>
                <li><a href="#">Qanunlar</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget">
            <!-- Widget Title -->
            <h5 class="widget-title">Yeniliklər</h5>

            <p>Yenilikdən hər zaman xəbərdar olmaq üçün emailiniz daxil edə bilərsiz!</p>
            <!-- Newsletter Form -->
            <div class="footer-newsletter-form">
              <form action="#" method="post">
                <input type="email" name="nl-email" value="" placeholder="Email ">
                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
              </form>
            </div>

            <!-- Social Info -->
            <div class="footer-social-info">
              <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Copywrite Area -->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="copywrite-content">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Bütün hüquqlar qorunur | Made <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Turana İsmayilova</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ***** Footer Area End ***** -->

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="js/dento.bundle.js"></script>
  <!-- Active js -->
  <script src="js/default-assets/active.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
$(function ($) {
    // let cat = document.getElementsByName("category")[0].value;

    $("input[name=search]").keyup(function () {
      var value = $(this).val();
        if (value != '') {
            $.ajax({
                url: "ajax.php",
                data: {
                    search: true,
                    val: value,
                    
                },
                method: "POST",
                success: function (data) {
                    $("#search_data").html(data)
                    console.log(data);
                }

            });
        } else {
            $("#search_data").html('');
        }
       

    });

});
</script>
</body>

</html>