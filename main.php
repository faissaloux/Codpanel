<!DOCTYPE html>
<html lang="zxx">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="keyword" content="">
      <meta name="author"  content=""/>
      <!-- Page Title -->
      <title>Google Chart | Avesta - Multipurpose Admin Dashboard Template</title>
      <!-- Main CSS -->	  
      <link type="text/css" rel="stylesheet" href="assets/css/style.css"/>
      <!-- Favicon -->	
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

      <style>
         .header-right .user-profile-area {
            height: 40px;
         }
      </style>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!--================================-->
      <!-- Page Container Start -->
      <!--================================-->
      <div class="page-container">
         <!--================================-->
         <!-- Page Sidebar Start -->
         <!--================================-->
         <?php require_once 'inc/sidebar.php'; ?>
         <!--/ Page Sidebar End -->
         <!--================================-->
         <!-- Page Content Start -->
         <!--================================-->
         <div class="page-content">
            <!--================================-->
            <!-- Page Header Start -->
            <!--================================-->
            <div class="page-header">
               <nav class="navbar navbar-default">
                  <!--================================-->
                  <!-- Brand and Logo Start -->
                  <!--================================-->
                  <div class="navbar-header">
                     <div class="navbar-brand">
                        <ul class="list-inline">
                           <!-- Mobile Toggle and Logo -->
                           <li class="list-inline-item">
                              <a class="hidden-md hidden-lg" href="#" id="sidebar-toggle-button">
                                 <i data-feather="menu" class="wd-20"></i>
                              </a>
                           </li>
                           <!-- PC Toggle and Logo -->
                           <li class="list-inline-item">
                              <a class=" hidden-xs hidden-sm" href="#" id="collapsed-sidebar-toggle-button">
                                 <i data-feather="menu" class="wd-20"></i>
                           </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <!--/ Brand and Logo End -->
                  <!--================================-->
                  <!-- Header Right Start -->
                  <!--================================-->
                  <div class="header-right pull-right">
                     <ul class="list-inline justify-content-end">
                        <!-- Notifications Dropdown Start -->
                        <!--================================-->
                        <li class="list-inline-item dropdown hidden-xs">
                           <a class=" notification-icon"
                              href="#"
                              role="button"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                           <i data-feather="bell" class="wd-20"></i>
                           <span class="notification-count wave in"></span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right">
                              <!-- Top Notifications Area -->
                              <div class="top-notifications-area">
                                 <!-- Heading -->
                                 <div class="notifications-heading">
                                    <div class="heading-title">
                                       <h6>Notifications</h6>
                                    </div>
                                    <span>5+ New Notifications</span>
                                 </div>
                                 <div class="notifications-box" id="notificationsBox">
                                    <a class="dropdown-item list-group-item" href="#">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-success">
                                             <i data-feather="smile" class="wd-20"></i>
                                          </div>
                                       </div>
                                       <div class="wd-100p">
                                          <div class="d-flex justify-content-between">
                                             <h3 class="tx-13 tx-semibold mb-0">Your order is placed</h3>
                                             <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                                          </div>
                                          <div class="tx-gray-700">System reboot has been successfully completed</div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="#">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-warning">
                                             <i data-feather="bell" class="wd-20"></i>
                                          </div>
                                       </div>
                                       <div class="wd-100p">
                                          <div class="d-flex justify-content-between">
                                             <h3 class="tx-13 tx-semibold mb-0">Document available</h3>
                                             <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                                          </div>
                                          <div class="tx-gray-700">New user feedback received</div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="#">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-success">
                                             <i data-feather="check-circle" class="wd-20"></i>
                                          </div>
                                       </div>
                                       <div class="wd-100p">
                                          <div class="d-flex justify-content-between">
                                             <h3 class="tx-13 tx-semibold mb-0">Payment failed!</h3>
                                             <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                                          </div>
                                          <div class="tx-gray-700">New file has been uploaded</div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="#">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-primary">
                                             <i data-feather="info" class="wd-20"></i>
                                          </div>
                                       </div>
                                       <div class="wd-100p">
                                          <div class="d-flex justify-content-between">
                                             <h3 class="tx-13 tx-semibold mb-0">Document available</h3>
                                             <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                                          </div>
                                          <div class="tx-gray-700">New order has been received</div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="#">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-primary">
                                             <i data-feather="info" class="wd-20"></i>
                                          </div>
                                       </div>
                                       <div class="wd-100p">
                                          <div class="d-flex justify-content-between">
                                             <h3 class="tx-13 tx-semibold mb-0">New order available</h3>
                                             <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                                          </div>
                                          <div class="tx-gray-700">New order has been received</div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="#">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-success">
                                             <i data-feather="smile" class="wd-20"></i>
                                          </div>
                                       </div>
                                       <div class="wd-100p">
                                          <div class="d-flex justify-content-between">
                                             <h3 class="tx-13 tx-semibold mb-0">Your order is placed</h3>
                                             <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                                          </div>
                                          <div class="tx-gray-700">System reboot has been successfully completed</div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="#">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-35 ht-35 mg-r-10 d-flex align-items-center justify-content-center rounded-circle card-icon-warning">
                                             <i data-feather="bell" class="wd-20"></i>
                                          </div>
                                       </div>
                                       <div class="wd-100p">
                                          <div class="d-flex justify-content-between">
                                             <h3 class="tx-13 tx-semibold mb-0">Document available</h3>
                                             <span class="small tx-gray-500 ft-right">Mar 15, 12:32pm</span>
                                          </div>
                                          <div class="tx-gray-700">New user feedback received</div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="notifications-footer">
                                    <a href="#">View all Notifications</a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <!--/ Notifications Dropdown End -->
                        <!--================================-->
                        <!-- Profile Dropdown Start -->
                        <!--================================-->
                        <li class="list-inline-item dropdown">
                           <a  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <img src="assets/images/users-face/1.png" class="img-fluid wd-30 ht-30 rounded-circle" alt="">
                           </a>
                           <div class="dropdown-menu dropdown-menu-right dropdown-profile">
                              <div class="user-profile-area d-flex">
                                 <a href="aut-logign-register.html" class="dropdown-item m-auto">
                                    <i data-feather="power" class="wd-16 mr-2"></i>
                                    تسجيل الخروج
                                 </a>
                              </div>
                           </div>
                        </li>
                        <!-- Profile Dropdown End -->
                     </ul>
                  </div>
                  <!--/ Header Right End -->
               </nav>
            </div>
            <!--/ Page Header End -->
            <!--================================-->
            <!-- Page Inner Start -->
            <!--================================-->
            <div class="page-inner">

            </div>
            <!--/ Page Inner End --> 
            <!--================================-->	
         </div>
         <!--/ Page Content End -->
      </div>
      <!--/ Page Container End -->
      <!--================================-->
      <!-- Scroll To Top Start-->
      <!--================================-->	
      <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      <!--/ Scroll To Top End -->
      <!--================================-->
      <!--================================-->
      <!-- Footer Script -->
      <!--================================-->
      <script src="assets/plugins/jquery/jquery.min.js"></script>
      <script src="assets/plugins/jquery-ui/jquery-ui.js"></script>
      <script src="assets/plugins/popper/popper.js"></script>
      <script src="assets/plugins/feather/feather.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/plugins/typeahead/typeahead.js"></script>
      <script src="assets/plugins/typeahead/typeahead-active.js"></script>
      <script src="assets/plugins/pace/pace.min.js"></script>
      <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <script src="assets/plugins/highlight/highlight.min.js"></script>
      <!-- google chart Script -->
      <script src="assets/plugins/google-chart/google-chart.min.js"></script>
      <script src="assets/plugins/google-chart/google-sample.js"></script>
      <!-- Required Script -->
      <script src="assets/js/app.js"></script>
      <script src="assets/js/avesta.js"></script>
      <script src="assets/js/avesta-customizer.js"></script>
   </body>

</html>