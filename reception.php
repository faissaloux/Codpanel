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
                <div class="d-flex flex-column bg-white pt-4">
                    <div class="d-flex justify-content-between align-items-center pr-4 pl-4">
                        <div class="d-flex">
                            <h3>استقبال</h3>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-end bg-grey bt1 bb1 p-2">
                        <div class="dropdown dropdown-city">
                            <button class="dropdown-toggle"
                                    type="button"
                                    id="dropdownMenuButton"
                                    data-toggle="dropdown" 
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                حسب المدينة
                            </button>
                            <div    class="dropdown-menu by-city-dropdown tx-right"
                                    aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">الرباط</a>
                                <a class="dropdown-item" href="#">أكادير</a>
                                <a class="dropdown-item" href="#">مراكش</a>
                                <a class="dropdown-item" href="#">الرباط</a>
                                <a class="dropdown-item" href="#">أكادير</a>
                                <a class="dropdown-item" href="#">مراكش</a>
                                <a class="dropdown-item" href="#">الرباط</a>
                                <a class="dropdown-item" href="#">أكادير</a>
                                <a class="dropdown-item" href="#">مراكش</a>
                                <a class="dropdown-item" href="#">الرباط</a>
                                <a class="dropdown-item" href="#">أكادير</a>
                                <a class="dropdown-item" href="#">مراكش</a>
                            </div>
                        </div>
                        <div class="dropdown dropdown-product">
                            <button class="dropdown-toggle"
                                    type="button"
                                    id="dropdownMenuButton"
                                    data-toggle="dropdown" 
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                حسب المنتج
                            </button>
                            <div    class="dropdown-menu by-product-dropdown tx-right"
                                    aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">فوو</a>
                                <a class="dropdown-item" href="#">بوو</a>
                                <a class="dropdown-item" href="#">فوو بوو</a>
                                <a class="dropdown-item" href="#">فوو</a>
                                <a class="dropdown-item" href="#">بوو</a>
                                <a class="dropdown-item" href="#">فوو بوو</a>
                                <a class="dropdown-item" href="#">فوو</a>
                                <a class="dropdown-item" href="#">بوو</a>
                                <a class="dropdown-item" href="#">فوو بوو</a>
                                <a class="dropdown-item" href="#">فوو</a>
                                <a class="dropdown-item" href="#">بوو</a>
                                <a class="dropdown-item" href="#">فوو بوو</a>
                                <a class="dropdown-item" href="#">فوو</a>
                                <a class="dropdown-item" href="#">بوو</a>
                                <a class="dropdown-item" href="#">فوو بوو</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-inner">
                    <div class="d-flex flex-column">
                        <div class="col-12">
                            <div class="card-body pd-0 pt-4 tx-center">
                                <table class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input type="checkbox" class="show-actions-menu"/></th>
                                            <th scope="col" data-type="reference">Reference</th>
                                            <th scope="col" data-type="productname">Nom de produit</th>
                                            <th scope="col" data-type="retour">Retour</th>
                                            <th scope="col" data-type="received">Recue</th>
                                            <th scope="col" data-type="real">Réel</th>
                                            <th scope="col" data-type="delivered">Livré</th>
                                            <th scope="col" data-type="physicalStock">Stock physique</th>
                                            <th scope="col" data-type="theoreticalStock">Stock theorique</th>
                                            <th scope="col" data-type="currentStock">Stock en cours</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr height="50">
                                            <td colspan="10" class="city">
                                                Rabat
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN27</span>
                                            </td>
                                            <td data-type="productname">
                                                <span>المفرمة الكهربائية صنع الماني</span>
                                            </td>
                                            <td data-type="retour">
                                                <span>0</span>
                                            </td>
                                            <td data-type="received">
                                                <span>6</span>
                                            </td>
                                            <td data-type="real">
                                                <span>12</span>
                                            </td>
                                            <td data-type="delivered">
                                                <span>1</span>
                                            </td>
                                            <td data-type="physicalStock">
                                                <span>6</span>
                                            </td>
                                            <td data-type="theoreticalStock">
                                                <span>28</span>
                                            </td>
                                            <td data-type="currentStock">
                                                <span>0</span>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN27</span>
                                            </td>
                                            <td data-type="productname">
                                                <span>المفرمة الكهربائية صنع الماني</span>
                                            </td>
                                            <td data-type="retour">
                                                <span>0</span>
                                            </td>
                                            <td data-type="received">
                                                <span>6</span>
                                            </td>
                                            <td data-type="real">
                                                <span>12</span>
                                            </td>
                                            <td data-type="delivered">
                                            <span>1</span>
                                            </td>
                                            <td data-type="physicalStock">
                                                <span>6</span>
                                            </td>
                                            <td data-type="theoreticalStock">
                                                <span>28</span>
                                            </td>
                                            <td data-type="currentStock">
                                                <span>0</span>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN27</span>
                                            </td>
                                            <td data-type="productname">
                                                <span>المفرمة الكهربائية صنع الماني</span>
                                            </td>
                                            <td data-type="retour">
                                                <span>0</span>
                                            </td>
                                            <td data-type="received">
                                                <span>6</span>
                                            </td>
                                            <td data-type="real">
                                                <span>12</span>
                                            </td>
                                            <td data-type="delivered">
                                                <span>1</span>
                                            </td>
                                            <td data-type="physicalStock">
                                                <span>6</span>
                                            </td>
                                            <td data-type="theoreticalStock">
                                                <span>28</span>
                                            </td>
                                            <td data-type="currentStock">
                                                <span>0</span>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN27</span>
                                            </td>
                                            <td data-type="productname">
                                                <span>المفرمة الكهربائية صنع الماني</span>
                                            </td>
                                            <td data-type="retour">
                                                <span>0</span>
                                            </td>
                                            <td data-type="received">
                                                <span>6</span>
                                            </td>
                                            <td data-type="real">
                                                <span>12</span>
                                            </td>
                                            <td data-type="delivered">
                                                <span>1</span>
                                            </td>
                                            <td data-type="physicalStock">
                                                <span>6</span>
                                            </td>
                                            <td data-type="theoreticalStock">
                                                <span>28</span>
                                            </td>
                                            <td data-type="currentStock">
                                                <span>0</span>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN27</span>
                                            </td>
                                            <td data-type="productname">
                                                <span>المفرمة الكهربائية صنع الماني</span>
                                            </td>
                                            <td data-type="retour">
                                                <span>0</span>
                                            </td>
                                            <td data-type="received">
                                                <span>6</span>
                                            </td>
                                            <td data-type="real">
                                                <span>12</span>
                                            </td>
                                            <td data-type="delivered">
                                                <span>1</span>
                                            </td>
                                            <td data-type="physicalStock">
                                                <span>6</span>
                                            </td>
                                            <td data-type="theoreticalStock">
                                                <span>28</span>
                                            </td>
                                            <td data-type="currentStock">
                                                <span>0</span>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN27</span>
                                            </td>
                                            <td data-type="productname">
                                                <span>المفرمة الكهربائية صنع الماني</span>
                                            </td>
                                            <td data-type="retour">
                                                <span>0</span>
                                            </td>
                                            <td data-type="received">
                                                <span>6</span>
                                            </td>
                                            <td data-type="real">
                                                <span>12</span>
                                            </td>
                                            <td data-type="delivered">
                                                <span>1</span>
                                            </td>
                                            <td data-type="physicalStock">
                                                <span>6</span>
                                            </td>
                                            <td data-type="theoreticalStock">
                                                <span>28</span>
                                            </td>
                                            <td data-type="currentStock">
                                                <span>0</span>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN27</span>
                                            </td>
                                            <td data-type="productname">
                                                <span>المفرمة الكهربائية صنع الماني</span>
                                            </td>
                                            <td data-type="retour">
                                                <span>0</span>
                                            </td>
                                            <td data-type="received">
                                                <span>6</span>
                                            </td>
                                            <td data-type="real">
                                                <span>12</span>
                                            </td>
                                            <td data-type="delivered">
                                                <span>1</span>
                                            </td>
                                            <td data-type="physicalStock">
                                                <span>6</span>
                                            </td>
                                            <td data-type="theoreticalStock">
                                                <span>28</span>
                                            </td>
                                            <td data-type="currentStock">
                                                <span>0</span>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN27</span>
                                            </td>
                                            <td data-type="productname">
                                                <span>المفرمة الكهربائية صنع الماني</span>
                                            </td>
                                            <td data-type="retour">
                                                <span>0</span>
                                            </td>
                                            <td data-type="received">
                                                <span>6</span>
                                            </td>
                                            <td data-type="real">
                                                <span>12</span>
                                            </td>
                                            <td data-type="delivered">
                                                <span>1</span>
                                            </td>
                                            <td data-type="physicalStock">
                                                <span>6</span>
                                            </td>
                                            <td data-type="theoreticalStock">
                                                <span>28</span>
                                            </td>
                                            <td data-type="currentStock">
                                                <span>0</span>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN27</span>
                                            </td>
                                            <td data-type="productname">
                                                <span>المفرمة الكهربائية صنع الماني</span>
                                            </td>
                                            <td data-type="retour">
                                                <span>0</span>
                                            </td>
                                            <td data-type="received">
                                                <span>6</span>
                                            </td>
                                            <td data-type="real">
                                                <span>12</span>
                                            </td>
                                            <td data-type="delivered">
                                                <span>1</span>
                                            </td>
                                            <td data-type="physicalStock">
                                                <span>6</span>
                                            </td>
                                            <td data-type="theoreticalStock">
                                                <span>28</span>
                                            </td>
                                            <td data-type="currentStock">
                                                <span>0</span>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN27</span>
                                            </td>
                                            <td data-type="productname">
                                                <span>المفرمة الكهربائية صنع الماني</span>
                                            </td>
                                            <td data-type="retour">
                                                <span>0</span>
                                            </td>
                                            <td data-type="received">
                                                <span>6</span>
                                            </td>
                                            <td data-type="real">
                                                <span>12</span>
                                            </td>
                                            <td data-type="delivered">
                                                <span>1</span>
                                            </td>
                                            <td data-type="physicalStock">
                                                <span>6</span>
                                            </td>
                                            <td data-type="theoreticalStock">
                                                <span>28</span>
                                            </td>
                                            <td data-type="currentStock">
                                                <span>0</span>
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
        <script src="assets/js/custom.js"></script>

    </body>

</html>