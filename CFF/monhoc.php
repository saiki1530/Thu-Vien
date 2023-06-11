<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kết quả tìm kiếm</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php include_once('includes/header.php'); ?>

  <!--================Home Banner Area =================-->
  <main id="main">
    <?php
    
    if (isset($_POST['search'])) {
      
      $sdata = $_POST['searchteacher'];
  
      $sql = "SELECT * from tailieu where name like  '%$sdata%' || ki like '%$sdata%'";
      $query = $dbh->prepare($sql);
      $query->execute();
      $results = $query->fetchAll(PDO::FETCH_OBJ);

      // tài liệu

   

      // ràng buộc dữ liệu
    ?>

      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/caodangfptpolytechnic-lienhe-1.jpg');">

        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

          <h2>Kết quả</h2>
          <ol>
            <li><a href="index.php">Trang chủ</a></li>
            <li>Môn học</li>
          </ol>

        </div>
      </div><!-- End Breadcrumbs -->
      <!--================End Home Banner Area =================-->


      <!--================Contact Area =================-->

      <section id="services" class="services section-bg">

        <div class="container" data-aos="fade-up">
          <?php
          if ($query->rowCount() > 0) {
            foreach ($results as $row) { ?>
              <h3 style="text-align: center;color:red">Tìm kiếm từ khóa : <?php echo $sdata; ?> </h3>
            <?php break; }} else { ?>
            <li style="color:red; text-align:center; "> Không có dữ liệu</li>
          <?php }

          ?>
          <div class="row gy-4">
            <h2>Môn học</h2>
            <?php if (($query->rowCount() > 0)) {
              $data = 100;
              foreach ($results as $row) { ?>

               
                  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $data ?>">
                    <div class="service-item  position-relative">
                      <div class="icon">
                        <i class="fa-solid fa-mountain-city"></i>
                      </div>

                      <a href="tailieu.php?name=<?php echo htmlentities ($row->name);?>"><h3><?php echo htmlentities($row->name); ?><br>( <?php echo htmlentities($row->ki); ?>)</h3></a>
                    
                      <p ><?php echo htmlentities($row->mota); ?></p>

                      <!-- <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a> -->
                    </div>
                  </div><!-- End Service Item -->
              <?php $data = $data + 100;
                
              }
            } else { ?>
              <h3 style="color:red; text-align:center"> Không có dữ liệu</h3>
              <p></p>
            <?php } ?>
          
          </div>

        </div>
      </section><!-- End Services Section -->

      <!-- ======= Servie Cards Section ======= -->
      <section id="services-cards" class="services-cards">
        <div class="container" data-aos="fade-up">

          <div class="row gy-4">

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
              <h3>Quasi eaque omnis</h3>
              <p>Eius non minus autem soluta ut ui labore omnis quisquam corrupti autem odit voluptas quos commodi magnam
                occaecati.</p>
              <ul class="list-unstyled">
                <li><i class="bi bi-check2"></i> <span>Ullamco laboris nisi ut aliquip</span></li>
                <li><i class="bi bi-check2"></i> <span>Duis aute irure dolor in reprehenderit</span></li>
                <li><i class="bi bi-check2"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
              </ul>
            </div><!-- End feature item-->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <h3>Et nemo dolores consectetur</h3>
              <p>Ducimus ea quam et occaecati est. Temporibus in soluta labore voluptates aut. Et sit soluta non repellat
                sed quia dire plovers tradoria</p>

              <ul class="list-unstyled">
                <li><i class="bi bi-check2"></i> <span>Enim temporibus maiores eligendi</span></li>
                <li><i class="bi bi-check2"></i> <span>Ut maxime ut quibusdam quam qui</span></li>
                <li><i class="bi bi-check2"></i> <span>Officiis aspernatur in officiis</span></li>
              </ul>
            </div><!-- End feature item-->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <h3>Staque laboriosam modi</h3>
              <p>Velit eos error et dolor omnis voluptates nobis tenetur sed enim nihil vero qui suscipit ipsum at magni.
                Ipsa architecto consequatur aliquam</p>
              <ul class="list-unstyled">
                <li><i class="bi bi-check2"></i> <span>Quis voluptates laboriosam numquam</span></li>
                <li><i class="bi bi-check2"></i> <span>Treva libero sunt quis veniam ut</span></li>
                <li><i class="bi bi-check2"></i> <span>Debitis eos est est corrupti</span></li>
              </ul>
            </div><!-- End feature item-->

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
              <h3>Dignissimos suscipit iste</h3>
              <p>Molestiae occaecati assumenda quia saepe nobis recusandae at dicta ducimus sequi numquam commodi est in
                consequatur ea magnam quia itaque</p>
              <ul class="list-unstyled">
                <li><i class="bi bi-check2"></i> <span>Veritatis qui reprehenderit quis</span></li>
                <li><i class="bi bi-check2"></i> <span>Accusantium vel numquam sunt minus</span></li>
                <li><i class="bi bi-check2"></i> <span>Voluptatem pariatur est sationem</span></li>
              </ul>
            </div><!-- End feature item-->

          </div>

        </div>
      </section><!-- End Servie Cards Section -->

      <!-- ======= Alt Services Section 2 ======= -->
      <section id="alt-services-2" class="alt-services section-bg">
        <div class="container" data-aos="fade-up">

          <div class="row justify-content-around gy-4">
            <div class="col-lg-5 d-flex flex-column justify-content-center">
              <h3>Non quasi officia eum nobis et rerum epudiandae rem voluptatem</h3>
              <p>Maxime quia dolorum alias perspiciatis. Earum voluptatem sint at non. Ducimus maxime minima iste magni
                sit praesentium assumenda minus. Amet rerum saepe tempora vero.</p>

              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-easel flex-shrink-0"></i>
                <div>
                  <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                  <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                    non provident</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-patch-check flex-shrink-0"></i>
                <div>
                  <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-brightness-high flex-shrink-0"></i>
                <div>
                  <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                  <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus
                    aut eligendi omnis</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-brightness-high flex-shrink-0"></i>
                <div>
                  <h4><a href="" class="stretched-link">Tride clov</a></h4>
                  <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet.
                    Et eligendi</p>
                </div>
              </div><!-- End Icon Box -->
            </div>

            <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services-2.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
          </div>

        </div>
      </section><!-- End Alt Services Section 2 -->

      <!-- ======= Alt Services Section ======= -->
      <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">

          <div class="row justify-content-around gy-4">
            <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

            <div class="col-lg-5 d-flex flex-column justify-content-center">
              <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
              <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus
                laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-easel flex-shrink-0"></i>
                <div>
                  <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                  <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                    non provident</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-patch-check flex-shrink-0"></i>
                <div>
                  <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-brightness-high flex-shrink-0"></i>
                <div>
                  <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                  <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus
                    aut eligendi omnis</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-brightness-high flex-shrink-0"></i>
                <div>
                  <h4><a href="" class="stretched-link">Tride clov</a></h4>
                  <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet.
                    Et eligendi</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>
      </section><!-- End Alt Services Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Testimonials</h2>
            <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia
              reprehenderit sunt deleniti</p>
          </div>

          <div class="slides-2 swiper">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                      Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                      quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                      tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                      minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                      culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                      quid.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!--================Contact Area =================-->

  <?php include_once('includes/footer.php'); ?>
  <!--================ End footer Area  =================-->

  <!--================Contact Success and Error message Area =================-->





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
<?php } ?>

</html>