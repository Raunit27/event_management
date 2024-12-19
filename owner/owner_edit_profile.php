<!DOCTYPE html>
<html lang="en">
<?php 
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Owner Dashboard </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>

    <?php include 'navbar.php' ?>
    <?php 
    
    $msg="";
    $fetch = $fun->view_owner(1);
    if(mysqli_num_rows($fetch)>0){
        $res=mysqli_fetch_assoc($fetch);
    }
    else{
        $res=null;
    }
   
    ?>
    <div class="container-fluid page-body-wrapper">
        <?php include "sidebar.php" ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit owner profile</h4>
                                <?php 
                                    if(isset($_GET["msg"])){
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $_GET["msg"]?>
                                </div>
                                <?php        
                                    }
                                ?>
                                <div class="col-md-10 grid-margin stretch-card container">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2>Owner Profile Form</h2>
                                            <form action="owner_form_sub.php" method="post"
                                                enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label for="name">Name:</label>
                                                            <input type="text" class="form-control" id="name"
                                                                name="name" value="<?php echo $res['name'];?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">Title:</label>
                                                            <input type="text" class="form-control" id="title"
                                                                name="title" value="<?php echo $res['title'];?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="company_name">Company Name:</label>
                                                            <input type="text" class="form-control" id="company_name"
                                                                name="company_name"
                                                                value="<?php echo $res['company_name']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email:</label>
                                                            <input type="email" class="form-control" id="email"
                                                                name="email" value="<?php echo $res['email'];?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone">Phone:</label>
                                                            <input type="tel" class="form-control" id="phone"
                                                                name="phone" value="<?php echo $res['phone']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="website">Website:</label>
                                                            <input type="url" class="form-control" id="website"
                                                                name="website" value="<?php echo $res['website']; ?>">
                                                        </div>
                                                        <div>
                                                            <input type="text" name="id" value="1" hidden>
                                                        </div>
                                                    </div>




                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="image">Profile upload:</label>
                                                                <input type="file" class="form-control" id="image"
                                                                    name="image" value="" accept="image/*">
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="fblink">Facebook Link:</label>
                                                                <input type="url" class="form-control" id="fblink"
                                                                    name="fblink" value="<?php echo $res['fblink'];?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="instalink">Instagram Link:</label>
                                                                <input type="url" class="form-control" id="instalink"
                                                                    name="instalink"
                                                                    value="<?php echo $res['instalink']; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="twitterlink">Twitter Link:</label>
                                                                <input type="url" class="form-control" id="twitterlink"
                                                                    name="twitterlink"
                                                                    value="<?php echo $res['twitterlink']; ?>">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="userid">Username:</label>
                                                            <input type="text" class="form-control" id="userid"
                                                                name="userid"
                                                                value="<?php echo $res['username']; ?>">
                                                        </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                        <div class="form-group">
                                                                <label for="pass">Password:</label>
                                                                <input type="password" class="form-control" id="pass"
                                                                    name="pass"
                                                                    value="<?php echo $res['password']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                        </div>
                                        <button type="submit" name="owner_edit_submit"
                                            class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial: ./partials/_footer.html -->

        <!-- partial -->
    </div>
    </div>




    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
   <?php include 'footer.php' ?>
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="vendors/progressbar.js/progressbar.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>