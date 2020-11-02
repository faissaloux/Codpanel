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
                    <div class="row align-items-center pr-4 pl-4">
                        <div class="col-md-6 col-sm-12 mb-md-0 mb-sm-5">
                            <h3 class="tx-right">الحساب اليومي</h3>
                        </div>
                        <div class="heading-elements stastsForm col-md-6 col-sm-12">
                            <form class="heading-form d-flex" id="form-stats-From-To" autocomplete="off" method="GET" action="">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="from" class="float-right">التاريخ من</label>
                                        <input  type="text"
                                                name="from"
                                                placeholder="التاريخ من"
                                                class="form-control tx-right"
                                                id="datepickerFrom">
                                    </div>
                                </div>
                        
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="to" class="float-right">التاريخ إلى</label>
                                        <input  type="text"
                                                name="to"
                                                placeholder="التاريخ الى"
                                                class="form-control tx-right"
                                                id="datepickerTo">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <button class="btn btn-success mt-4 search-btn" type="submit">
                                            <i data-feather="search" class="search-icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-start bg-grey bt1 bb1 p-2">
                        <div class="dropdown dropdown-provider">
                            <button class="dropdown-toggle"
                                    type="button"
                                    id="dropdownMenuButton"
                                    data-toggle="dropdown" 
                                    aria-haspopup="true"
                                    aria-expanded="false">
                              حسب الموزع
                            </button>
                            <div    class="dropdown-menu by-vendor-dropdown tx-right"
                                    aria-labelledby="dropdownMenuButton">
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
                            <div class="d-flex justify-content-between mb-4">
                                <a href="" class="btn-top p-2 tx-center bg-primary text-white">انتظار الاستلام</a>
                                <a href="" class="btn-top b-primary p-2 tx-center bg-white text-primary">تم الدفع</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card-body pd-0 tx-center">
                                <table class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input type="checkbox" class="show-actions-menu"/></th>
                                            <th scope="col" data-type="date">اليوم</th>
                                            <th scope="col" data-type="requestsNum">عدد الطلبات</th>
                                            <th scope="col" data-type="totalSells">مجموع المبيعات</th>
                                            <th scope="col" data-type="deliveryPrice">سعر التوصيل</th>
                                            <th scope="col" data-type="net">الصافي</th>
                                            <th scope="col" data-type="details">رؤية التفاصيل</th>
                                            <th scope="col" data-type="received">استلام الدفع</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr height="50">
                                            <td colspan="8" class="tx-right provider">
                                                فوو
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <span>2020-10-28</span>
                                            </td>
                                            <td data-type="requestsNum">
                                                <span>2</span>
                                            </td>
                                            <td data-type="totalSells">
                                                <span>498 درهم</span>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <span>2020-10-28</span>
                                            </td>
                                            <td data-type="requestsNum">
                                                <span>4</span>
                                            </td>
                                            <td data-type="totalSells">
                                                <span>498 درهم</span>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <span>2020-10-28</span>
                                            </td>
                                            <td data-type="requestsNum">
                                                <span>8</span>
                                            </td>
                                            <td data-type="totalSells">
                                                <span>498 درهم</span>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button" 
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <span>2020-10-28</span>
                                            </td>
                                            <td data-type="requestsNum">
                                                <span>22</span>
                                            </td>
                                            <td data-type="totalSells">
                                                <span>498 درهم</span>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <span>2020-10-28</span>
                                            </td>
                                            <td data-type="requestsNum">
                                                <span>21</span>
                                            </td>
                                            <td data-type="totalSells">
                                                <span>498 درهم</span>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <span>2020-10-28</span>
                                            </td>
                                            <td data-type="requestsNum">
                                                <span>10</span>
                                            </td>
                                            <td data-type="totalSells">
                                                <span>498 درهم</span>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <span>2020-10-28</span>
                                            </td>
                                            <td data-type="requestsNum">
                                                <span>4</span>
                                            </td>
                                            <td data-type="totalSells">
                                                <span>498 درهم</span>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <span>2020-10-28</span>
                                            </td>
                                            <td data-type="requestsNum">
                                                <span>7</span>
                                            </td>
                                            <td data-type="totalSells">
                                                <span>498 درهم</span>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button" 
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <span>2020-10-28</span>
                                            </td>
                                            <td data-type="requestsNum">
                                                <span>12</span>
                                            </td>
                                            <td data-type="totalSells">
                                                <span>498 درهم</span>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr height="50">
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <span>2020-10-28</span>
                                            </td>
                                            <td data-type="requestsNum">
                                                <span>4</span>
                                            </td>
                                            <td data-type="totalSells">
                                                <span>498 درهم</span>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white received">
                                                    تم استلام المبلغ
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
        <script src="assets/js/custom.js"></script>

    </body>

</html>