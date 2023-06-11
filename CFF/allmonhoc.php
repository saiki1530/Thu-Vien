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

  <title>Các tài liệu môn học</title>
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
  <?php
  $sql = "SELECT * from tailieu ORDER BY ki ";
  $query = $dbh->prepare($sql);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  $sublist = $query->rowCount();
  ?>
  <!--================Home Banner Area =================-->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/caodangfptpolytechnic-lienhe-1.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Tài liệu</h2>
        <ol>
          <li><a href="index.php">Trang chủ</a></li>
          <li>Tài liệu môn học</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
        <h2><span style="color:orange">Môn học</span> <br>I. Chuyên ngành thiết kế website (<?php echo htmlentities($sublist);?> môn)</h2>
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
    </section><!-- End Servie Cards Section -->

    <!-- ======= Alt Services Section 2 ======= -->



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


</html>