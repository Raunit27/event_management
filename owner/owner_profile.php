
<!DOCTYPE html>
<html lang="en">
<?php 
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Owner Dashboard</title>
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
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  
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
                                <h4 class="card-title">MY profile</h4>
                                <section class="h-100 gradient-custom-2">
                                    <div class="container py-5 h-100">
                                        <div class="row d-flex justify-content-center align-items-center h-100">
                                            <div class="col col-lg-9 col-xl-7">
                                                <div class="card">
                                                    <div class="rounded-top text-white d-flex flex-row"
                                                        style="background-color: #000; height:200px;">
                                                        <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                                            <img src="./images/owner_images/<?php echo $res['image'];?>" alt="Generic placeholder image"
                                                                class="img-fluid img-thumbnail mt-4 mb-2"
                                                                style="width: 150px; z-index: 1">
                                                                
                                                            <button type="button" class="btn btn-outline-dark"
                                                                data-mdb-ripple-color="dark" style="z-index: 1;">
                                                                <a href="owner_edit_profile.php">Edit profile</a>
                                                                
                                                            </button>
                                                        </div>
                                                        <div class="ms-3" style="margin-top: 130px;">
                                                            <h5><?php echo $res['name'];?></h5>
                                                            <p> <?php echo $res['title'];?></p>
                                                        </div>
                                                    </div>
                                                    <div class="p-4 text-black" style="background-color: #f8f9fa;">
                                                        <div class="d-flex justify-content-end text-center py-1">
                                                            <div>
                                                            <a href="<?php echo $res['fblink'];?>"target="_blank"><img src="images/facebook-logo.png" alt="Email Icon"  height="30" width="30" ></a>
                                                            </div>
                                                            <div class="px-3">
                                                            <a href="<?php echo $res['instalink'];?>"target="_blank"><img src="images/instagram.png" alt="Email Icon"  height="30" width="30" ></a>
                                                            </div>
                                                            <div>
                                                            <a href="<?php echo $res['twitterlink'];?>"target="_blank"><img src="images/twitter-logo.png" alt="Email Icon"  height="30" width="30" ></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-4 text-black">
                                                        <div class="mb-5">
                                                            <p class="lead fw-normal mb-1">About</p>
                                                            <div class="p-4" style="background-color: #f8f9fa;">
                                                    
                                                                <p class="font-italic mb-3 bold">Name : <?php echo $res['name'];?></p>
                                                                <p class="font-italic mb-3">Title : <?php echo $res['title'];?></p>
                                                                <p class="font-italic mb-3">Company Name : <?php echo $res['company_name'];?></p>
                                                                <p class="font-italic mb-3">Email : <?php echo $res['email'];?></p>
                                                                <p class="font-italic mb-3">Phone : <?php echo $res['phone'];?></p>
                                                                <p class="font-italic mb-3">Website : <a href="<?php echo $res['website']; ?>" target="_blank"><?php echo $res['website'];?></a></p>
                                                            </div>
                                                        </div>
                                                        <!-- <div
                                                            class="d-flex justify-content-between align-items-center mb-4">
                                                            <p class="lead fw-normal mb-0">Recent photos</p>
                                                            <p class="mb-0"><a href="#!" class="text-muted">Show all</a>
                                                            </p>
                                                        </div> -->
                                                        <!-- <div class="row g-2">
                                                            <div class="col mb-2">
                                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(112).webp"
                                                                    alt="image 1" class="w-100 rounded-3">
                                                            </div>
                                                            <div class="col mb-2">
                                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(107).webp"
                                                                    alt="image 1" class="w-100 rounded-3">
                                                            </div>
                                                        </div>
                                                        <div class="row g-2">
                                                            <div class="col">
                                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(108).webp"
                                                                    alt="image 1" class="w-100 rounded-3">
                                                            </div>
                                                            <div class="col">
                                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(114).webp"
                                                                    alt="image 1" class="w-100 rounded-3">
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
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
    <?php include('footer.php'); ?>
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