<?php

    if(isset($_SESSION['UserId'])){
        $user_id = $_SESSION['UserId'];
        $user_query = "SELECT first_name, last_name FROM users WHERE user_id = '$user_id'";
        $user_con = $con->query($user_query) or die ($con->error);
        $row_user = $user_con->fetch_assoc();
    }
?>
<!-- Start Welcome area -->
    <div class="all-content-wrapper" id="store-data" data-id="<?php echo $_SESSION['UserId'] ?>">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="gc___dashboard.php"><img class="main-logo" src="img/sti_logo/.png" alt="" /></a>
                    </div>
                </div>
            </div> 
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown" id="drop-down">
                                                    <a href="#" data-toggle="dropdown" role="button" id="show-messages" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="educate-icon educate-message edu-chat-pro" style="pointer-events: none;" aria-hidden="true"></i>
                                                        <small id="count_sms"></small>
                                                        <!-- <span class="indicator-ms"></span> -->
                                                    </a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu" id="all-messages">



                                                            <li>
                                                                <a >
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Louie Ruiz</h2>
                                                                        <p>Please send your monthly reports as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Louie Ruiz</h2>
                                                                        <p>Thank you Miss Faith, Have a nice day.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/3.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>I would like to resched my appointment.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/2.png" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Juan dela cruz</h2>
                                                                        <p>Goodmorning, I would like to have an appointment this afternoon</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="educate-icon educate-bell" aria-hidden="true"></i>
                                                        <span class="indicator-nt"></span>
                                                    </a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>juan dela cruz</h2>
                                                                        <p>You have an appointment with Juan dela cruz today</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Louie Ruiz</h2>
                                                                        <p>Louie ruiz send you a new referral</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor jara</h2>
                                                                        <p>Victor jara send you a new referral</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>support</h2>
                                                                        <p>Thank you for contacting us, we will fix the issue for a while.</p>
                                                                    </div>
                                                                </a>
                                                            </li> 
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="img/product/pro4.jpg" alt="" />
                                                            <span class="admin-name">
                                                                
                                                                <?php echo $row_user['first_name']?> <?php echo $row_user['last_name']?>

                                                            </span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="gc___staff_profile.php?id=<?= $_SESSION['UserId']; ?>">My Profile</a>
                                                        </li>
                                                        <!-- <li><a href="#">Settings</a> -->
                                                        <!-- </li> -->
                                                        <li>
                                                            
                                                            <?php if(isset($_SESSION['UserEmail'])) { ?>
                                                                <a class="dropdown-item" href="../logout.php" data-toggle="modal" >
                                                                    Logout
                                                                </a>
                                                            <?php } ?>

                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i></a>

                                                    <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab" href="#Notes">Notes</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Projects">Projects</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                <div class="notes-area-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="fa fa-comments-o"></i> Latest Notes</h2>
                                                                        <p>You have 10 new message.</p>
                                                                    </div>
                                                                    <div class="notes-list-area notes-menu-scrollbar">
                                                                        <ul class="notes-menu-list">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/4.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p>You have an appointment with Juan dela cruz today </p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/1.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> You have an appointment with Juan dela cruz today.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/2.png" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> You have an appointment with Juan dela cruz today.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/3.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> You have an appointment with Juan dela cruz today.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/4.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> You have an appointment with Juan dela cruz today.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/1.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> You have an appointment with Juan dela cruz today.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/2.png" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> You have an appointment with Juan dela cruz today.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/1.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> You have an appointment with Juan dela cruz today.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/2.png" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> You have an appointment with Juan dela cruz today.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/3.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> You have an appointment with Juan dela cruz today.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Calendar" class="tab-pane fade">
                                                                <div class="projects-settings-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="fa fa-cube"></i> Latest projects</h2>
                                                                        <p> You have 20 projects. 5 not completed.</p>
                                                                    </div>
                                                                    <div class="project-st-list-area project-st-menu-scrollbar">
                                                                        <ul class="projects-st-menu-list">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>Web Development</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">1 hours ago</span>
                                                                                        </div>
                                                                                        <div class="projects-st-content">
                                                                                            <p>Completion with: 28%</p>
                                                                                            <div class="progress progress-mini">
                                                                                                <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-1"></div>
                                                                                            </div>
                                                                                            <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>Software Development</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">2 hours ago</span>
                                                                                        </div>
                                                                                        <div class="projects-st-content project-rating-cl">
                                                                                            <p>Completion with: 68%</p>
                                                                                            <div class="progress progress-mini">
                                                                                                <div style="width: 68%;" class="progress-bar hd-tp-2"></div>
                                                                                            </div>
                                                                                            <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>Graphic Design</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">3 hours ago</span>
                                                                                        </div>
                                                                                        <div class="projects-st-content">
                                                                                            <p>Completion with: 78%</p>
                                                                                            <div class="progress progress-mini">
                                                                                                <div style="width: 78%;" class="progress-bar hd-tp-3"></div>
                                                                                            </div>
                                                                                            <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>Web Design</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">4 hours ago</span>
                                                                                        </div>
                                                                                        <div class="projects-st-content project-rating-cl2">
                                                                                            <p>Completion with: 38%</p>
                                                                                            <div class="progress progress-mini">
                                                                                                <div style="width: 38%;" class="progress-bar progress-bar-danger hd-tp-4"></div>
                                                                                            </div>
                                                                                            <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>Business Card</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">5 hours ago</span>
                                                                                        </div>
                                                                                        <div class="projects-st-content">
                                                                                            <p>Completion with: 28%</p>
                                                                                            <div class="progress progress-mini">
                                                                                                <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-5"></div>
                                                                                            </div>
                                                                                            <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>Ecommerce Business</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">6 hours ago</span>
                                                                                        </div>
                                                                                        <div class="projects-st-content project-rating-cl">
                                                                                            <p>Completion with: 68%</p>
                                                                                            <div class="progress progress-mini">
                                                                                                <div style="width: 68%;" class="progress-bar hd-tp-6"></div>
                                                                                            </div>
                                                                                            <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>Woocommerce Plugin</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">7 hours ago</span>
                                                                                        </div>
                                                                                        <div class="projects-st-content">
                                                                                            <p>Completion with: 78%</p>
                                                                                            <div class="progress progress-mini">
                                                                                                <div style="width: 78%;" class="progress-bar"></div>
                                                                                            </div>
                                                                                            <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>Wordpress Theme</h2>
                                                                                            <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                            <span class="project-st-time">9 hours ago</span>
                                                                                        </div>
                                                                                        <div class="projects-st-content project-rating-cl2">
                                                                                            <p>Completion with: 38%</p>
                                                                                            <div class="progress progress-mini">
                                                                                                <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                                                                            </div>
                                                                                            <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Settings" class="tab-pane fade">
                                                                <div class="setting-panel-area">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                                                        <p> You have 20 Settings. 5 not completed.</p>
                                                                    </div>
                                                                    <ul class="setting-panel-list">
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Show notifications</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                            <label class="onoffswitch-label" for="example">
                                                                                                    <span class="onoffswitch-inner"></span>
                                                                                                    <span class="onoffswitch-switch"></span>
                                                                                                </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Disable Chat</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                            <label class="onoffswitch-label" for="example3">
                                                                                                    <span class="onoffswitch-inner"></span>
                                                                                                    <span class="onoffswitch-switch"></span>
                                                                                                </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Enable history</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                            <label class="onoffswitch-label" for="example4">
                                                                                                    <span class="onoffswitch-inner"></span>
                                                                                                    <span class="onoffswitch-switch"></span>
                                                                                                </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Show charts</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                            <label class="onoffswitch-label" for="example7">
                                                                                                    <span class="onoffswitch-inner"></span>
                                                                                                    <span class="onoffswitch-switch"></span>
                                                                                                </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Update everyday</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                            <label class="onoffswitch-label" for="example2">
                                                                                                    <span class="onoffswitch-inner"></span>
                                                                                                    <span class="onoffswitch-switch"></span>
                                                                                                </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Global search</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                            <label class="onoffswitch-label" for="example6">
                                                                                                    <span class="onoffswitch-inner"></span>
                                                                                                    <span class="onoffswitch-switch"></span>
                                                                                                </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Offline users</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                            <label class="onoffswitch-label" for="example5">
                                                                                                    <span class="onoffswitch-inner"></span>
                                                                                                    <span class="onoffswitch-switch"></span>
                                                                                                </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<style type="text/css">

