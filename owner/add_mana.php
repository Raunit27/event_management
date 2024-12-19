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

    <div class="container-fluid page-body-wrapper">
        <?php include "sidebar.php" ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin">
                        <div class="card"> 
                            <div class="card-body">
                                <h4 class="card-title">Add Manager</h4>
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
                                            <h4 class="card-title">Manager </h4>
                                            <p class="card-description">

                                            </p>
                                            <form class="forms-sample" action=" ./owner_form_sub.php" enctype="multipart/form-data" method="POST">
                                                <div class="form-group row">
                                                    <label for="exampleInputUsername2"
                                                        class="col-sm-3 col-form-label">Full Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="name" class="form-control"
                                                            id="exampleInputUsername2" placeholder="Enter name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputEmail2"
                                                        class="col-sm-3 col-form-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" name="email" class="form-control"
                                                            id="exampleInputEmail2" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputMobile"
                                                        class="col-sm-3 col-form-label">Mobile</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="m_nuber" class="form-control"
                                                            id="exampleInputMobile" placeholder="Mobile number">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputdob" class="col-sm-3 col-form-label">Date of
                                                        Birth</label>
                                                    <div class="col-sm-9">
                                                        <input type="date" name="dob" class="form-control"
                                                            id="exampleInputdob" placeholder="DOB">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputaddress"
                                                        class="col-sm-3 col-form-label">Address</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="address" class="form-control"
                                                            id="exampleInputaddress" placeholder="Address">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputDOJ" class="col-sm-3 col-form-label">Date of
                                                        Joinning</label>
                                                    <div class="col-sm-9">
                                                        <input type="date" name="doj" class="form-control"
                                                            id="exampleInputDOJ" placeholder="Date of Join">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="image" class="col-sm-3 col-form-label">Profile upload</label>
                                                    <div class="col-sm-9">
                                                    <input type="file" class="form-control" id="image" name="image"
                                                        value="" accept="image/*">
                                                        </div>
                                                </div>
                                                <div class="form-group row mt-3">
                                                    <label for="exampleInputusername"
                                                        class="col-sm-3 col-form-label">Username</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="username" class="form-control"
                                                            id="exampleInputusername" placeholder="username">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputPassword2"
                                                        class="col-sm-3 col-form-label">Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" name="password" class="form-control"
                                                            id="exampleInputPassword2" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputConfirmPassword2"
                                                        class="col-sm-3 col-form-label">Re Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" name="re_password" class="form-control"
                                                            id="exampleInputConfirmPassword2" placeholder="Password">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary me-2"
                                                    name="mana_submit">Submit</button>
                                                <button class="btn btn-light">Cancel</button>
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
   <?php include "footer.php" ?>
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