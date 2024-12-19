<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="welcome.php">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">About Events</li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#event" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Events</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="event">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="add_event.php">Add event/sub
                            event</a></li>
                    <li class="nav-item"> <a class="nav-link" href="view_event.php">View event/sub
                            event</a></li>
                    <!-- <li class="nav-item"> <a class="nav-link"
                                href="pages/ui-features/typography.html">Typography</a></li> -->
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Managers</li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#manager" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Managers</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manager">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="add_mana.php">Add manager</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="view_manager.php">View manager</a>
                    </li>

                    <!-- <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li> -->
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Clients</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#clint" aria-expanded="false"
                aria-controls="form-elements">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">client</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="clint">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="add_client.php">Add client</a></li>
                    <li class="nav-item"><a class="nav-link" href="view_client.php">View client</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Staff</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#staff" aria-expanded="false" aria-controls="charts">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">staff</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="staff">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="add_staff.php">Add staff</a></li>
                    <li class="nav-item"> <a class="nav-link" href="view_staff.php">View staff</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Venue</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#venue_add" aria-expanded="false" aria-controls="charts">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">venue</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="venue_add">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="add_venue.php">Add venue</a></li>
                    <li class="nav-item"> <a class="nav-link" href="view_venue.php">View venue</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Event category</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#event_category" aria-expanded="false" aria-controls="charts">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Event category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="event_category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="add_event_category.php">Add event category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="view_event_category.php">View event category</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Projects</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#project" aria-expanded="false" aria-controls="tables">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">projects</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="project">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="add_project.php">Add project</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="view_project.php">View projects</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="view_current_project.php">Current projects</a>
                    </li>
                    <!-- <li class="nav-item"> <a class="nav-link" href="">Upcomming
                            projects</a>
                    </li> -->
                    <li class="nav-item"> <a class="nav-link" href="view_completed_project.php">Completed
                            projects</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Payments</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#payment" aria-expanded="false" aria-controls="icons">
                <i class="menu-icon mdi mdi-layers-outline"></i>
                <span class="menu-title">Payments</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="payment">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="client_payment.php">Client payment details</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="manager_payment_details.php">Manager payment details</a> 
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="staff_payment_details.php">Staff payment details</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Myprofile</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#myprofile" aria-expanded="false" aria-controls="icons">
                <i class="menu-icon mdi mdi-layers-outline"></i>
                <span class="menu-title">Myprofile</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="myprofile">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="owner_profile.php">View profile</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="owner_edit_profile.php">Edit profile</a>
                    </li>
                    
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Intrested clients</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#u_client" aria-expanded="false" aria-controls="icons">
                <i class="menu-icon mdi mdi-layers-outline"></i>
                <span class="menu-title">contact client</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="u_client">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="intrested_client.php">Intrested lient list</a>
                    </li>                    
                </ul>
            </div> 
        </li>
        <!-- <li class="nav-item nav-category">pages</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="menu-icon mdi mdi-account-circle-outline"></i>
                    <span class="menu-title">User Pages</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    </ul>
                </div>
            </li> -->
        <!-- <li class="nav-item nav-category">help</li> -->
        <!-- <li class="nav-item">
            <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li> -->
    </ul>
</nav>