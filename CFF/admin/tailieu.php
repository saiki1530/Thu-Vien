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

        <title>CFF || Tài liệu môn học</title>

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
                            <h1>Tài liệu môn học</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="dashboard.php">Trang chủ</a></li>
                                <li><a href="manage-teacher.php">Tài liệu môn học</a></li>
                                <li class="active">Tài liệu</li>
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
                                    <strong class="card-title">Tài liệu môn học</strong>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <tr>
                                                <th>Kì</th>

                                                <th>Tên môn học</th>

                                                <th>Tài liệu</th>
                                                <th>Ngày chỉnh sửa</th>
                                                <th>Hành động</th>
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
                                                    <td><?php echo htmlentities($row->ki); ?></td>
                                                    <td><?php echo htmlentities($row->name); ?></td>

                                                    <td>
                                                        <a href="lab_asm.php?name=<?php echo htmlentities($row->name); ?>">
                                                            Xem chi tiết
                                                        </a>
                                                    </td>
                                                    <td><?php echo htmlentities($row->CreationDate); ?></td>
                                                    <td><a href="edit-teacher-detail.php?editid=<?php echo htmlentities($row->ID); ?>">Chỉnh sửa chi tiết</a></td>
                                                </tr>
                                        <?php $cnt = $cnt + 1;
                                            }
                                        } ?>

                                    </table>
                                </div>
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