#smith-container {
  width: 0px;
  height: 0px;
  bottom: 0px;
  right: 0px;
  z-index: 999999;
}

#smith-chat-container {
  overflow: hidden;
}

.smith-chat-frame {
  z-index: 999999 !important;
  position: fixed !important;
  bottom: 20px;
  right: 20px;
  height: calc(100% - 20px - 20px);
  width: 400px !important;
  min-height: 250px !important;
  max-height: 480px !important;
  box-shadow: 0px 1px 4px rgba(13, 22, 26, 0.08), 0px 4px 16px rgba(13, 22, 26, 0.12), 0px 2px 12px rgba(13, 22, 26, 0.08);
  border-radius: 2px !important;
  overflow: hidden !important;
  opacity: 1 !important;
}

.smith-chat-bar {
  z-index: 999999 !important;
  position: fixed !important;
  bottom: 13px;
  right: 20px;
  height: 60px;
  width: 400px !important;
  box-shadow: 0px 1px 4px rgba(13, 22, 26, 0.08), 0px 4px 16px rgba(13, 22, 26, 0.12), 0px 2px 12px rgba(13, 22, 26, 0.08);
  border-radius: 2px !important;
  overflow: hidden !important;
  opacity: 1 !important;
  background: #fff;
}

#smith-container {
/*   display: none; */
}

