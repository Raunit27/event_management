<!DOCTYPE html>
<html lang="en">
<?php 
?>
<head>
    <!-- Required meta tags --> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ownwe Dashboard</title>
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
    
    $fetch = $fun->view_client_event(); 
    if(mysqli_num_rows($fetch)>0){
        $res=mysqli_fetch_assoc($fetch);
    }
    else{
        $res=null;
    }
    $fetch1 = $fun->view_venue();
    
   
    ?>
    <div class="container-fluid page-body-wrapper">
        <?php include 'sidebar.php' ?>
        <div class="main-panel"> 
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Event</h4>
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
                                            <h4 class="card-title">Add Event</h4>
                                            <p class="card-description">
                                               
                                            </p>
                                            
                                            <form class="forms-sample" action="./owner_form_sub.php " method="POST">

                                                <!-- for client -->
                                                <div class="form-group row mb-4">
                                                    <label for="client" class=" col-sm-3 form-label">Client:</label>
                                                    <div class="col-sm-9">
                                                        <select id="client" name="Client" class="form-select">
                                                            <option value="">Select an Client</option>
                                                            <?php
                                                             while($res = mysqli_fetch_assoc($fetch)){
                                                                ?>
                                                            <option value="<?php echo $res['id'] . '|' . $res['name']; ?>"><?php echo $res['name'] ?></option>
                                                            <?php 
                                                          }
                                                          ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label for="event1" class=" col-sm-3 form-label">Event:</label>
                                                    <div class="col-sm-9">
                                                        <select id="event1" name="event" class="form-select">
                                                            <option value="">Select an event</option>
                                                           
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label for="startdate" class="col-sm-3 col-form-label">Event Start
                                                        Date</label>
                                                    <div class="col-sm-9">
                                                        <input type="date" name="startdate" class="form-control"
                                                            id="startdate">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="form-group row">
                                                        <label for="enddate" class="col-sm-3 col-form-label">Event End
                                                            Date</label>
                                                        <div class="col-sm-9">
                                                            <input type="date" name="enddate" class="form-control"
                                                                id="enddate">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="G_number" class="col-sm-3 col-form-label">Guest
                                                        Expected</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" name="G_number" class="form-control"
                                                            id="G_number">
                                                    </div>

                                                </div>

                                                <!-- for venu list -->
                                                <div class="form-group row mb-4">
                                                    <label for="venue" class=" col-sm-3 form-label">Venue :</label>
                                                    <div class="col-sm-9">
                                                        <select id="venue" name="venue" class="form-select">
                                                            <option value="">Select a venue</option>
                                                            <?php
                                                            if(mysqli_num_rows($fetch1)>0){
                                                             while($res1 = mysqli_fetch_assoc($fetch1)){
                                                                ?>
                                                                <option value="<?php echo $res1['venue_name'];?>"><?php echo $res1['venue_name'];?></option>
                                                                <?php 
                                                          }
                                                        }
                                                          ?>
                                                        </select> 
                                                    </div>
                                                </div>


                                                <div>
                                                    <div class="form-group row">
                                                        <label for="Catering"
                                                            class="col-sm-3 col-form-label">Catering</label>
                                                        <div class="col-sm-9">
                                                            <div class="row">
                                                            <div class="form-check col">
                                                                <input class="form-check-input" type="radio"
                                                                    name="Catering" id="Catering1"
                                                                    value="yes" >
                                                                <label class="form-check-label" for="Catering1">
                                                                   Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check col">
                                                                <input class="form-check-input" type="radio"
                                                                    name="Catering" id="Catering2"
                                                                    value="customize">
                                                                <label class="form-check-label" for="Catering2">
                                                                    Customize
                                                                </label>
                                                            </div>
                                                            <div class="form-check col">
                                                                <input class="form-check-input" type="radio"
                                                                    name="Catering" id="Caterings3"
                                                                    value="no" >
                                                                <label class="form-check-label" for="Catering3">
                                                                    No
                                                                </label>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div>
                                                    <div class="form-group row">
                                                        <label for="decoration"
                                                            class="col-sm-3 col-form-label">Decoration</label>
                                                        <div class="col-sm-9">
                                                            <div class="row">
                                                            <div class="form-check col">
                                                                <input class="form-check-input" type="radio"
                                                                    name="decoration" id="decoration1"
                                                                    value="yes">
                                                                <label class="form-check-label" for="decoration1">
                                                                   Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check col">
                                                                <input class="form-check-input" type="radio"
                                                                    name="decoration" id="decoration2"
                                                                    value="customize">
                                                                <label class="form-check-label" for="decoration2">
                                                                    Customize
                                                                </label>
                                                            </div>
                                                            <div class="form-check col">
                                                                <input class="form-check-input" type="radio"
                                                                    name="decoration" id="decoration3"
                                                                    value="no" >
                                                                <label class="form-check-label" for="decoration3">
                                                                    No
                                                                </label>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div>
                                                    <div class="form-group row">
                                                        <label for="photo"
                                                            class="col-sm-3 col-form-label">Photography</label>
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                            <div class="form-check col">
                                                                <input class="form-check-input" type="radio"
                                                                    name="photo" id="photo1"
                                                                    value="yes" >
                                                                <label class="form-check-label" for="photo1">
                                                                   Yes
                                                                </label>
                                                            </div>
                                                        
                                                            <div class="form-check col">
                                                                <input class="form-check-input" type="radio"
                                                                    name="photo" id="photo3"
                                                                    value="no" >
                                                                <label class="form-check-label" for="photon3">
                                                                    No
                                                                </label>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div>
                                                    <div class="form-group row">
                                                        <label for="music"
                                                            class="col-sm-3 col-form-label">Music</label>
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                            <div class="form-check col">
                                                                <input class="form-check-input" type="radio"
                                                                    name="music" id="music1"
                                                                    value="yes">
                                                                <label class="form-check-label" for="music1">
                                                                   Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check col">
                                                                <input class="form-check-input" type="radio"
                                                                    name="music" id="music2"
                                                                    value="no">
                                                                <label class="form-check-label" for="music2">
                                                                   No
                                                                </label>
                                                            </div>
                                                            <!-- <div class="form-check col">
                                                                <input class="form-check-input" type="radio"
                                                                    name="music" id="music3"
                                                                    value="option3" >
                                                                <label class="form-check-label" for="music3">
                                                                    No
                                                                </label>
                                                            </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                               
   
                                                

                                                <div>
                                                    <div class="form-group row">
                                                        <label for="parlour"
                                                            class="col-sm-3 col-form-label">Parlour</label>
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                            <div class="form-check col">
                                                                <input class="form-check-input" type="radio"
                                                                    name="parlour" id="parlour1"
                                                                    value="yes">
                                                                <label class="form-check-label" for="parlour1">
                                                                   Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check col">
                                                                <input class="form-check-input" type="radio"
                                                                    name="parlour" id="parlour2"
                                                                    value="no">
                                                                <label class="form-check-label" for="parlour2">
                                                                   No
                                                                </label>
                                                            </div>
                                                            <!-- <div class="form-check col">
                                                                <input class="form-check-input" type="radio"
                                                                    name="parlour" id="parlour3"
                                                                    value="option3" >
                                                                <label class="form-check-label" for="parlour3">
                                                                    No
                                                                </label>
                                                            </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="m-10">
                                                    <button type="submit" class="btn btn-primary me-2"
                                                        name="event_submit">Submit</button>
                                                    <button class="btn btn-light">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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

</body>