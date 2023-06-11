<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['trmsaid'] == 0)) {
    header('location:logout.php');
} else {
    if (isset($_POST['submit'])) {
        $name = $_GET['name'];
        $name = $_POST['name'];
        $ki = $_POST['ki'];
        $mota = $_POST['mota'];

        $sql = "update tailieu set name=:name, ki=:ki, mota=:mota where name=:name";

        $query = $dbh->prepare($sql);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':ki', $ki, PDO::PARAM_STR);
        $query->bindParam(':mota', $mota, PDO::PARAM_STR);
        // $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->execute();

        echo '<script>alert("Subject has been updated")</script>';
    }
?>

    <!doctype html>
    <html class="no-js" lang="en">

    <head>

        <title>CFF || Chỉnh sửa môn học</title>

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
                            <h1>Chỉnh sửa môn học</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="dashboard.php">Trang chủ</a></li>
                                <li><a href="manage-subjects.php">Chỉnh sửa môn học</a></li>
                                <li class="active">Chỉnh sửa</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">
                <div class="animated fadeIn">


                    <div class="row">
                        <div class="col-lg-6">
                            <!-- .card -->

                        </div>
                        <!--/.col-->

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header"><strong>Môn học</strong><small> Chi tiết</small></div>
                                <form name="" method="post" action="">

                                    <div class="card-body card-block">
                                        <?php
                                        $sdata = $_GET['name'];
                                        $sql = "SELECT * from  tailieu where name like '%$sdata%'";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        $cnt = 1;
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $row) {               ?>
                                                <div class="form-group"><label for="company" class=" form-control-label">Môn học</label><input type="text" name="name" value="<?php echo $row->name; ?>" class="form-control" id="name" required="true"></div>
                                                <div class="form-group"><label for="company" class=" form-control-label">Học kì</label><input type="text" name="ki" value="<?php echo $row->ki; ?>" class="form-control" id="ki" required="true"></div>
                                                <div class="form-group"><label for="company" class=" form-control-label">Mô tả</label><input type="text" name="mota" value="<?php echo $row->mota; ?>" class="form-control" id="mota" required="true"></div>




                                    </div>
                            <?php $cnt = $cnt + 1;
                                            }
                                        } ?>
                            <div class="card-footer">
                                <p style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">
                                        <i class="fa fa-dot-circle-o"></i> Update
                                    </button></p>

                            </div>
                            </div>
                            </form>
                        </div>




                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->


        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

        <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

    </html>
<?php }  ?>