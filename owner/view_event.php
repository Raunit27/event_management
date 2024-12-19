
<!DOCTYPE html>
<html lang="en">
<?php 
?>
<head>
    <!-- Required meta tags --> 
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
    $fetch = $fun->view_event();
    ?>
    <div class="container-fluid page-body-wrapper">
        <?php include 'sidebar.php' ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Event Details</h4>
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Details</h4>
                                            <p class="card-description">
                                                 <code></code>
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr_NO</th>
                                                            <th>Client</th>
                                                            <th>Event</th>
                                                            <th>Event Start Date</th>
                                                            <th>Event Start Date</th>
                                                            <th>Guest Expected</th>
                                                            <th>Venue</th>
                                                            <th>Catering</th>
                                                            <th>Decoration </th>
                                                            <th>Photography </th>
                                                            <th>Music </th>
                                                            <th>Parlour </th>
                                                            <th>Action </th>
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
                                                         if(mysqli_num_rows($fetch)>0){
                                                         $sr = 1;
                                                        while($res = mysqli_fetch_assoc($fetch)){
                                                         ?>
                                                        <tr>
                                                            <th scope="row"><?php echo $sr;?></th>
                                                            <td><?php echo $res['client_name'];?></td>
                                                            <td><?php echo $res['event'];?></td>
                                                            <td><?php echo $res['startdate'];?></td>
                                                            <td><?php echo $res['enddate'];?></td>
                                                            <td><?php echo $res['guest_expected'];?></td>
                                                            <td><?php echo $res['venue'];?></td>
                                                            <td><?php echo $res['catering'];?></td>
                                                            <td><?php echo $res['decoration'];?></td>
                                                            <td><?php echo $res['photography'];?></td>
                                                            <td><?php echo $res['music'];?></td>
                                                            <td><?php echo $res['parlour'];?></td>
                                                            <td class="">
                                                               <a href="edit_event.php?event&id=<?php echo $res['id']?>"> <button type="button"
                                                                    class="btn btn-primary">Edit</button></a>
                                                            </td>
                                                            <td>
                                                                <button type="button"
                                                                    onclick="deleteEvent(<?php echo $res['id']?>)"
                                                                    <button type="button"
                                                                    class="btn btn-danger">
                                                                    Delete
                                                                    <!-- <a href="delete.php?student&id=<?php //echo $res['student_id']?>"> Delete</a> -->
                                                                </button>
                                                            </td>
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
    <?php include 'footer.php' ?>
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
   async function deleteEvent(id){
        const response = await fetch(`delete.php?event=true&id=${id}`);
        //const res = await response.text();
        //alert(res);   
        window.location.reload();
    }
   
   </script>



</body>

</html>