#smith-container .smith-chat-frame {
  height: 100%;
  width: 100%;
  height: calc(100% - 20px - 76px - 20px);
  bottom: 79px;
}

#smith-container .smith-chat {
  display: flex;
  flex-direction: column;
  position: relative;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: #fff;
}

#smith-container .smith-chat-header {
  background: #fff;

  position: relative;
  top: 0;
  left: 0;
  right: 0;
  transition: height 0.16s ease-out;
}

#smith-container .smith-header-profile {
  padding: 32px 48px 16px 48px;
  box-sizing: border-box;
  text-align: center;
}

#smith-container .smith-header-profile-name {
  color: rgba(0, 18, 26, 0.93);
  font-size: 20px;
  font-weight: 600;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  margin-bottom: 4px;
}

#smith-container .smith-header-profile-intro {
  color: rgba(0, 18, 26, 0.59);
  font-size: 14px;
  line-height: 20px;
  margin-bottom: 4px;
}

#smith-container .smith-header-profile-cta a {
  color: #1E9FD6;
  font-size: 14px;
  text-decoration: none;
  opacity: 0.9;
  transition: opacity 0.15s ease-in-out;
}

#smith-container .smith-team-profile-full-cta a:hover {
  opacity: 1;
}

#smith-container .smith-chat-body {
  position: relative;
  flex: 1;
  background-color: #fff;
}

#smith-container .smith-conversation-container {
    position: relative;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

#smith-container .smith-conversation-body-parts {
    position: relative;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;

}

#smith-container .smith-conversation-parts {
    padding: 24px 20px 0;
    display: flex;
    flex-flow: row wrap;
}

#smith-container .smith-conversation-parts-wrapper {
    display: flex;
    min-height: 100%;
    flex-direction: column;
    justify-content: space-between;
}

#smith-container .smith-comment-container {
  position: relative;
  margin-bottom: 24px;
}

#smith-container .smith-comment-container-admin {
    float: left;
    padding-left: 40px;
    width: calc(100% - 48px);
}

#smith-container .smith-comment-container-admin-right {
    float: right;
    padding-left: 40px;

}

#smith-container .smith-comment-container-admin-avatar {
    position: relative;
    left: 0;
    bottom: 2px;
}

#smith-container .smith-comment-container-admin-avatar-right {
    position: relative;
    right: 0;
    bottom: 2px;
}

