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
        <!-- Bootstrap link -->
        <link   rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
                integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
                crossorigin="anonymous">
        <!-- Main CSS -->	  
        <link type="text/css" rel="stylesheet" href="assets/css/all.css"/>
        <link type="text/css" rel="stylesheet" href="assets/css/custom.css"/>
        <!-- Favicon -->	
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

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
                    <h3>المدن والموزعين المكلفين بهم</h3>
                    <div class="btn-group btn-top d-flex justify-content-end" role="group">
                        <a href="#" class="btn btn-primary d-flex col-4 border-none">
                            <span class="d-flex justify-content-center add-new-city-icon">
                                <i class="mdi mdi-plus d-flex align-items-center text-white"></i>
                            </span>
                            <span   class="add-new-city-text"
                                    data-toggle="modal"
                                    data-target="#addCityModalCenter">
                                إضافة مدينة جديدة
                            </span>
                        </a>
                    </div>
                </div>
                <div class="page-inner mt-4">
                    <div class="d-flex">
                        <div class="col-12">
                            <div class="card-body pd-0 tx-center">
                                <table class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input type="checkbox" class="show-actions-menu"/></th>
                                            <th scope="col" data-type="city">المدينة</th>
                                            <th scope="col" data-type="symbol">الرمز</th>
                                            <th scope="col" data-type="provider">الموزع</th>
                                            <th scope="col">تعديل</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="city">
                                                <p>Agadir</p>
                                            </td>
                                            <td data-type="symbol">
                                                <p>Aga</p>
                                            </td>
                                            <td data-type="provider">
                                                <p>dealer</p>
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
                                            <td data-type="city">
                                                <p>Marrakech</p>
                                            </td>
                                            <td  data-type="symbol">
                                                <p>Kech</p>
                                            </td>
                                            <td data-type="provider">
                                                <p>dealer</p>
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
                                            <td data-type="city">
                                                <p>Casablanca</p>
                                            </td>
                                            <td data-type="symbol">
                                                <p>Casa</p>
                                            </td>
                                            <td data-type="provider">
                                                <p>dealer</p>
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
                                            <td data-type="city">
                                                <p>Rabat</p>
                                            </td>
                                            <td data-type="symbol">
                                                Rab
                                            </td>
                                            <td data-type="provider">
                                                <p>dealer</p>
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
                                            <td data-type="city">
                                                <p>Tangier</p>
                                            </td>
                                            <td data-type="symbol">
                                                <p>Tan</p>
                                            </td>
                                            <td data-type="provider">
                                                <p>dealer</p>
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
                                            <td data-type="city">
                                                <p>Agadir</p>
                                            </td>
                                            <td data-type="symbol">
                                                <p>Aga</p>
                                            </td>
                                            <td data-type="provider">
                                                <p>dealer</p>
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
                                            <td data-type="city">
                                                <p>Marrakech</p>
                                            </td>
                                            <td  data-type="symbol">
                                                <p>Kech</p>
                                            </td>
                                            <td data-type="provider">
                                                <p>dealer</p>
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
                                            <td data-type="city">
                                                <p>Casablanca</p>
                                            </td>
                                            <td data-type="symbol">
                                                <p>Casa</p>
                                            </td>
                                            <td data-type="provider">
                                                <p>dealer</p>
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
                                            <td data-type="city">
                                                <p>Rabat</p>
                                            </td>
                                            <td data-type="symbol">
                                                Rab
                                            </td>
                                            <td data-type="provider">
                                                <p>dealer</p>
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
                                            <td data-type="city">
                                                <p>Tangier</p>
                                            </td>
                                            <td data-type="symbol">
                                                <p>Tan</p>
                                            </td>
                                            <td data-type="provider">
                                                <p>dealer</p>
                                            </td>
                                            <td>
                                                <a type="button"
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
        <script src="assets/js/all.js"></script>

    </body>

</html>