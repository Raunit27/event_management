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
    $fetch = $fun->view_event_category();
    ?>
    <div class="container-fluid page-body-wrapper">
        <?php include 'sidebar.php' ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add client</h4>
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
                                            <h4 class="card-title">Add client</h4>
                                            <p class="card-description">
                                                Horizontal form layout
                                            </p>
                                            <form class="forms-sample" action="./owner_form_sub.php " method="POST">
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

                                                <!-- Event Selection Dropdown -->
                                                <div class="form-group row mb-4">
                                                    <label for="event" class=" col-sm-3 form-label">Event:</label>
                                                    <div class="col-sm-9">
                                                        <select id="event" name="event" class="form-select">
                                                            <option value="">Select an event</option>
                                                            <?php
                                                         if(mysqli_num_rows($fetch)>0){
                                                        while($res = mysqli_fetch_assoc($fetch)){
                                                         ?>
                                                            <option value="<?php echo $res['event_category'];?>"><?php echo $res['event_category'];?></option>
                                                         ?>
                                                         <?php 
                                                         
                                                          }
                                                          }
                                                          ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Subevent Selection Dropdown -->
                                                <!-- <div class="form-group row mb-4">
                                                    <label class=" col-sm-3 form-label" for="subevent" class="form-label">Subevent:</label>
                                                    <div class="col-sm-9">
                                                    <select id="subevent" name="subevent" class="form-select">
                                                        <option value="">Select a subevent</option> -->
                                                <!-- Subevents will be dynamically populated based on the selected event -->
                                                <!-- </select>
                                                    </div>
                                                </div> -->

                                                <div class="form-group row">
                                                    <label for="exampleInputdiscription"
                                                        class="col-sm-3 col-form-label">Short Discription</label>
                                                    <div class="col-sm-9">
                                                        <textarea id="exampleInputdiscription" class="form-control"
                                                            name="discription" rows="4" cols="50"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
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


                                                <button type="submit" class="btn btn-primary me-2"
                                                    name="client_submit">Submit</button>
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
   <?php include "footer.php";?>
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
    // Array of subevents for each main event
    const subevents = {
        festival: ["Religious Festival", "Cultural Festival", "Seasonal Festival"],
        wedding: ["Traditional Wedding", "Destination Wedding", "Themed Wedding"],
        concert: ["Music Concert", "Music Festival", "Genre-specific Festival"],
        sports: ["Cricket Match", "Football Tournament", "Athletic Competition"],
        exhibition: ["Industry-specific Exhibition", "Product Launch Event", "Trade Fair"],
        literary: ["Literature Festival", "Storytelling Event", "Debates and Talks"],
        religious: ["Spiritual Retreat", "Pilgrimage", "Religious Conference"],
        corporate: ["Business Conference", "Training Workshop", "Networking Event"],
        social: ["Fundraising Gala", "Community Festival", "Volunteer Activity"]
    };

    // Function to populate subevents based on the selected event
    document.getElementById('event').addEventListener('change', function() {
        const selectedEvent = this.value;
        const subeventDropdown = document.getElementById('subevent');
        subeventDropdown.innerHTML = '<option value="">Select a subevent</option>'; // Reset dropdown
        if (selectedEvent && subevents[selectedEvent]) {
            subevents[selectedEvent].forEach(subevent => {
                const option = document.createElement('option');
                option.value = subevent;
                option.text = subevent;
                subeventDropdown.appendChild(option);
            });
        }
    });
    </script>


</body>

</html>