#smith-container .smith-comment-container-admin-avatar-right .smith-avatar {
    width: 28px;
    height: 28px;
    line-height: 28px;
    font-size: 14px;
}

#smith-container .smith-avatar {
    margin: 0 auto;
    border-radius: 50%;
    display: inline-block;
    vertical-align: middle;
}

#smith-container .smith-comment-container-admin-avatar .smith-avatar {
    width: 28px;
    height: 28px;
    line-height: 28px;
    font-size: 14px;
}

#smith-container .smith-avatar img {
    border-radius: 50%;
}

#smith-container .smith-comment-container-admin-avatar .smith-avatar img {
    width: 28px;
    height: 28px;
}

#smith-container .smith-comment:not(.smith-comment-with-body) {
    padding: 12px 20px;
    border-radius: 20px;
    position: relative;
    display: inline-block;
    width: auto;
    max-width: 75%;
}

#smith-container .smith-comment-right:not(.smith-comment-with-body) {
    padding: 12px 20px;
    border-radius: 20px;
    position: relative;
    display: inline-block;
    width: auto;
    max-width: 75%;
    left: 72px;
    background-color: #c4d6f2;
}

#smith-container .smith-comment-container-admin .smith-comment-right:not(.smith-comment-with-body) {
    color: rgba(0, 18, 26, 0.93);
    background-color: #EDF1F2;
}

#smith-container .smith-comment-right .smith-block-paragraph {
  font-size: 14px;
  line-height: 20px;
}

#smith-container .smith-comment-container-admin .smith-comment:not(.smith-comment-with-body) {
    color: rgba(0, 18, 26, 0.93);
    background-color: #EDF1F2;
}

#smith-container .smith-comment .smith-block-paragraph {
  font-size: 14px;
  line-height: 20px;
}

.smith-chat-bar-message {
  padding: 12px;
  display: flex;
  align-items: center;
}

.smith-chat-bar-message textarea {
  background-color: transparent;
  border-radius: 0;
  border: none;
  font-size: 14px;
  flex: 2;
  line-height: 1.25rem;
  max-height: 100px;
  outline: none;
  overflow-x: hidden;
  resize: none;
  padding: 0;
  margin: 0px 8px;
}

