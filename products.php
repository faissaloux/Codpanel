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

            .img-cont{
                width: 50px;
                height: 50px;
                overflow: hidden;
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
                height: 40px;
            }

            .add-new-product-text{
                margin-left: 35px;
            }
            .add-new-product-icon{
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
    <body>
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
                <?php require_once 'inc/header.php'; ?>
                <!--/ Page Header End -->
                <!--================================-->
                <!-- Page Inner Start -->
                <!--================================-->
                <div class="d-flex justify-content-between p-2 bg-white p-4">
                    <h3>المنتجات</h3>
                    <div class="btn-group btn-top" role="group">
                        <a href="#" class="btn btn-primary d-flex border-none">
                            <span class="d-flex justify-content-center add-new-product-icon">
                                <i class="mdi mdi-plus d-flex align-items-center text-white"></i>
                            </span>
                            <span class="add-new-product-text">
                                إضافة منتج جديد
                            </span>
                        </a>
                    </div>
                </div>
                <div class="page-inner mt-4">
                    <div class="d-flex">
                        <div class="col-12">
                            <div class="card-body pd-0">
                                <table class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input type="checkbox" class="show-actions-menu"/></th>
                                            <th scope="col" data-type="image"></th>
                                            <th scope="col" data-type="reference">Reference</th>
                                            <th scope="col" data-type="product">اسم المنتوج</th>
                                            <th scope="col" data-type="price">سعر الجملة</th>
                                            <th scope="col">تعديل</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="image">
                                                <div class="img-cont">
                                                    <img    src="assets/images/products/pexels-karolina-grabowska-4040567.jpg"
                                                            alt="product1">
                                                </div>
                                            </td>
                                            <td data-type="reference">
                                                <p>SN62</p>
                                            </td>
                                            <td data-type="product">
                                                <p>آلة لتحضير الفشار بدون زيت صحية</p>
                                            </td>
                                            <td data-type="price">
                                                <p>100DH</p>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="image">
                                                <div class="img-cont">
                                                    <img    src="assets/images/products/pexels-karolina-grabowska-4040567.jpg"
                                                            alt="product1">
                                                </div>
                                            </td>
                                            <td data-type="reference">
                                                <p>SN62</p>
                                            </td>
                                            <td  data-type="product">
                                                <p>آلة لتحضير الفشار بدون زيت صحية</p>
                                            </td>
                                            <td data-type="price">
                                                <p>100DH</p>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="image">
                                                <div class="img-cont">
                                                    <img    src="assets/images/products/pexels-karolina-grabowska-4040567.jpg"
                                                            alt="product1">
                                                </div>
                                            </td>
                                            <td data-type="reference">
                                                <p>SN62</p>
                                            </td>
                                            <td data-type="product">
                                                <p>آلة لتحضير الفشار بدون زيت صحية</p>
                                            </td>
                                            <td data-type="price">
                                                <p>100DH</p>
                                            </td>
                                            <td>
                                                <a type="button" 
                                                    class="btn btn-primary btn-lg border-none loadactions rounded edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="image">
                                                <div class="img-cont">
                                                    <img    src="assets/images/products/pexels-karolina-grabowska-4040567.jpg"
                                                            alt="product1">
                                                </div>
                                            </td>
                                            <td data-type="reference">
                                                <p>SN62</p>
                                            </td>
                                            <td data-type="product">
                                                <p>آلة لتحضير الفشار بدون زيت صحية</p>
                                            </td>
                                            <td data-type="price">
                                                <p>100DH</p>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="image">
                                                <div class="img-cont">
                                                    <img    src="assets/images/products/pexels-karolina-grabowska-4040567.jpg"
                                                            alt="product1">
                                                </div>
                                            </td>
                                            <td data-type="reference">
                                                <p>SN62</p>
                                            </td>
                                            <td data-type="product">
                                                <p>آلة لتحضير الفشار بدون زيت صحية</p>
                                            </td>
                                            <td data-type="price">
                                                <p>100DH</p>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="image">
                                                <div class="img-cont">
                                                    <img    src="assets/images/products/pexels-karolina-grabowska-4040567.jpg"
                                                            alt="product1">
                                                </div>
                                            </td>
                                            <td data-type="reference">
                                                <p>SN62</p>
                                            </td>
                                            <td data-type="product">
                                                <p>آلة لتحضير الفشار بدون زيت صحية</p>
                                            </td>
                                            <td data-type="price">
                                                <p>100DH</p>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="image">
                                                <div class="img-cont">
                                                    <img    src="assets/images/products/pexels-karolina-grabowska-4040567.jpg"
                                                            alt="product1">
                                                </div>
                                            </td>
                                            <td data-type="reference">
                                                <p>SN62</p>
                                            </td>
                                            <td  data-type="product">
                                                <p>آلة لتحضير الفشار بدون زيت صحية</p>
                                            </td>
                                            <td data-type="price">
                                                <p>100DH</p>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="image">
                                                <div class="img-cont">
                                                    <img    src="assets/images/products/pexels-karolina-grabowska-4040567.jpg"
                                                            alt="product1">
                                                </div>
                                            </td>
                                            <td data-type="reference">
                                                <p>SN62</p>
                                            </td>
                                            <td data-type="product">
                                                <p>آلة لتحضير الفشار بدون زيت صحية</p>
                                            </td>
                                            <td data-type="price">
                                                <p>100DH</p>
                                            </td>
                                            <td>
                                                <a  type="button" 
                                                    class="btn btn-primary btn-lg border-none loadactions rounded edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="image">
                                                <div class="img-cont">
                                                    <img    src="assets/images/products/pexels-karolina-grabowska-4040567.jpg"
                                                            alt="product1">
                                                </div>
                                            </td>
                                            <td data-type="reference">
                                                <p>SN62</p>
                                            </td>
                                            <td data-type="product">
                                                <p>آلة لتحضير الفشار بدون زيت صحية</p>
                                            </td>
                                            <td data-type="price">
                                                <p>100DH</p>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="image">
                                                <div class="img-cont">
                                                    <img    src="assets/images/products/pexels-karolina-grabowska-4040567.jpg"
                                                            alt="product1">
                                                </div>
                                            </td>
                                            <td data-type="reference">
                                                <p>SN62</p>
                                            </td>
                                            <td data-type="product">
                                                <p>آلة لتحضير الفشار بدون زيت صحية</p>
                                            </td>
                                            <td data-type="price">
                                                <p>100DH</p>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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

        <?php require_once 'inc/modals.php'; ?>

        <!--================================-->
        <!-- Footer Script -->
        <!--================================-->
        <?php require_once 'inc/scripts.php'; ?>
    </body>

</html>