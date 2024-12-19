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
                                <h4 class="card-title">Add Event category</h4>
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
                                            <h4 class="card-title">Category </h4>
                                            <p class="card-description">

                                            </p>
                                            <form class="forms-sample" action=" ./owner_form_sub.php" enctype="multipart/form-data" method="POST">
                                                <div class="form-group row">
                                                    <label for="exampleInputUsername2"
                                                        class="col-sm-3 col-form-label">Event Category Name :</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="category_name" class="form-control"
                                                            id="exampleInputUsername2" placeholder="Enter category  name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputnumber"
                                                        class="col-sm-3 col-form-label">Minimum Guest number :</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" name="minimum_guest" class="form-control"
                                                            id="exampleInputnumber" placeholder="Minimum Guest number ">
                                                    </div>
                                                </div>
                                                
                                                <button type="submit" class="btn btn-primary me-2"
                                                    name="event_category_submit">Submit</button>
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