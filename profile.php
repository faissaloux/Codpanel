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
        <!-- MDI -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/mdi/css/materialdesignicons.min.css">

        <style>
            body{
                background-color: #F5F5F5;
            }
            a{
                font-weight: 400;
            }
            select{
                cursor: pointer;
            }

            .btn-top > a{
                font-size: 16px;
                width: 160px;
            }

            i > span{
                font-style: normal;
            }

            .form{
                border: 1px #BBB solid;
                background-color: #FFF;
                padding: 12px;
            }

            .actions-menu{
                position: fixed;
                display: none;
                width: 100%;
                z-index: 999;
                height: 60px;
                background-color: #201F2B;
                color: #FFF;
            }
            .actions-number{
                background-color: #3C3B4C;
                border-radius: 20px;
                padding: 4px 12px;
            }
            .action{
                background-color: #3C3B4C;
                padding: 6px 12px;
                border-radius: 20px;
                cursor: pointer;
                line-height: 22px;
            }
            .action-delete{
                background-color: #EC3751;
            }
            .close-actions-menu{
                cursor: pointer;
            }
            .margin-top-60{
                margin-top: 60px;;
            }
            input[type="checkbox"]{
                cursor: pointer;
            }

            .header-right .user-profile-area{
                height: 75px;
            }

            .add-new-user-text{
                margin-left: 35px;
            }
            .add-new-user-icon{
                width: 40px;
                background-color: rgba(0,0,0,.15);;
                position: absolute;
                left: 0;
                top: 0;
                bottom: 0;
            }

            .navbar-menu{
                color: #FFF;
            }
            .quantity{
                color: #FFF;
                background: #666;
                padding: 0 8px;
                border-radius: 6px;
                font-size: 12px;
            }
            .table-top-btn ~ .table-top-btn-icon{
                position: absolute;
                left: 26px;
                top: 7px;
                color: #FFF;
            }

            .table-primary thead tr th{
                font-size: 18px;
            }
            .rounded{
                color: white !important;
                border-radius: 50px !important;
            }
            .custom-control-label{
                cursor: pointer;
            }
            
            .border-none{
                border: none;
            }

            .edit{
                background: linear-gradient(to right, #4f93b2, #66cfb5);
            }
            .mdi{
                font-size: 18px;
            }
        </style>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body dir="rtl">
        <?php require_once 'inc/actions.php'; ?>
        <!--================================-->
        <!-- Page Container Start -->
        <!--================================-->
        <div class="page-container">
            <!--================================-->
            <!-- Page Sidebar Start -->
            <!--================================-->
            <?php require_once 'inc/sidebar.php'; ?>
            <!--/ Sidebar Footer End -->
            </div>
            <!--/ Page Sidebar End -->
            <!--================================-->
            <!-- Page Content Start -->
            <!--================================-->
            <div class="page-content get-down">
                <!--================================-->
                <!-- Page Header Start -->
                <!--================================-->
                <?php require_once 'inc/nav.php'; ?>
                <!--/ Page Header End -->
                <!--================================-->
                <!-- Page Inner Start -->
                <!--================================-->
                <div class="d-flex justify-content-between p-2 bg-white p-4">
                    <h3>الملف الشخصي</h3>
                </div>
                <div class="page-inner mt-4">
                    <div class="d-flex flex-column">
                        <div class="col-12 mb-2">
                            <div class="form mb-4">
                                <form action="/profile/edit" method="GET">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="form-group col">
                                                            <div class="input-group mb-3">
                                                                <span class="col-2 tx-right">اسم الموظفة</span>
                                                                <input  type="text"
                                                                        class="form-control col-10"
                                                                        placeholder="اسم الموظفة"
                                                                        aria-label="Username"
                                                                        aria-describedby="basic-addon3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon3">
                                                                        <i class="fa fa-user"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="col-2 tx-right">البريد الإلكتروني</span>
                                                                <input  type="text"
                                                                        class="form-control col-10"
                                                                        placeholder="البريد الإلكتروني"
                                                                        aria-label="Recipient's username"
                                                                        aria-describedby="basic-addon4">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="basic-addon4">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="col-2 tx-right">كلمة المرور</span>
                                                                <input  type="password"
                                                                        class="form-control col-10"
                                                                        placeholder="كلمة المرور"
                                                                        aria-label="Recipient's password"
                                                                        aria-describedby="basic-addon4">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="basic-addon4">
                                                                        <i class="fa fa-key"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="col-2 tx-right">رقم الهاتف</span>
                                                                <input  type="text"
                                                                        class="form-control col-10"
                                                                        placeholder="رقم الهاتف"
                                                                        aria-label="Recipient's password"
                                                                        aria-describedby="basic-addon4">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="basic-addon4">
                                                                        <i class="fa fa-phone"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary">
                                                    <span class="ml-2">تعديل</span>
                                                    <i class="fa fa-arrow-left"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <!--/ Page Inner End --> 
            <!--================================-->	
            </div>
            <!--/ Page Content End -->
        </div> 
        <!--/ Page Container End -->
        <!--================================-->

        <!--================================-->
        <!-- Scroll To Top Start-->
        <!--================================-->	
        <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
        <!--/ Scroll To Top End -->
        <!--================================-->

        <!--================================-->
        <!-- Footer Script -->
        <!--================================-->
        <?php require_once 'inc/scripts.php'; ?>
        
    </body>

</html>