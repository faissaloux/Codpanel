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

            .btn-top{
                width: 49.8%;
            }
            .btn-top.b-primary{
                border: 1px #007bff solid;
            }

            .bg-grey{
                background-color: #FCFCFC;
            }
            .bt1{
                border-top: 1px #DDD solid;
            }
            .bb1{
                border-bottom: 1px #DDD solid;
            }

            .dropdown-provider > button{
                background: transparent;
                border: none;
                cursor: pointer;
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

            .search-btn{
                width: 20px;
                height: 40px;
            }
            .search-icon{
                position: absolute;
                left: 25px;
                top: 32px;
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

            .details{
                background: linear-gradient(to right, #8f94fb, #4e54c8);
            }
            .received{
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
                <div class="d-flex flex-column bg-white pt-4">
                    <div class="d-flex justify-content-between align-items-center pr-4 pl-4">
                        <div class="d-flex">
                            <h3>الحساب اليومي</h3>
                        </div>
                        <div class="heading-elements stastsForm">
                            <form class="heading-form d-flex" id="form-stats-From-To" autocomplete="off" method="GET" action="">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="">التاريخ من</label>
                                        <input  type="text"
                                                name="from"
                                                placeholder="التاريخ من"
                                                class="form-control tx-right"
                                                id="datepickerFrom">
                                    </div>
                                </div>
                        
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="">التاريخ إلى</label>
                                        <input  type="text"
                                                name="to"
                                                placeholder="التاريخ الى"
                                                class="form-control tx-right"
                                                id="datepickerTo">
                                    </div>
                                </div>
                                <div class="col-md-1">
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
                    <div class="d-flex justify-content-end bg-grey bt1 bb1 p-2">
                        <div class="dropdown dropdown-provider">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              حسب الموزع
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Foo</a>
                              <a class="dropdown-item" href="#">Boo</a>
                              <a class="dropdown-item" href="#">Foo Boo</a>
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
                            <div class="card-body pd-0">
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
                                        <tr>
                                            <td colspan="8">
                                                Foo
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <p>2020-10-28</p>
                                            </td>
                                            <td data-type="requestsNum">
                                                <p>2</p>
                                            </td>
                                            <td data-type="totalSells">
                                                <p>498 درهم</p>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <p>2020-10-28</p>
                                            </td>
                                            <td data-type="requestsNum">
                                                <p>4</p>
                                            </td>
                                            <td data-type="totalSells">
                                                <p>498 درهم</p>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <p>2020-10-28</p>
                                            </td>
                                            <td data-type="requestsNum">
                                                <p>8</p>
                                            </td>
                                            <td data-type="totalSells">
                                                <p>498 درهم</p>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button" 
                                                    class="btn btn-primary btn-lg border-none loadactions rounded details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <p>2020-10-28</p>
                                            </td>
                                            <td data-type="requestsNum">
                                                <p>22</p>
                                            </td>
                                            <td data-type="totalSells">
                                                <p>498 درهم</p>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <p>2020-10-28</p>
                                            </td>
                                            <td data-type="requestsNum">
                                                <p>21</p>
                                            </td>
                                            <td data-type="totalSells">
                                                <p>498 درهم</p>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <p>2020-10-28</p>
                                            </td>
                                            <td data-type="requestsNum">
                                                <p>10</p>
                                            </td>
                                            <td data-type="totalSells">
                                                <p>498 درهم</p>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <p>2020-10-28</p>
                                            </td>
                                            <td data-type="requestsNum">
                                                <p>4</p>
                                            </td>
                                            <td data-type="totalSells">
                                                <p>498 درهم</p>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <p>2020-10-28</p>
                                            </td>
                                            <td data-type="requestsNum">
                                                <p>7</p>
                                            </td>
                                            <td data-type="totalSells">
                                                <p>498 درهم</p>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button" 
                                                    class="btn btn-primary btn-lg border-none loadactions rounded details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <p>2020-10-28</p>
                                            </td>
                                            <td data-type="requestsNum">
                                                <p>12</p>
                                            </td>
                                            <td data-type="totalSells">
                                                <p>498 درهم</p>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded received">
                                                    تم استلام المبلغ
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="date">
                                                <p>2020-10-28</p>
                                            </td>
                                            <td data-type="requestsNum">
                                                <p>4</p>
                                            </td>
                                            <td data-type="totalSells">
                                                <p>498 درهم</p>
                                            </td>
                                            <td data-type="deliveryPrice">
                                                <span>50 درهم</span>
                                            </td>
                                            <td data-type="net">
                                                <span>448 درهم</span>
                                            </td>
                                            <td data-type="details">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded details">
                                                    رؤية التفاصيل
                                                </a>
                                            </td>
                                            <td data-type="received">
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded received">
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

        <script>
            $(() => {
                const checkBox = $(".show-actions-menu");
                const getDown = $(".get-down");
                const actionsMenu = $(".actions-menu");
                
                checkBox.click(() => {
                    if(getDown.hasClass("margin-top-60")){
                        getDown.removeClass("margin-top-60");
                        actionsMenu.slideUp(600);
                    } else {
                        getDown.addClass("margin-top-60");
                        actionsMenu.slideDown(200);
                    }
                })

                $(".close-actions-menu").click(()=>{
                    checkBox.prop("checked", false);
                    getDown.removeClass("margin-top-60");
                    actionsMenu.slideUp(600);
                })
            })
        </script>
    </body>

</html>