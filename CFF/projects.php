<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <title>Thông tin về các giảng viên</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <!--  -->
  <!-- default styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />

  <!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme CSS files as mentioned below (and change the theme property of the plugin) -->
  <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.css" media="all" rel="stylesheet" type="text/css" />

  <!-- important mandatory libraries -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/star-rating.min.js" type="text/javascript"></script>

  <!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme JS files as mentioned below (and change the theme property of the plugin) -->
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.js"></script>

  <!-- optionally if you need translation for your language then include locale file as mentioned below (replace LANG.js with your own locale file) -->
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/locales/LANG.js"></script>
  <!--  -->
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
  <!-- ======= Header ======= -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/caodangfptpolytechnic-lienhe-1.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Giảng viên Fpoly</h2>
        <ol>
          <li><a href="index.php">Trang chủ</a></li>
          <li>Giảng viên</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">

      <div class="container" data-aos="fade-up">
        <h2 style="text-align: center;text-transform: uppercase; margin-top:-4%">Giảng viên Fpoly</h2>
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">


          <div class="row gy-5 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?php include_once('includes/header.php'); ?>
            <?php
            $sql = "SELECT * from tblteacher order by danhgia DESC";
            $query = $dbh->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            $sublist = $query->rowCount();
            ?>
            <?php if (($query->rowCount() > 0)) {

              foreach ($results as $row) { ?>

                <div class="col-lg-3 col-md-6 portfolio-item filter-remodeling">
                  <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md">
                        <img src="admin/images/<?php echo htmlentities($row->Picture); ?>" class="img-fluid rounded-1" alt="...">
                      </div>
                    </div>
                    <div class="row g-0">
                      <div class="col-md">
                        <div class="card-body">
                          <a href="project-details.php?Name=<?php echo htmlentities ($row->Name);?>" title="More Details" class="details-link">
                            <h5 class="card-title"><?php echo htmlentities($row->Name); ?><i class="bi bi-link-45deg"></i></h5>
                          </a>
                          <p class="card-text"> <?php echo htmlentities($row->Email); ?></p>
                          <label for="input-7-xs" class="control-label">Độ yêu thích</label>

                          <input id="input-7-xs" class="rating rating-loading" value=" <?php echo htmlentities($row->danhgia); ?>" data-min="0" data-max="5" data-step="0.5" data-size="xs">
                          <p class="card-text"><small class="text-muted">Last updated <?php echo htmlentities($row->RegDate); ?></small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <?php }
            } ?>

          </div><!-- End Projects Container -->
         
        </div>
       
      </div>
      <small class="text-muted" style="margin-left:45%; font-size:medium">Đang được cập nhật...</small>
    </section><!-- End Our Projects Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include_once('includes/footer.php'); ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
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