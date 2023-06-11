<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<?php

$sdata = $_GET['Name'];
$sql1 = "SELECT * from tblteacher where Name like '%$sdata%' ";

$query1 = $dbh->prepare($sql1);
$query1->execute();
$results1 = $query1->fetchAll(PDO::FETCH_OBJ);
// seach
$sql = "SELECT * from danhgia where name_teacher like  '%$sdata%' ";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $dulieu = $_POST['dulieu'];
  $name_teacher = $_POST['name_teacher'];

  $sql = "insert into danhgia(name,dulieu,name_teacher)values(:name,:dulieu,:name_teacher)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':name', $name, PDO::PARAM_STR);
  $query->bindParam(':dulieu', $dulieu, PDO::PARAM_STR);
  $query->bindParam(':name_teacher', $name_teacher, PDO::PARAM_STR);
  $query->execute();

reset($dulieu);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UpConstruction Bootstrap Template - Project Details</title>
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
  <!-- ======= Header ======= -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Project Details</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li style="color:aliceblue">Project Details</li>
          <?php


          if ($query1->rowCount() > 0) {
            foreach ($results1 as $row) { ?>

              <li><?php echo htmlentities($row->Name); ?></li>
        </ol>
    <?php
              break;
            }
          }  ?>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Projet Details Section ======= -->
    <section id="project-details" class="project-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2 style="margin-top:-10%">Giảng Viên: <br> <?php echo htmlentities($row->Name); ?> - <?php echo htmlentities($row->Qualifications); ?></h2>
              <p>
                <?php echo htmlentities($row->mota); ?>
              </p>
              <p>

              </p>
              <?php


              if ($query->rowCount() > 0) {
                foreach ($results as $row) { ?>

                  <div class="testimonial-item">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <?php echo htmlentities($row->dulieu) ?>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <div>
                      <img src="admin/images/koanh.jpg" class="testimonial-img" alt="">
                      <h3>Ẩn danh</h3>
                      <h4>Sinh Viên</h4>
                    </div>
                  </div>
              <?php

                }
              }  ?>
              <hr>
              <div>
                <h5>Bình Luận</h5>
                <form name="" method="post" action="">
                  <label for="name">Tên:</label><br>
                  <input type="text" id="name" name="name" value="Ẩn danh"><br><br>
                  <label for="comment">Bình luận:</label><br>
                  <textarea id="comment" name="dulieu" rows="4" cols="100"></textarea><br><br>
                  <input type="hidden" id="name" name="name_teacher" value="<?php echo $sdata ?>"><br><br>
                  <button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit" reset();>Gửi</button>
                </form>
              </div>
              <small class="text-muted" style="margin-left:45%; font-size:medium">Đang được cập nhật...</small>

            </div>

          </div>

          <?php


          if ($query1->rowCount() > 0) {
            foreach ($results1 as $row) { ?>
              <div class="col-lg-3">
                <div class="portfolio-info">
                  <h3 style="margin-top:-25%">Thông tin liên lạc</h3>
                  <ul>
                    <li><strong>Chức vụ</strong> <span><?php echo htmlentities($row->Qualifications) ?></span></li>
                    <li><strong>Email</strong> <span><?php echo htmlentities($row->Email) ?></span></li>
                    <li><strong>Độ yêu thích</strong> <span><?php echo htmlentities($row->danhgia) ?>/5</span></span></li>
                    <li><strong>Khác</strong><a href="<?php echo htmlentities($row->youtube) ?>">youtube.com/<?php echo htmlentities($row->Name) ?></a></li>
                    <li><a href="<?php echo htmlentities($row->web) ?>" class="btn-visit align-self-start">Visit Website</a></li>
                  </ul>
                </div>
              </div>
          <?php
              break;
            }
          }  ?>
        </div>

      </div>

    </section><!-- End Projet Details Section -->
    <marquee scrollamount=10><small style=" font-size:medium; margin-top:5%; margin-left:4%; color:red;">Lưu ý: Đây là lời đánh giá từ Sinh viên chỉ có giá trị tham khảo vào không có tính xác thực cao vui lòng cân nhắc kĩ trước khi xem!</small></marquee>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <!-- End Footer -->
  <?php include_once('includes/footer.php'); ?>
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