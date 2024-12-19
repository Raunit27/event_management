<!DOCTYPE html>
<html lang="en">

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
    
    $fetch = $fun->view_staff();
    
   

    $fetch1=$fun->view_staff_payment();
   
    
    ?>
    <div class="container-fluid page-body-wrapper">
        <?php include 'sidebar.php' ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Payment Details</h4>

                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title"> Pay Now</h4>
                                            <h1>
                                                <?php 
                                    if(isset($_GET["msg"])){
                                ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?= $_GET["msg"]?>
                                                </div>
                                                <?php        
                                    }
                                ?>
                                            </h1>
                                            <form class="forms-sample" action="owner_form_sub.php" method="POST">

                                                <!-- for client -->
                                                <div class="form-group row mb-4">
                                                    <label for="staff" class=" col-sm-3 form-label">Staff :</label>
                                                    <div class="col-sm-6">
                                                        <select id="staff" name="staff" class="form-select">
                                                            <option value="">Select an Staff</option>
                                                            <?php
                                                           while($res = mysqli_fetch_assoc($fetch)){
                                                             ?>

                                                            <option
                                                                value="<?php echo $res['id'] . '|' . $res['name']; ?>">
                                                                <?php echo $res['name']  ?>
                                                            </option>
                                                            <?php 
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label for="date" class=" col-sm-3 form-label">Date:</label>
                                                    <div class="col-sm-6">
                                                        <input type="date" class="form-control" id="date" name="date">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label for="amount" class=" col-sm-3 form-label">Paying Amount
                                                        :</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" class="form-control" id="amount"
                                                            name="amount">
                                                    </div>
                                                </div>
                                                <div>
                                                    <input type="text" name="id" id="id" value="<?php  ?>" hidden />
                                                </div>
                                                <div class=text-center>
                                                    <button type="submit"
                                                        onclick="return confirm('Are you sure? want to pay')"
                                                        class="btn btn-primary me-2" name="staff_pay">Pay</button>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>



                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Latest Transection's</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sr_NO</th>
                                                        <th>Staff</th>
                                                        <th>Date</th>
                                                        <th>Amount Paid</th>

                                                        <!-- <th>Total Cost </th>
                                                            <th>Total Expense expected</th>
                                                            <th>Action</th>
                                                            <th>Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                         if(mysqli_num_rows($fetch1)>0){
                                                         $sr = 1;
                                                        while($res1 = mysqli_fetch_assoc($fetch1)){
                                                         ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $sr;?></th>
                                                        <td><?php echo $res1['staff_name'];?></td>
                                                        
                                                        <td><?php echo $res1['date'];?></td>
                                                        <td><?php echo $res1['amount'];?></td>

                                                    </tr>
                                                    <?php 
                                                         $sr++;
                                                          }
                                                          }?>
                                                </tbody>
                                            </table>
                                        </div>
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
   <?php include "footer.php"; ?>
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
    <script>
    async function deleteProject(id) {
        const response = await fetch(`delete.php?project=true&id=${id}`);
        //const res = await response.text();
        //alert(res);   
        window.location.reload();
    }
    </script>



</body>

</html>