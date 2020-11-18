<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mannat Themes">
        <meta name="keyword" content="">

        <title><?=$title;?> | <?=$page_title;?></title>

        <!-- Theme icon -->
        <link rel="shortcut icon" href="<?=base_url();?>assets/images/favicon.ico">

        <!-- Theme Css -->
        <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=base_url();?>assets/css/slidebars.min.css" rel="stylesheet">
        <link href="<?=base_url();?>assets/css/icons.css" rel="stylesheet">
        <link href="<?=base_url();?>assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
    </head>

    <body class="sticky-header">
        <section>
            <!-- sidebar left start-->
            <div class="sidebar-left">
                <div class="sidebar-left-info">

                    <div class="user-box">
                        <div class="d-flex justify-content-center">
                            <img src="<?=base_url();?>assets/images/users/avatar-1.jpg" alt="" class="img-fluid rounded-circle"> 
                        </div>
                        <div class="text-center text-white mt-2">
                            <h6>User Name</h6>
                            <p class="text-muted m-0">User Type</p>
                        </div>
                    </div>   
                                        
                    <!--sidebar nav start-->
                    <ul class="side-navigation">
                        <li>
                            <a href="<?=base_url();?>"><i class="mdi mdi-gauge"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <h3 class="navigation-title">Research</h3>
                        </li>
                        <li class="menu-list"><a href=""><i class="mdi mdi-file-multiple"></i> <span>Proposals</span></a>
                            <ul class="child-list">
                                <li><a href="<?=base_url();?>create-reseach-proposal"> Submit Research Proposal</a></li>
                                <li><a href="<?=base_url();?>in-house-review"> Endorse Research for In-house Review</a></li>
                                <li><a href="<?=base_url();?>approve-research-proposal"> Approve Reseach Proposal</a></li>
                                <li><a href="<?=base_url();?>coordinators-list"> List of Coordinators</a></li>
                                <li><a href="<?=base_url();?>activities"> Activities</a></li>
                                <li><a href="<?=base_url();?>process-flow"> Process Flow</a></li>
                                <li><a href="<?=base_url();?>research-report"> Report</a></li>
                            </ul>
                        </li>
                        <li class="menu-list"><a href=""><i class="mdi mdi-file-multiple"></i> <span>Project Implementation</span></a>
                            <ul class="child-list">
                                <li><a href="<?=base_url();?>moa"> MOA</a></li>
                                <li><a href="<?=base_url();?>terminal-report"> Submit Terminal Report</a></li>
                                <li><a href="<?=base_url();?>research-output"> Submit Research Output</a></li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="navigation-title">Extension</h3>
                        </li>
                        <li class="menu-list"><a href=""><i class="mdi mdi-file-multiple"></i> <span>Services</span></a>
                            <ul class="child-list">
                                <li><a href="<?=base_url();?>coordinators-list"> List of Coordinators</a></li>
                                <li><a href="<?=base_url();?>coordinators-list"> Profile of Beneficiary</a></li>
                                <li><a href="<?=base_url();?>coordinators-list"> Profile of Extentionist</a></li>
                                <li><a href="<?=base_url();?>coordinators-list"> List of MOA</a></li>
                                <li><a href="<?=base_url();?>coordinators-list"> Reports</a></li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="navigation-title">Intellectual Property</h3>
                        </li>
                        <li class="menu-list"><a href=""><i class="mdi mdi-file-multiple"></i> <span>Intellectual Property</span></a>
                            <ul class="child-list">
                                <li><a href="<?=base_url();?>coordinators-list"> List of Coordinators</a></li>
                                <li><a href="<?=base_url();?>coordinators-list"> Application for Copywrite</a></li>
                                <li><a href="<?=base_url();?>coordinators-list"> Profiling Investors</a></li>
                                <li><a href="<?=base_url();?>coordinators-list"> Reports</a></li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="navigation-title">Profiles</h3>
                        </li>
                        <li class="menu-list"><a href=""><i class="mdi mdi-file-multiple"></i> <span>Manage Profiles</span></a>
                            <ul class="child-list">
                                <li><a href="<?=base_url();?>coordinators-list"> List of Coordinator</a></li>
                                <li><a href="<?=base_url();?>coordinators-list"> List of Faculty</a></li>
                                <li><a href="<?=base_url();?>coordinators-list"> Linkages</a></li>
                                <li><a href="<?=base_url();?>coordinators-list"> MOA</a></li>
                            </ul>
                        </li>
                    </ul><!--sidebar nav end-->
                </div>
            </div><!-- sidebar left end-->

            <!-- body content start-->
            <div class="body-content">
                <!-- header section start-->
                <div class="header-section">
                    <!--logo and logo icon start-->
                    <div class="logo">
                        <a href="index.html">
                            <span class="logo-img">
                                <img src="<?=base_url();?>assets/images/logo_sm.png" alt="" height="26">
                            </span>
                            <span class="brand-name">UA</span>
                        </a>
                    </div>

                    <!--toggle button start-->
                    <a class="toggle-btn"><i class="ti ti-menu"></i></a>
                    <!--toggle button end-->

                    <div class="notification-wrap">
                        <!--right notification start-->
                        <div class="right-notification d-none">
                            <ul class="notification-menu">
                                <li>
                                    <a href="javascript:;" class="notification" data-toggle="dropdown">
                                        <i class="mdi mdi-bell-outline"></i>
                                        <span class="badge badge-success">4</span>
                                    </a>
                                    <ul class="dropdown-menu mailbox dropdown-menu-right">
                                        <li>
                                          <div class="drop-title">Notifications</div>
                                        </li>
                                        <li class="notification-scroll">
                                            <div class="message-center">
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <i class="ti ti-star"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Jane A. Seward</h6>
                                                        <span class="mail-desc">Iwon meddle and...</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="user-img">
                                                        <i class="ti ti-heart"></i> 
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Michael W. Salazar</h6>
                                                        <span class="mail-desc">Lovely gide learn for you...</span> 
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <i class="ti ti-image"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>David D. Chen</h6>
                                                        <span class="mail-desc">Send his new photo...</span> 
                                                    </div>
                                                </a> 
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <i class="ti ti-bell"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Irma J. Hendren</h6>
                                                        <span class="mail-desc">6:00 pm our meeting so...</span> 
                                                    </div>
                                                </a> 
                                            </div>
                                        </li>
                                        <li> 
                                            <a class="text-center bg-light" href="javascript:void(0);"> 
                                                <strong>See all notifications</strong> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:;" class="notification" data-toggle="dropdown">
                                        <i class="mdi mdi-email-outline"></i>
                                        <span class="badge badge-danger">9</span>
                                    </a>
                                    <ul class="dropdown-menu mailbox dropdown-menu-right">
                                        <li>
                                            <div class="drop-title">New Messages 5</div>
                                        </li>
                                        <li class="notification-scroll">
                                            <div class="message-center">
                                                <a href="#">
                                                    <div class="user-img">
                                                         <img src="<?=base_url();?>assets/images/users/avatar-2.jpg" alt="user" class="rounded-circle"> 
                                                         <span class="profile-status online pull-right"></span>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Cassie T. Bishop</h6>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                        <span class="time">9:30 AM</span> 
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="user-img">
                                                        <img src="<?=base_url();?>assets/images/users/avatar-3.jpg" alt="user" class="rounded-circle"> 
                                                        <span class="profile-status busy pull-right"></span> 
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Rudy A. Scott</h6>
                                                        <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> 
                                                    </div>
                                                </a> 
                                                <a href="#">
                                                    <div class="user-img">
                                                        <img src="<?=base_url();?>assets/images/users/avatar-4.jpg" alt="user" class="rounded-circle"> 
                                                        <span class="profile-status away pull-right"></span> 
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Kevin D. Jernigan</h6>
                                                        <span class="mail-desc">I am a singer!</span> 
                                                        <span class="time">9:08 AM</span> 
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <img src="<?=base_url();?>assets/images/users/avatar-5.jpg" alt="user" class="rounded-circle"> 
                                                        <span class="profile-status offline pull-right"></span> 
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Jane A. Seward</h6>
                                                        <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> 
                                                    </div>
                                                </a> 
                                            </div>
                                        </li>
                                        <li> 
                                            <a class="text-center bg-light" href="javascript:void(0);"> <strong>See all notifications</strong> </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:;" data-toggle="dropdown">
                                        <img src="<?=base_url();?>assets/images/users/avatar-1.jpg" alt="">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-menu">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                                <li>
                                    <div class="sb-toggle-right">
                                        <i class="mdi mdi-apps"></i>
                                    </div>
                                </li>
                            </ul>
                        </div><!--right notification end-->
                    </div>
                </div>
                <!-- header section end-->

                <div class="container-fluid">
                    <div class="page-head">
                        <h4 class="my-2">Starter Page</h4>
                    </div>                   
                    
                </div><!--end container-->

                <!--footer section start-->
                <footer class="footer">
                    2018 &copy; Syntra.
                </footer>
                <!--footer section end-->


                <!-- Right Slidebar start -->
                <div class="sb-slidebar sb-right sb-style-overlay">
                    <div class="right-bar slimscroll">
                        <span class="r-close-btn sb-close"><i class="fa fa-times"></i></span>

                        <ul class="nav nav-tabs nav-justified-">
                            <li class="">
                                <a href="#chat" class="active" data-toggle="tab">Chat</a>
                            </li>
                            <li class="">
                                <a href="#activity" data-toggle="tab">Activity</a>
                            </li>
                            <li class="">
                                <a href="#settings" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="chat">
                                <div class="online-chat">
                                    <div class="online-chat-container">
                                        <div class="chat-list">
                                            <form class="search-content" action="index.html" method="post">
                                                <input type="text" class="form-control" name="keyword" placeholder="Search...">
                                                <span class="search-button"><i class="ti ti-search"></i></span>
                                            </form>
                                        </div>
                                        <div class="side-title-alt">
                                            <h2>online</h2>                                           
                                        </div>

                                        <ul class="team-list chat-list-side">
                                            <li>
                                                <a href="#" class="ml-3">
                                                    <span class="thumb-small">
                                                        <img class="rounded-circle" src="<?=base_url();?>assets/images/users/avatar-1.jpg" alt="">
                                                        <i class="online dot"></i>
                                                    </span>
                                                    <div class="inline">
                                                        <span class="name">Alison Jones</span>
                                                        <small class="text-muted">Start exploring</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="ml-3">
                                                    <span class="thumb-small">
                                                        <img class="rounded-circle" src="<?=base_url();?>assets/images/users/avatar-3.jpg" alt="">
                                                        <i class="online dot"></i>
                                                    </span>
                                                    <div class="inline">
                                                        <span class="name">Jonathan Smith</span>
                                                        <small class="text-muted">Alien Inside</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="ml-3">
                                                    <span class="thumb-small">
                                                        <img class="rounded-circle" src="<?=base_url();?>assets/images/users/avatar-4.jpg" alt="">
                                                        <i class="away dot"></i>
                                                    </span>
                                                    <div class="inline">
                                                        <span class="name">Anjelina Doe</span>
                                                        <small class="text-muted">Screaming...</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="ml-3">
                                                    <span class="thumb-small">
                                                        <img class="rounded-circle" src="<?=base_url();?>assets/images/users/avatar-5.jpg" alt="">
                                                        <i class="busy dot"></i>
                                                    </span>
                                                    <div class="inline">
                                                        <span class="name">Franklin Adam</span>
                                                        <small class="text-muted">Don't lose the hope</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="ml-3">
                                                    <span class="thumb-small">
                                                        <img class="rounded-circle" src="<?=base_url();?>assets/images/users/avatar-6.jpg" alt="">
                                                         <i class="online dot"></i>
                                                    </span>
                                                    <div class="inline">
                                                        <span class="name">Jeff Crowford </span>
                                                        <small class="text-muted">Just flying</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="side-title-alt mb-3">
                                            <h2>Friends</h2>
                                        </div>
                                        <ul class="list-unstyled friends">
                                            <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="<?=base_url();?>assets/images/users/avatar-7.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="<?=base_url();?>assets/images/users/avatar-8.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="<?=base_url();?>assets/images/users/avatar-9.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="<?=base_url();?>assets/images/users/avatar-10.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="<?=base_url();?>assets/images/users/avatar-2.jpg" alt="">
                                                </a>
                                            </li>
                                             <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="<?=base_url();?>assets/images/users/avatar-1.jpg" alt="">
                                                </a>
                                            </li>
                                             <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="<?=base_url();?>assets/images/users/avatar-3.jpg" alt="">
                                                </a>
                                            </li>
                                             <li>
                                                <a href="#">
                                                    <img class="rounded-circle" src="<?=base_url();?>assets/images/users/avatar-4.jpg" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="activity">
                                
                                <div class="aside-widget">
                                    <div class="side-title-alt">
                                        <h2>Recent Activity</h2>
                                    </div>
                                    <ul class="team-list chat-list-side info">
                                        <li>
                                            <span class="thumb-small">
                                                <i class="fa fa-pencil"></i>
                                            </span>
                                            <div class="inline">
                                                <span class="name">Mary Brown open a new company</span>
                                                <span class="time">just now</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="thumb-small">
                                                <i class="fa fa-user-plus"></i>
                                            </span>
                                            <div class="inline">
                                                <span class="name">Mary Brown send a new message </span>
                                                <span class="time">50 min ago</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="thumb-small">
                                                <i class="fa fa-wrench"></i>
                                            </span>
                                            <div class="inline">
                                                <span class="name">Holly Cobb Uploaded 6 new photos.</span>
                                                <span class="time">3 Week Ago</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="thumb-small">
                                                <i class="fa fa-users"></i>
                                            </span>
                                            <div class="inline">
                                                <span class="name">Mary Brown open a new company.</span>
                                                <span class="time">1 Month Ago</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="aside-widget">

                                    <div class="side-title-alt">
                                        <h2>Events</h2>
                                    </div>
                                    <ul class="team-list chat-list-side info statistics border-less-list">
                                        <li>
                                            <div class="inline">
                                                <p class="mb-1">Jamie Miller</p>
                                                <span class="name">Contrary to popular belief, Lorem Ipsum is not simply random text.</span>
                                                <span class="time text-muted">2 Week Ago</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inline">
                                                <p class="mb-1">Robert Jones</p>
                                                <span class="name">Lorem Ipsum is simply dummy text of the printing and typesetting .</span>
                                                <span class="time text-muted">1 Month Ago</span>
                                            </div>
                                        </li>                                        
                                    </ul>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="settings">
                                <div class="side-title-alt">
                                    <h6 class="mb-0">Account Setting</h6>
                                </div>
                                <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                                    <li>
                                        <div class="inline">
                                            <span class="name">Auto updates</span>
                                        </div>
                                        <span class="thumb-small">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                        </span>
                                    </li>
                                    <li>
                                        <div class="inline">
                                            <span class="name">Show offline Contacts</span>
                                        </div>
                                        <span class="thumb-small">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                        </span>
                                    </li>

                                    <li>
                                        <div class="inline">
                                            <span class="name">Location Permission</span>
                                        </div>
                                        <span class="thumb-small">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                        </span>
                                    </li>
                                </ul>

                                <div class="side-title-alt">
                                    <h6 class="mb-0">General Setting</h6>
                                </div>
                                <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                                    <li>
                                        <div class="inline">
                                            <span class="name">Show me Online</span>
                                        </div>
                                        <span class="thumb-small">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                        </span>
                                    </li>
                                    <li>
                                        <div class="inline">
                                            <span class="name">Status visible to all</span>
                                        </div>
                                        <span class="thumb-small">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                        </span>
                                    </li>

                                    <li>
                                        <div class="inline">
                                            <span class="name">Notifications</span>
                                        </div>
                                        <span class="thumb-small">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end Right Slidebar-->
            </div>
            <!--end body content-->
        </section>

        <!-- jQuery -->
        <script src="<?=base_url();?>assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?=base_url();?>assets/js/popper.min.js"></script>
        <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?=base_url();?>assets/js/jquery-migrate.js"></script>
        <script src="<?=base_url();?>assets/js/modernizr.min.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.slimscroll.min.js"></script>
        <script src="<?=base_url();?>assets/js/slidebars.min.js"></script>
        

        <!--app js-->
        <script src="<?=base_url();?>assets/js/jquery.app.js"></script>
    </body>
</html>