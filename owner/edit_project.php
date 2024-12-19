
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php include 'navbar.php' ?>
    <?php 
    
    $msg="";
    $id=$_GET['id'];
    $fetch = $fun->edit_project($id);
    ?>
    <div class="container-fluid page-body-wrapper">
        <?php include 'sidebar.php' ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Project</h4>
                                <div class="col-md-10 grid-margin stretch-card container">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Update Project</h4>
                                            <?php 
                                    if(isset($_GET["msg"])){
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $_GET["msg"]?>
                                </div>
                                <?php        
                                    }
                                ?>
                                            <p class="card-description">
                                               
                                            </p>
                                            <?php

                                            if(mysqli_num_rows($fetch) >0) {

                                            $res = mysqli_fetch_assoc($fetch);
                                            ?>
                                            <form class="forms-sample" action="./owner_form_sub.php" method="POST">
                                              
                                                <!-- client Selection Dropdown -->
                                                <div class="form-group row mb-4">
                                                    <label for="client" class=" col-sm-3 form-label">Client</label>
                                                    <div class="col-sm-9">
                                                        <select id="client" name="client" class="form-select">
                                                            <option value="<?php echo $res['client']; ?>"><?php echo $res['client']; ?></option>
                                                            <option value="client1">client1</option>
                                                            <option value="client2">client2</option>
                                                            <option value="client3">client3</option>
                                                            <option value="client4">client4</option>
                                                            <option value="client5">client5</option>
                                                            <option value="client6">client6</option>
                                                        </select>
                                                    </div>
                                                </div>
 
                                                  <!-- Event Selection Dropdown -->
                                                <div class="form-group row mb-4">
                                                    <label for="event" class=" col-sm-3 form-label">Event</label>
                                                    <div class="col-sm-9">
                                                        <select id="event" name="event" class="form-select">
                                                            <option value="<?php echo $res['event']; ?>"><?php echo $res['event']; ?></option>
                                                            <option value="event1">Event1</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Manager Selection Dropdown -->
                                                <div class="form-group row mb-4">
                                                    <label for="manager" class=" col-sm-3 form-label">Select Manager</label>
                                                    <div class="col-sm-9">
                                                        <select id="manager" name="manager" class="form-select">
                                                            <option value="<?php echo $res['manager']; ?>"><?php echo $res['manager']; ?></option>
                                                            <option value="manager1">manager1</option>
                                                            <option value="manager2">manager2</option>
                                                            <option value="manager3">manager3</option>
                                                            <option value="manager4">manager4</option>
                                                            <option value="manager5">manager5</option>
                                                            <option value="manager6">manager6</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            

                                                <div class="form-group row">
                                                    <label for="exampleInputCost"
                                                        class="col-sm-3 col-form-label">Total Cost </label>
                                                    <div class="col-sm-9">
                                                        <input id="exampleInputCost" class="form-contr" type="number" name="cost"/ value="<?php echo $res['total_cost']; ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="exampleInputexpense"
                                                        class="col-sm-3 col-form-label"> Total Expense</label>
                                                    <div class="col-sm-9">
                                                        <input id="exampleInputexpense" class="form-contr" type="number"
                                                         name="expense"/ value="<?php echo $res['total_expense']; ?>">
                                                    </div>
                                                </div>
                                                <div>
                                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                </div>


                                                <button type="submit" class="btn btn-primary me-2"
                                                    name="project_edit">Submit</button>
                                                <button class="btn btn-light">Cancel</button>
                                            </form>
                                            <?php
                                         } 
                                        ?>
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
    <?php include 'footer.php';?>
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <!-- <script src="vendors/js/vendor.bundle.base.js"></script>
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
    <script src="js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    


</body>

</html>