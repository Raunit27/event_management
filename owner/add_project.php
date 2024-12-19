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

    <?php include 'navbar.php'  ?> 
    <?php
     $fetch = $fun->view_client_project();
     
    ?>
    <?php    
   $fetch1 = $fun->view_manager();
   ?>

    <div class="container-fluid page-body-wrapper">
        <?php include 'sidebar.php' ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Project</h4>
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
                                            <h4 class="card-title">Add project</h4>
                                            <p class="card-description">

                                            </p>
                                            <form class="forms-sample" action="./owner_form_sub.php" method="POST">

                                                <!-- client Selection Dropdown -->
                                                <div class="form-group row mb-4">
                                                    <label for="client1" class=" col-sm-3 form-label">Client</label>
                                                    <div class="col-sm-9">
                                                        <select id="client1" name="client" class="form-select">
                                                            <option value="">Select an Client</option>
                                                            <?php
                                                         if(mysqli_num_rows($fetch)>0){
                                                         
                                                        while($res = mysqli_fetch_assoc($fetch)){
                                                         ?>
                                                            <option
                                                                value="<?php echo $res['client_id'] . '|' . $res['client_name']; ?>">
                                                                <?php echo $res['client_name'] ?></option>
                                                            <?php 
                                                           }
                                                        }
                                                          ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Event Selection Dropdown -->
                                                <div class="form-group row mb-4">
                                                    <label for="event1" class=" col-sm-3 form-label">Event</label>
                                                    <div class="col-sm-9">
                                                        <select id="event1" name="event" class="form-select">
                                                            <option value="">Select an event</option>
                                                            <option value="event1">Event1</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Manager Selection Dropdown -->
                                                <div class="form-group row mb-4">
                                                    <label for="manager" class=" col-sm-3 form-label">Select
                                                        Manager</label>
                                                    <div class="col-sm-9">
                                                        <select id="manager" name="manager" class="form-select">
                                                            <option value="">Select a manager</option>
                                                            <?php
                                                         if(mysqli_num_rows($fetch1)>0){
                                                        while($res1 = mysqli_fetch_assoc($fetch1)){
                                                         ?>
                                                           <option value="<?php echo $res1['id'] . '|' . $res1['name'];?>">
                                                        <?php echo $res1['name']; ?></option>
                                                            <?php 
                                                          }
                                                          }?>
                                                        </select>
                                                    </div>
                                                </div>



                                                <div class="form-group row">
                                                    <label for="exampleInputCost" class="col-sm-3 col-form-label">Total
                                                        Cost </label>
                                                    <div class="col-sm-9">
                                                        <input id="exampleInputCost" class="form-contr" type="number"
                                                            name="cost" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="exampleInputexpense" class="col-sm-3 col-form-label">
                                                        Total Expense</label>
                                                    <div class="col-sm-9">
                                                        <input id="exampleInputexpense" class="form-contr" type="number"
                                                            name="expense" />
                                                    </div>
                                                </div>


                                                <button type="submit" class="btn btn-primary me-2"
                                                    name="project_submit">Submit</button>
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

            
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="ajax-script.js" type="text/javascript"></script>


</body>

</html>