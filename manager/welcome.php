<?php 
  include "auth_session.php";
  include "navbar.php";
  include "sidebar.php";
  if(!isset($_SESSION["uname"])){
    header("location:index.php");
}
   $uname=$_SESSION["uname"]; 
   $fetch=$fun->view_manager_nav($uname);
    if(mysqli_num_rows($fetch)>0){
        $row = mysqli_fetch_assoc($fetch);
        $id =$row['id'];
        $name = $row['name'];
        $age=$row['age'];
        $gender=['gender'];
        $email = $row['email']; 
        $phone = $row['mobile'];
        $dob= $row['dob'];
        $address = $row['address'];
        $doj= $row['doj'];
        }else{     
    }
    $fetch1=$fun->view_manager_client($id);
    if(mysqli_num_rows($fetch1)>0){
    }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Event Up</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files --> 
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>




    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="welcome.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">
                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">My clients <span>| Current</span></h5>

                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>

                                            <!-- Table with stripped rows -->
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Sr_NO</th>
                                                        <th>Client</th>
                                                        <th>Event</th>
                                                        <th>Start date</th>
                                                        <th>Budget</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                     
                                                         $sr = 1;
                                                        while($res1 = mysqli_fetch_assoc($fetch1)){
                                                          if($res1['status']==0){
                                                        $fetching=$fun->view_start_date ( $res1['client_id'])
                                                         ?>

                                                    <tr>
                                                        <th scope="row"><?php echo $sr;?></th>
                                                        <td><?php echo $res1['client'];?></td>
                                                        <td><?php echo $res1['event'];?></td>
                                                        <?php  
                                                               if(mysqli_num_rows($fetching)>0){
                                                                $res11 = mysqli_fetch_assoc($fetching);
                                                                ?>
                                                        <td> <?php echo $res11['startdate'];?></td>
                                                        <?php
                                                               } 
                                                            ?>

                                                        <td><?php echo $res1['total_expense'];?></td>
                                                        <td class="">
                                                            <a href="update.php?status=true&id=<?php echo $res1['client_id'];?>"><button type="button"
                                                                    class="btn btn-primary">Done</button></a>
                                                        </td>

                                                    </tr>
                                                    <?php 
                                                         $sr++;
                                                          }
                                                        }
                                                          ?>
                                                </tbody>
                                            </table>
                                            <!-- End Table with stripped rows -->

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <br>
                                    <h5 class="card-title">Reports <span>/ This Event</span></h5>


                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                    <br>


                                    <div class="row">
                                        <div class="col-sm-3">Decoration:</div>
                                        <div class="col-sm-8">
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 20%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100">20%</div>
                                            </div>
                                        </div>

                                    </div>


                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3"> Catering:</div>
                                        <div class="col-sm-8">
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 30%"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">30%</div>
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-3">Venue:</div>
                                        <div class="col-sm-8">
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 36%" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100">36%</div>
                                            </div>
                                        </div>

                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-sm-3">Staff:</div>
                                        <div class="col-sm-8">
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 14%" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100">14%</div>
                                            </div>
                                        </div>

                                    </div>
                                    <br>




                                    <!-- Line Chart -->
                                    <div id="reportsChart"></div>


                                    <!-- End Line Chart -->

                                </div>

                            </div>
                        </div><!-- End Reports -->

                        <!-- Recent Sales -->
                        <!-- <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>$64</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>$47</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                        <td>$147</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td>$67</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                        <td>$165</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div>End Recent Sales -->

                        <!-- Top Selling -->
                        <!-- <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Top Selling <span>| Today</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>$64</td>
                        <td class="fw-bold">124</td>
                        <td>$5,828</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                        <td>$46</td>
                        <td class="fw-bold">98</td>
                        <td>$4,508</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                        <td>$59</td>
                        <td class="fw-bold">74</td>
                        <td>$4,366</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                        <td>$32</td>
                        <td class="fw-bold">63</td>
                        <td>$2,016</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>$79</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div>End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Activity -->

                    <!-- End Recent Activity -->

                    <!-- Budget Report -->
                    <!-- <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Budget Report <span>| This Month</span></h5>

              <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    legend: {
                      data: ['Allocated Budget', 'Actual Spending']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Sales',
                          max: 6500
                        },
                        {
                          name: 'Administration',
                          max: 16000
                        },
                        {
                          name: 'Information Technology',
                          max: 30000
                        },
                        {
                          name: 'Customer Support',
                          max: 38000
                        },
                        {
                          name: 'Development',
                          max: 52000
                        },
                        {
                          name: 'Marketing',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Allocated Budget'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Actual Spending'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div>End Budget Report -->

                    <!-- Workers Distribution -->
                    <!-- <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div> -->

                    <div class="card-body pb-0">
                        <h5 class="card-title">Overall Performance <span>|<br> 2023</span></h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            echarts.init(document.querySelector("#trafficChart")).setOption({
                                tooltip: {
                                    trigger: 'item'
                                },
                                legend: {
                                    top: '5%',
                                    left: 'center'
                                },
                                series: [{
                                    name: 'Manage',
                                    type: 'pie',
                                    radius: ['40%', '70%'],
                                    avoidLabelOverlap: false,
                                    label: {
                                        show: false,
                                        position: 'center'
                                    },
                                    emphasis: {
                                        label: {
                                            show: true,
                                            fontSize: '18',
                                            fontWeight: 'bold'
                                        }
                                    },
                                    labelLine: {
                                        show: false
                                    },
                                    data: [{
                                            value: 12,
                                            name: 'Winter'
                                        },
                                        {
                                            value: 7,
                                            name: 'Summer'
                                        },
                                        {
                                            value: 3,
                                            name: 'Rainy'
                                        },

                                    ]
                                }]
                            });
                        });
                        </script>

                    </div>
                </div><!-- End Website Traffic -->

                <!-- News & Updates Traffic -->
                <!-- <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
            </div>

            </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "footer.php"; ?><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
    //check the console for date click event
    //Fixed day highlight
    //Added previous month and next month view

    function CalendarControl() {
        const calendar = new Date();
        const calendarControl = {
            localDate: new Date(),
            prevMonthLastDate: null,
            calWeekDays: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            calMonthName: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec"
            ],
            daysInMonth: function(month, year) {
                return new Date(year, month, 0).getDate();
            },
            firstDay: function() {
                return new Date(calendar.getFullYear(), calendar.getMonth(), 1);
            },
            lastDay: function() {
                return new Date(calendar.getFullYear(), calendar.getMonth() + 1, 0);
            },
            firstDayNumber: function() {
                return calendarControl.firstDay().getDay() + 1;
            },
            lastDayNumber: function() {
                return calendarControl.lastDay().getDay() + 1;
            },
            getPreviousMonthLastDate: function() {
                let lastDate = new Date(
                    calendar.getFullYear(),
                    calendar.getMonth(),
                    0
                ).getDate();
                return lastDate;
            },
            navigateToPreviousMonth: function() {
                calendar.setMonth(calendar.getMonth() - 1);
                calendarControl.attachEventsOnNextPrev();
            },
            navigateToNextMonth: function() {
                calendar.setMonth(calendar.getMonth() + 1);
                calendarControl.attachEventsOnNextPrev();
            },
            navigateToCurrentMonth: function() {
                let currentMonth = calendarControl.localDate.getMonth();
                let currentYear = calendarControl.localDate.getFullYear();
                calendar.setMonth(currentMonth);
                calendar.setYear(currentYear);
                calendarControl.attachEventsOnNextPrev();
            },
            displayYear: function() {
                let yearLabel = document.querySelector(".calendar .calendar-year-label");
                yearLabel.innerHTML = calendar.getFullYear();
            },
            displayMonth: function() {
                let monthLabel = document.querySelector(
                    ".calendar .calendar-month-label"
                );
                monthLabel.innerHTML = calendarControl.calMonthName[calendar.getMonth()];
            },
            selectDate: function(e) {
                console.log(
                    `${e.target.textContent} ${
            calendarControl.calMonthName[calendar.getMonth()]
          } ${calendar.getFullYear()}`
                );
            },
            plotSelectors: function() {
                document.querySelector(
                    ".calendar"
                ).innerHTML += `<div class="calendar-inner"><div class="calendar-controls">
          <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"/></svg></a></div>
          <div class="calendar-year-month">
          <div class="calendar-month-label"></div>
          <div>-</div>
          <div class="calendar-year-label"></div>
          </div>
          <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"/></svg></a></div>
          </div>
         
          <div class="calendar-body"></div></div>`;
            },
            plotDayNames: function() {
                for (let i = 0; i < calendarControl.calWeekDays.length; i++) {
                    document.querySelector(
                        ".calendar .calendar-body"
                    ).innerHTML += `<div>${calendarControl.calWeekDays[i]}</div>`;
                }
            },
            plotDates: function() {
                document.querySelector(".calendar .calendar-body").innerHTML = "";
                calendarControl.plotDayNames();
                calendarControl.displayMonth();
                calendarControl.displayYear();
                let count = 1;
                let prevDateCount = 0;

                calendarControl.prevMonthLastDate = calendarControl.getPreviousMonthLastDate();
                let prevMonthDatesArray = [];
                let calendarDays = calendarControl.daysInMonth(
                    calendar.getMonth() + 1,
                    calendar.getFullYear()
                );
                // dates of current month
                for (let i = 1; i < calendarDays; i++) {
                    if (i < calendarControl.firstDayNumber()) {
                        prevDateCount += 1;
                        document.querySelector(
                            ".calendar .calendar-body"
                        ).innerHTML += `<div class="prev-dates"></div>`;
                        prevMonthDatesArray.push(calendarControl.prevMonthLastDate--);
                    } else {
                        document.querySelector(
                                ".calendar .calendar-body"
                            ).innerHTML +=
                            `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
                    }
                }
                //remaining dates after month dates
                for (let j = 0; j < prevDateCount + 1; j++) {
                    document.querySelector(
                            ".calendar .calendar-body"
                        ).innerHTML +=
                        `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
                }
                calendarControl.highlightToday();
                calendarControl.plotPrevMonthDates(prevMonthDatesArray);
                calendarControl.plotNextMonthDates();
            },
            attachEvents: function() {
                let prevBtn = document.querySelector(".calendar .calendar-prev a");
                let nextBtn = document.querySelector(".calendar .calendar-next a");
                let todayDate = document.querySelector(".calendar .calendar-today-date");
                let dateNumber = document.querySelectorAll(".calendar .dateNumber");
                prevBtn.addEventListener(
                    "click",
                    calendarControl.navigateToPreviousMonth
                );
                nextBtn.addEventListener("click", calendarControl.navigateToNextMonth);
                todayDate.addEventListener(
                    "click",
                    calendarControl.navigateToCurrentMonth
                );
                for (var i = 0; i < dateNumber.length; i++) {
                    dateNumber[i].addEventListener(
                        "click",
                        calendarControl.selectDate,
                        false
                    );
                }
            },
            highlightToday: function() {
                let currentMonth = calendarControl.localDate.getMonth() + 1;
                let changedMonth = calendar.getMonth() + 1;
                let currentYear = calendarControl.localDate.getFullYear();
                let changedYear = calendar.getFullYear();
                if (
                    currentYear === changedYear &&
                    currentMonth === changedMonth &&
                    document.querySelectorAll(".number-item")
                ) {
                    document
                        .querySelectorAll(".number-item")[calendar.getDate() - 1].classList.add(
                            "calendar-today");
                }
            },
            plotPrevMonthDates: function(dates) {
                dates.reverse();
                for (let i = 0; i < dates.length; i++) {
                    if (document.querySelectorAll(".prev-dates")) {
                        document.querySelectorAll(".prev-dates")[i].textContent = dates[i];
                    }
                }
            },
            plotNextMonthDates: function() {
                let childElemCount = document.querySelector('.calendar-body').childElementCount;
                //7 lines
                if (childElemCount > 42) {
                    let diff = 49 - childElemCount;
                    calendarControl.loopThroughNextDays(diff);
                }

                //6 lines
                if (childElemCount > 35 && childElemCount <= 42) {
                    let diff = 42 - childElemCount;
                    calendarControl.loopThroughNextDays(42 - childElemCount);
                }

            },
            loopThroughNextDays: function(count) {
                if (count > 0) {
                    for (let i = 1; i <= count; i++) {
                        document.querySelector('.calendar-body').innerHTML +=
                            `<div class="next-dates">${i}</div>`;
                    }
                }
            },
            attachEventsOnNextPrev: function() {
                calendarControl.plotDates();
                calendarControl.attachEvents();
            },
            init: function() {
                calendarControl.plotSelectors();
                calendarControl.plotDates();
                calendarControl.attachEvents();
            }
        };
        calendarControl.init();
    }

    const calendarControl = new CalendarControl();
    </script>
    <script>
     async function update_status(id) {
      console.log(id);
        // const response = await fetch(`update.php?status=true&id=${id}`);

        //const res = await response.text();
        //alert(res);   
        //window.location.reload();  
    }
    </script>

</body>

</html>