.btn {
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 14px;
    line-height: 1.5;
    border-radius: 2px;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.send-btn {
    color: rgba(0, 18, 26, 0.59);
    background-color: #EDF1F2;
    border-color: #EDF1F2;
    min-width: 72px;
}

.send-btn:hover {
    cursor: pointer;
    color: rgba(0, 18, 26, 0.93);
    background-color: #D4DADD;
    border-color: #D4DADD;
}

.smith-launcher-frame {
    box-shadow: 0px 2px 4px rgba(0, 18, 26, 0.08), 0px 2px 16px rgba(0, 18, 26, 0.16);
    z-index: 2147482999 !important;
    position: fixed !important;
    bottom: 20px;
    right: 20px;
    height: 56px !important;
    width: 56px !important;
    border-radius: 100px !important;
    overflow: hidden !important;
    background: #1E9FD6 !important;
    opacity: 0.9;
    transition: box-shadow 0.26s cubic-bezier(.38,0,.22,1), opacity 0.26s ease-in-out;
}

.smith-launcher-frame-2 {
    box-shadow: 0px 2px 4px rgba(0, 18, 26, 0.08), 0px 2px 16px rgba(0, 18, 26, 0.16);
    z-index: 2147482999 !important;
    position: fixed !important;
    bottom: 20px;
    right: 20px;
    height: 56px !important;
    width: 56px !important;
    border-radius: 100px !important;
    overflow: hidden !important;
    background: #1E9FD6 !important;
    opacity: 0.9;
    transition: box-shadow 0.26s cubic-bezier(.38,0,.22,1), opacity 0.26s ease-in-out;
}

.smith-launcher-frame:hover {
  cursor: pointer;
  box-shadow: 0px 2px 4px rgba(0, 18, 26, 0.08), 0px 3px 12px rgba(0, 18, 26, 0.16), 0 2px 14px 0 rgba(0, 18, 26,.20);
  opacity: 1;
} 

.container{max-width:1170px; margin:revert;}
img{ max-width:100%;}
.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 40%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}
.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%;
}
.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
}
.srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
.srch_bar .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}
.srch_bar .input-group-addon { margin: 0 0 0 -27px;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.inbox_chat { height: 550px; overflow-y: scroll;}

.active_chat{ background:#ebebeb;}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 3px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}

.mesgs-1 {
  float: left;
  padding: 30px 15px 0 25px;
  width: 100% !important;
}

 .sent_msg p {
  background: #05728f none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}

.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}
.messaging { padding: 0 0 50px 0;}
.msg_history_1 {
  height: 410px;
  overflow-y: auto;
}
</style>


<div id="smith-container" hidden="hidden">
  <div class="smith-chat-frame">
    <div id="smith-chat-container">

      <div class="smith-chat">
        <div class="smith-chat-header" style="background-color: #05728F;">

            <button id="close" style="float: right;">X</button>
            <h4 id="chat-name" style="padding: 5px; color: white;"></h4>
 
        </div>
        <div class="smith-chat-body">
          <div class="smith-conversation-container">
            <div class="smith-conversation-body-parts">
              <div class="smith-conversation-parts-wrapper">
            
                    <div class="mesgs-1">
                      <div class="msg_history_1" id="msg_history_1">

                        <div class="incoming_msg">
                          <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                          <div class="received_msg">
                            <div class="received_withd_msg">
                              <p>Test which is a new approach to have all
                                solutions</p>
                              <span class="time_date"> 11:01 AM    |    June 9</span></div>
                          </div>
                        </div>

                        <div class="outgoing_msg">
                          <div class="sent_msg">
                            <p>Test which is a new approach to have all
                              solutions</p>
                            <span class="time_date"> 11:01 AM    |    June 9</span> </div>
                        </div>



                      </div>
                      <div class="type_msg">

                      </div>
                    </div>
             
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>
  <div class="smith-chat-bar">
    <div class="smith-chat-bar-message">
      <textarea placeholder="Type your message" id="message" rows="1"></textarea>
      <button type="button" class="btn btn-primary" id="send-sms">
        Send
      </button>
    </div>

  </div>
</div>

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

<script type="text/javascript">
 
var intervalID;

intervalID = setInterval(function() {
$.ajax({
    url: "notif.php",
    type: "POST",
    dataType: "json",
    data: {

        userid: $("#store-data").data("id"),

    },
    xhrFields: {
        withCredentials: true,
    },
    crossDomain: true,
    success: (data) => { 
      
    if (data.length == 0) {
    $("#count_sms").text("");      
    }else{

    $("#count_sms").text(data.length);    

    }    
    
    
    }
    })
    }, 2000);


$(document).on("click", "#show-messages", (e)=>{
$.ajax({
    url: "my_messages.php",
    type: "POST",
    dataType: "json",
    data: {
       userid: $("#store-data").data("id"),
    },
    xhrFields: {
        withCredentials: true,
    },
    crossDomain: true,
    success: (data) => { 

    $("#all-messages").empty();     
           
    $.each(data.response, (indx, user)=>{

    if ($("#store-data").data("id") == user.sender) {
    $("#all-messages").append(`

        <li style="width: 100%; cursor: pointer;" id="viewsms"  data-group="${user.group}">
        <a style="pointer-events: none;" href="${user.group}" id="toggle-sms">
            <div class="message-img" style="pointer-events: none;">
                <img src="img/contact/2.png" alt="" class="mCS_img_loaded" style="pointer-events: none;">
            </div>
            <div class="message-content" style="pointer-events: none;">
                <span class="message-date" style="pointer-events: none;">16 Sept</span>
                <h2 style="pointer-events: none;">${user.name}</h2>
                <p style="pointer-events: none;"><i>You:</i> ${user.message}</p>
            </div>
        </a>
        </li>

    `); 
    }else{
    $("#all-messages").append(`

        <li style="width: 100%; cursor: pointer;" id="viewsms"  data-group="${user.group}">
        <a style="pointer-events: none;" href="${user.group}" id="toggle-sms">
            <div class="message-img" style="pointer-events: none;">
                <img src="img/contact/2.png" alt="" class="mCS_img_loaded" style="pointer-events: none;">
            </div>
            <div class="message-content" style="pointer-events: none;">
                <span class="message-date" style="pointer-events: none;">16 Sept</span>
                <h2 style="pointer-events: none;">${user.name}</h2>
                <p style="pointer-events: none;">${user.message}</p>
            </div>
        </a>
        </li>

    `); 
    }      

    });    
    
    }
    });
});

$(document).on("click", "#viewsms", (e)=>{



    $.ajax({
        url: "all_sms.php",
        type: "POST",
        dataType: "json",
        data: {

            group: e.target.dataset.group

        },
        xhrFields: {
            withCredentials: true,
        },
        crossDomain: true,
        success: (data) => { 
        
        $("#smith-container").hide();      
        
        $("#msg_history_1").empty();
        
        $("#chat-name").text(data.name);

        $("#msg_history_1").data("rec", e.target.dataset.group);

        $.each(data.response, (indx, sms)=>{

        if (e.target.dataset.group == sms.sender) {

        $("#msg_history_1").append(`
        
        <div class="incoming_msg">
          <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
          <div class="received_msg">
            <div class="received_withd_msg">
              <p>${sms.sms}</p>
              <span class="time_date">${sms.date}</span></div>
          </div>
        </div>

        `); 

        }else{

        $("#msg_history_1").append(`

        <div class="outgoing_msg" id="${sms.group}">
          <div class="sent_msg">
            <p>${sms.sms}</p>
            <span class="time_date">${sms.date}</span> </div>
        </div>

        `);  

        }   

        });



        document.getElementById("drop-down").setAttribute("class", "nav-item dropdown");

        $("#smith-container").show();    

        const myTimeout = setTimeout(myStopFunction, 1000);

        function myStopFunction() {
            var objDiv = document.getElementById("msg_history_1");
            objDiv.scrollTop = 100000;
        }
 
        }
        });


        intervalID = setInterval(function() {
        $.ajax({
            url: "render_sms.php",
            type: "POST",
            dataType: "json",
            data: {

                group: e.target.dataset.group,
                userid: $("#store-data").data("id"),

            },
            xhrFields: {
                withCredentials: true,
            },
            crossDomain: true,
            success: (data) => { 
            
            console.log(data.response.length);
            if (data.response.length == 0) {

            }else{
                $.each(data.response, (indx, sms)=>{

                if (e.target.dataset.group == sms.sender) {

                $("#msg_history_1").append(`
                
                <div class="incoming_msg">
                  <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                  <div class="received_msg">
                    <div class="received_withd_msg">
                      <p>${sms.sms}</p>
                      <span class="time_date">${sms.date}</span></div>
                  </div>
                </div>

                `); 

                }else{


                }   

                });
            }

            }
            })
            }, 2000);



});

$(document).on("click", "#close", ()=>{

  clearInterval(intervalID);
    
  $("#smith-container").toggle("fast");


});



$(document).on("click", "#send-sms", ()=>{


$.ajax({
    url: "send_sms.php",
    type: "POST",
    dataType: "json",
    data: {
      sender: $("#store-data").data("id"),     
      reciever: $("#msg_history_1").data("rec"),
      text: $("#message").val()  

    },
    xhrFields: {
        withCredentials: true,
    },
    crossDomain: true,
    success: (data) => {    

    $("#msg_history_1").append(`
    
        <div class="outgoing_msg">
          <div class="sent_msg">
            <p>${$("#message").val()}</p>
            <span class="time_date">${data.date}</span> </div>
        </div>

    `);    

        const myTimeout = setTimeout(myStopFunction, 1000);

        function myStopFunction() {
            var objDiv = document.getElementById("msg_history_1");
            objDiv.scrollTop = 100000;
        }


    $("#message").val("");

    } 
    });


});


</script>