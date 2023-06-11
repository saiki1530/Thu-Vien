<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['trmsaid'] == 0)) {
    header('location:logout.php');
} else {



?>
    <!doctype html>
    <html class="no-js" lang="en">

    <head>

        <title>CFF || Các môn học</title>

        <link rel="apple-touch-icon" href="apple-icon.png">



        <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
        <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

        <link rel="stylesheet" href="assets/css/style.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



    </head>

    <body>
        <!-- Left Panel -->

        <?php include_once('includes/sidebar.php'); ?>

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <?php include_once('includes/header.php'); ?>
            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Các môn học</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="dashboard.php">Trang chủ</a></li>
                                <li><a href="manage-subjects.php">Các môn học</a></li>
                                <li class="active">Các môn học</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>
                                        <strong class="card-title">Chuyên ngành: Lập Trình Website </strong>
                                        <!-- <input id="searchdata" type="text" name="searchdata" required="true" class="form-control"> -->
                                        <form action="manage-subjects.php" class="form_box d-flex justify-content-between w-100" method="post" name="search">
                                        <input type="search" id="searchdata" name="searchteacher" placeholder="Tìm kiếm thông tin..." data-aos="fade-up" data-aos-delay="200" class="form-control btn-get-started" style="margin-left:70%;margin-top:-2.4%; width:30%" />
                                        <button type="submit" class="btn btn-get-started mr-0 pr-0" name="search" id="submit">
                                           
                                        </button>
                                        </form>
                                    </h4>


                                </div>
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
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <tr>
                                                    <th>STT</th>

                                                    <th>Môn học</th>
                                                    <th>Học kì</th>
                                                    <th>Creation Date</th>
                                                    <th>Action</th>
                                                </tr>
                                                </tr>
                                            </thead>
                                            <?php


                                            $cnt = 1;
                                            if ($query->rowCount() > 0) {
                                                foreach ($results as $row) {               ?>

                                                    <tr>
                                                        <td><?php echo htmlentities($cnt); ?></td>

                                                        <td><?php echo htmlentities($row->name); ?></td>
                                                        <td><?php echo htmlentities($row->ki); ?></td>
                                                        <td><?php echo htmlentities($row->CreationDate); ?></td>
                                                        <td><a href="edit-subjects-detail.php?name=<?php echo htmlentities($row->name); ?>">Edit Details</a></td>
                                                    </tr>
                                            <?php $cnt = $cnt + 1;
                                                }
                                            } ?>

                                        </table>
                                    </div>
                                <?php  } else { ?>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <tr>
                                                    <th>S.NO</th>

                                                    <th>Môn học</th>
                                                    <th>Học kì</th>
                                                    <th>Creation Date</th>
                                                    <th>Action</th>
                                                </tr>
                                                </tr>
                                            </thead>
                                            <?php

                                            $sql = "SELECT * from tailieu Order By ki";
                                            $query = $dbh->prepare($sql);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);

                                            $cnt = 1;
                                            if ($query->rowCount() > 0) {
                                                foreach ($results as $row) {               ?>

                                                    <tr>
                                                        <td><?php echo htmlentities($cnt); ?></td>

                                                        <td><?php echo htmlentities($row->name); ?></td>
                                                        <td><?php echo htmlentities($row->ki); ?></td>
                                                        <td><?php echo htmlentities($row->CreationDate); ?></td>
                                                        <td><a href="edit-subjects-detail.php?name=<?php echo htmlentities($row->name); ?>">Edit Details</a></td>
                                                    </tr>
                                            <?php $cnt = $cnt + 1;
                                                }
                                            } ?>

                                        </table>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>



                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->


        </div><!-- /#right-panel -->

        <!-- Right Panel -->


        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>


    </body>

    </html>
<?php }  ?>