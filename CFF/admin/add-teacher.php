<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['trmsaid'] == 0)) {
    header('location:logout.php');
} else {
    if (isset($_POST['submit'])) {

        $trmsaid = $_SESSION['trmsaid'];
        $tname = $_POST['tname'];
        $email = $_POST['email'];
        // $mobnum=$_POST['mobilenumber'];
        // $address=$_POST['address'];
        $quali = $_POST['qualifications'];
        $tsubjects = $_POST['tsubjects'];
        // $tdate=$_POST['joiningdate'];
        $propic = $_FILES["propic"]["name"];
        $extension = substr($propic, strlen($propic) - 4, strlen($propic));
        $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");
        if (!in_array($extension, $allowed_extensions)) {
            echo "<script>alert('Profile Pics has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
        } else {

            $propic = md5($propic) . time() . $extension;
            move_uploaded_file($_FILES["propic"]["tmp_name"], "images/" . $propic);
            $sql = "insert into tblteacher(Name,Picture,Email,Qualifications,TeacherSub)values(:tname,:tpics,:email,:qualifications,:tsubjects)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':tname', $tname, PDO::PARAM_STR);
            $query->bindParam(':tpics', $propic, PDO::PARAM_STR);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':qualifications', $quali, PDO::PARAM_STR);
            // $query->bindParam(':mobilenumber',$mobnum,PDO::PARAM_STR);
            // $query->bindParam(':address',$address,PDO::PARAM_STR);
            $query->bindParam(':tsubjects', $tsubjects, PDO::PARAM_STR);
            // $query->bindParam(':joiningdate',$tdate,PDO::PARAM_STR);
            $query->execute();

            $LastInsertId = $dbh->lastInsertId();
            if ($LastInsertId > 0) {
                echo '<script>alert("Teacher Detail has been added.")</script>';
                echo "<script>window.location.href ='add-teacher.php'</script>";
            } else {
                echo '<script>alert("Something Went Wrong. Please try again")</script>';
            }
        }
    }
?>

    <!doctype html>
    <html class="no-js" lang="en">

    <head>

        <title>CFF || Add Teachers</title>


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
                            <h1>Teacher Details</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="add-teacher.php">Teacher Details</a></li>
                                <li class="active">Add</li>
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
                                <div class="card-header"><strong>Teacher </strong><small> Details</small></div>
                                <form name="" method="post" action="" enctype="multipart/form-data">

                                    <div class="card-body card-block">

                                        <div class="form-group"><label for="company" class=" form-control-label">Teacher Name</label><input type="text" name="tname" value="" class="form-control" id="tname" required="true"></div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Teacher Pic</label><input type="file" name="propic" value="" class="form-control" id="propic" required="true"></div>

                                        <div class="form-group"><label for="street" class=" form-control-label">Teacher Email</label><input type="text" name="email" value="" id="email" class="form-control" required="true"></div>
                                        <div class="row form-group">
                                            <div class="col-12">
                                                <div class="form-group"><label for="city" class=" form-control-label">Chức vụ</label><input type="text" name="qualifications" id="qualifications" value="" class="form-control" required="true"></div>
                                            </div>


                                        </div>
                                        <div class="row form-group">
                                            <div class="col-12">
                                            </div>


                                        </div>
                                        <div class="row form-group">
                                            <div class="col-12">
                                                <div class="form-group"><label for="city" class=" form-control-label">Teacher Subjects</label><select type="text" name="tsubjects" id="tsubjects" value="" class="form-control" required="true">
                                                        <option value="">Choose Subjects</option>
                                                        <?php

                                                        $sql2 = "SELECT * from tailieu ";
                                                        $query2 = $dbh->prepare($sql2);
                                                        $query2->execute();
                                                        $result2 = $query2->fetchAll(PDO::FETCH_OBJ);

                                                        foreach ($result2 as $row) {
                                                        ?>
                                                            <option value="<?php echo htmlentities($row->name); ?>"><?php echo htmlentities($row->name); ?></option>
                                                        <?php } ?>


                                                    </select></div>
                                            </div>


                                        </div>
                                        <div class="row form-group">
                                            <div class="col-12">
                                            </div>
                                            <div class="col-12">
                                            </div>

                                        </div>
                                        <p style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="echo "<script>alert('Your Password succesfully changed');</script>";
}
else {
echo "<script>alert('Email id or Mobile no is invalid');</script>"; 
}" id="submit">
                                                <i class="fa fa-dot-circle-o"></i> Add
                                            </button></p>

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