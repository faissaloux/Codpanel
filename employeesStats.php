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
            i > span{
                font-style: normal;
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

            .dropdown-employee > button{
                background: transparent;
                border: none;
                cursor: pointer;
            }

            td.date{
                background-color: #3689ff;
                color: #FFF;
            }

            .by-employee-dropdown{
                max-height: 200px;
                overflow-y: scroll;
            }
            .by-employee-dropdown{
                left: 8px !important;
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
            @media(max-width: 600px){
                .sm-hide{
                    display: none;
                }
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
                left: -2px;
                top: 32px;
            }

            .table-primary thead tr th{
                font-size: 18px;
            }
            .rounded{
                border-radius: 50px !important;
            }
            .custom-control-label{
                cursor: pointer;
            }
            
            .border-none{
                border: none;
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
                <div class="d-flex flex-column bg-white pt-4">
                    <div class="d-flex justify-content-between align-items-center pr-4 pl-4">
                        <div class="d-flex">
                            <h3>احصائيات الموظفات</h3>
                        </div>
                        <div class="heading-elements stastsForm">
                            <form class="heading-form d-flex" id="form-stats-From-To" autocomplete="off" method="GET" action="">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="from" class="float-right">التاريخ من</label>
                                        <input  type="text"
                                                name="from"
                                                placeholder="التاريخ من"
                                                class="form-control tx-right"
                                                id="datepickerFrom">
                                    </div>
                                </div>
                        
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="to" class="float-right">التاريخ إلى</label>
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
                        <div class="dropdown dropdown-employee">
                            <button class="dropdown-toggle"
                                    type="button"
                                    id="dropdownMenuButton"
                                    data-toggle="dropdown" 
                                    aria-haspopup="true"
                                    aria-expanded="false">
                              حسب الموظفة
                            </button>
                            <div    class="dropdown-menu by-employee-dropdown tx-right"
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
                            </div>
                          </div>
                    </div>
                </div>
                <div class="page-inner">
                    <ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a  class="nav-link active"
                                id="general-stats-tab"
                                data-toggle="tab"
                                href="#generalStats"
                                role="tab"
                                aria-controls="generalStats"
                                aria-selected="true">
                                <i class="mdi mdi-home"></i>
                                <span class="col">الإحصائيات العامة</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link"
                                id="stats-for-providers-tab"
                                data-toggle="tab"
                                href="#statsForProviders"
                                role="tab"
                                aria-controls="statsForProviders"
                                aria-selected="false">
                                <i class="mdi mdi-truck-delivery"></i>
                                <span class="col">قائمة الإحصائيات للموزعين</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link"
                                id="stats-for-employee-tab"
                                data-toggle="tab"
                                href="#statsForEmployees"
                                role="tab"
                                aria-controls="statsForEmployees"
                                aria-selected="false">
                                <i class="mdi mdi-worker"></i>
                                <span class="col">قائمة الإحصائيات للموظفات</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link"
                                id="products-stats-tab"
                                data-toggle="tab"
                                href="#productsStats"
                                role="tab"
                                aria-controls="productsStats"
                                aria-selected="false">
                                <i class="mdi mdi-tag-multiple"></i>
                                <span class="col">احصائيات المنتوجات</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link"
                                id="other-stats-tab"
                                data-toggle="tab"
                                href="#otherStats"
                                role="tab"
                                aria-controls="otherStats"
                                aria-selected="false">
                                <i class="mdi mdi-shape-plus"></i>
                                <span class="col">احصائيات أخرى</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active pd-15" id="generalStats" role="tabpanel" aria-labelledby="general-stats-tab">
                            <div class="d-flex flex-column">
                                <div class="col-12 pt-4">
                                    <div class="card-body pd-0 tx-center">
                                        <table class="table table-primary">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><input type="checkbox" class="show-actions-menu"/></th>
                                                    <th scope="col" data-type="employee">الموظفة</th>
                                                    <th scope="col" data-type="distributed">تم توزيعها</th>
                                                    <th scope="col" data-type="reconnect">اعادة الإتصال</th>
                                                    <th scope="col" data-type="doesntAnswer">لا يجيب</th>
                                                    <th scope="col" data-type="canceled">ملغية</th>
                                                    <th scope="col" data-type="processing">قيد المعالجة</th>
                                                    <th scope="col" data-type="requestAccepted">قبول الطلب</th>
                                                    <th scope="col" data-type="requestsTotal">مجموع الطلبات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr height="50">
                                                    <td colspan="9" class="tx-right date">
                                                        2020-10-28
                                                    </td>
                                                </tr>
                                                <tr height="50">
                                                    <th scope="row"><input type="checkbox"/></th>
                                                    <td data-type="employee">
                                                        <span>ghizlane</span>
                                                    </td>
                                                    <td data-type="distributed">
                                                        <span class="badge badge-primary">25.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">2</span>
                                                    </td>
                                                    <td data-type="reconnect">
                                                        <span class="badge badge-primary">9.38%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">6</span>
                                                    </td>
                                                    <td data-type="doesntAnswer">
                                                        <span class="badge badge-primary">26.56%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">17</span>
                                                    </td>
                                                    <td data-type="canceled">
                                                        <span class="badge badge-primary">10.94%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">7</span>
                                                    </td>
                                                    <td data-type="processing">
                                                        <span class="badge badge-primary">100.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">3</span>
                                                    </td>
                                                    <td data-type="requestAccepted">
                                                        <span class="badge badge-primary">53.13%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">34</span>
                                                    </td>
                                                    <td data-type="requestsTotal">
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">64</span>
                                                    </td>
                                                </tr>
                                                <tr height="50">
                                                    <th scope="row"><input type="checkbox"/></th>
                                                    <td data-type="employee">
                                                        <span>ghizlane</span>
                                                    </td>
                                                    <td data-type="distributed">
                                                        <span class="badge badge-primary">25.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">2</span>
                                                    </td>
                                                    <td data-type="reconnect">
                                                        <span class="badge badge-primary">9.38%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">6</span>
                                                    </td>
                                                    <td data-type="doesntAnswer">
                                                        <span class="badge badge-primary">26.56%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">17</span>
                                                    </td>
                                                    <td data-type="canceled">
                                                        <span class="badge badge-primary">10.94%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">7</span>
                                                    </td>
                                                    <td data-type="processing">
                                                        <span class="badge badge-primary">100.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">3</span>
                                                    </td>
                                                    <td data-type="requestAccepted">
                                                        <span class="badge badge-primary">53.13%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">34</span>
                                                    </td>
                                                    <td data-type="requestsTotal">
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">64</span>
                                                    </td>
                                                </tr>
                                                <tr height="50">
                                                    <th scope="row"><input type="checkbox"/></th>
                                                    <td data-type="employee">
                                                        <span>ghizlane</span>
                                                    </td>
                                                    <td data-type="distributed">
                                                        <span class="badge badge-primary">25.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">2</span>
                                                    </td>
                                                    <td data-type="reconnect">
                                                        <span class="badge badge-primary">9.38%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">6</span>
                                                    </td>
                                                    <td data-type="doesntAnswer">
                                                        <span class="badge badge-primary">26.56%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">17</span>
                                                    </td>
                                                    <td data-type="canceled">
                                                        <span class="badge badge-primary">10.94%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">7</span>
                                                    </td>
                                                    <td data-type="processing">
                                                        <span class="badge badge-primary">100.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">3</span>
                                                    </td>
                                                    <td data-type="requestAccepted">
                                                        <span class="badge badge-primary">53.13%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">34</span>
                                                    </td>
                                                    <td data-type="requestsTotal">
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">64</span>
                                                    </td>
                                                </tr>
                                                <tr height="50">
                                                    <th scope="row"><input type="checkbox"/></th>
                                                    <td data-type="employee">
                                                        <span>ghizlane</span>
                                                    </td>
                                                    <td data-type="distributed">
                                                        <span class="badge badge-primary">25.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">2</span>
                                                    </td>
                                                    <td data-type="reconnect">
                                                        <span class="badge badge-primary">9.38%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">6</span>
                                                    </td>
                                                    <td data-type="doesntAnswer">
                                                        <span class="badge badge-primary">26.56%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">17</span>
                                                    </td>
                                                    <td data-type="canceled">
                                                        <span class="badge badge-primary">10.94%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">7</span>
                                                    </td>
                                                    <td data-type="processing">
                                                        <span class="badge badge-primary">100.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">3</span>
                                                    </td>
                                                    <td data-type="requestAccepted">
                                                        <span class="badge badge-primary">53.13%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">34</span>
                                                    </td>
                                                    <td data-type="requestsTotal">
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">64</span>
                                                    </td>
                                                </tr>
                                                <tr height="50">
                                                    <th scope="row"><input type="checkbox"/></th>
                                                    <td data-type="employee">
                                                        <span>ghizlane</span>
                                                    </td>
                                                    <td data-type="distributed">
                                                        <span class="badge badge-primary">25.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">2</span>
                                                    </td>
                                                    <td data-type="reconnect">
                                                        <span class="badge badge-primary">9.38%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">6</span>
                                                    </td>
                                                    <td data-type="doesntAnswer">
                                                        <span class="badge badge-primary">26.56%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">17</span>
                                                    </td>
                                                    <td data-type="canceled">
                                                        <span class="badge badge-primary">10.94%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">7</span>
                                                    </td>
                                                    <td data-type="processing">
                                                        <span class="badge badge-primary">100.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">3</span>
                                                    </td>
                                                    <td data-type="requestAccepted">
                                                        <span class="badge badge-primary">53.13%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">34</span>
                                                    </td>
                                                    <td data-type="requestsTotal">
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">64</span>
                                                    </td>
                                                </tr>
                                                <tr height="50">
                                                    <th scope="row"><input type="checkbox"/></th>
                                                    <td data-type="employee">
                                                        <span>ghizlane</span>
                                                    </td>
                                                    <td data-type="distributed">
                                                        <span class="badge badge-primary">25.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">2</span>
                                                    </td>
                                                    <td data-type="reconnect">
                                                        <span class="badge badge-primary">9.38%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">6</span>
                                                    </td>
                                                    <td data-type="doesntAnswer">
                                                        <span class="badge badge-primary">26.56%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">17</span>
                                                    </td>
                                                    <td data-type="canceled">
                                                        <span class="badge badge-primary">10.94%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">7</span>
                                                    </td>
                                                    <td data-type="processing">
                                                        <span class="badge badge-primary">100.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">3</span>
                                                    </td>
                                                    <td data-type="requestAccepted">
                                                        <span class="badge badge-primary">53.13%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">34</span>
                                                    </td>
                                                    <td data-type="requestsTotal">
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">64</span>
                                                    </td>
                                                </tr>
                                                <tr height="50">
                                                    <th scope="row"><input type="checkbox"/></th>
                                                    <td data-type="employee">
                                                        <span>ghizlane</span>
                                                    </td>
                                                    <td data-type="distributed">
                                                        <span class="badge badge-primary">25.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">2</span>
                                                    </td>
                                                    <td data-type="reconnect">
                                                        <span class="badge badge-primary">9.38%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">6</span>
                                                    </td>
                                                    <td data-type="doesntAnswer">
                                                        <span class="badge badge-primary">26.56%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">17</span>
                                                    </td>
                                                    <td data-type="canceled">
                                                        <span class="badge badge-primary">10.94%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">7</span>
                                                    </td>
                                                    <td data-type="processing">
                                                        <span class="badge badge-primary">100.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">3</span>
                                                    </td>
                                                    <td data-type="requestAccepted">
                                                        <span class="badge badge-primary">53.13%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">34</span>
                                                    </td>
                                                    <td data-type="requestsTotal">
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">64</span>
                                                    </td>
                                                </tr>
                                                <tr height="50">
                                                    <th scope="row"><input type="checkbox"/></th>
                                                    <td data-type="employee">
                                                        <span>ghizlane</span>
                                                    </td>
                                                    <td data-type="distributed">
                                                        <span class="badge badge-primary">25.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">2</span>
                                                    </td>
                                                    <td data-type="reconnect">
                                                        <span class="badge badge-primary">9.38%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">6</span>
                                                    </td>
                                                    <td data-type="doesntAnswer">
                                                        <span class="badge badge-primary">26.56%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">17</span>
                                                    </td>
                                                    <td data-type="canceled">
                                                        <span class="badge badge-primary">10.94%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">7</span>
                                                    </td>
                                                    <td data-type="processing">
                                                        <span class="badge badge-primary">100.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">3</span>
                                                    </td>
                                                    <td data-type="requestAccepted">
                                                        <span class="badge badge-primary">53.13%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">34</span>
                                                    </td>
                                                    <td data-type="requestsTotal">
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">64</span>
                                                    </td>
                                                </tr>
                                                <tr height="50">
                                                    <th scope="row"><input type="checkbox"/></th>
                                                    <td data-type="employee">
                                                        <span>ghizlane</span>
                                                    </td>
                                                    <td data-type="distributed">
                                                        <span class="badge badge-primary">25.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">2</span>
                                                    </td>
                                                    <td data-type="reconnect">
                                                        <span class="badge badge-primary">9.38%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">6</span>
                                                    </td>
                                                    <td data-type="doesntAnswer">
                                                        <span class="badge badge-primary">26.56%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">17</span>
                                                    </td>
                                                    <td data-type="canceled">
                                                        <span class="badge badge-primary">10.94%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">7</span>
                                                    </td>
                                                    <td data-type="processing">
                                                        <span class="badge badge-primary">100.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">3</span>
                                                    </td>
                                                    <td data-type="requestAccepted">
                                                        <span class="badge badge-primary">53.13%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">34</span>
                                                    </td>
                                                    <td data-type="requestsTotal">
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">64</span>
                                                    </td>
                                                </tr>
                                                <tr height="50">
                                                    <th scope="row"><input type="checkbox"/></th>
                                                    <td data-type="employee">
                                                        <span>ghizlane</span>
                                                    </td>
                                                    <td data-type="distributed">
                                                        <span class="badge badge-primary">25.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">2</span>
                                                    </td>
                                                    <td data-type="reconnect">
                                                        <span class="badge badge-primary">9.38%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">6</span>
                                                    </td>
                                                    <td data-type="doesntAnswer">
                                                        <span class="badge badge-primary">26.56%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">17</span>
                                                    </td>
                                                    <td data-type="canceled">
                                                        <span class="badge badge-primary">10.94%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">7</span>
                                                    </td>
                                                    <td data-type="processing">
                                                        <span class="badge badge-primary">100.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">3</span>
                                                    </td>
                                                    <td data-type="requestAccepted">
                                                        <span class="badge badge-primary">53.13%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">34</span>
                                                    </td>
                                                    <td data-type="requestsTotal">
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">64</span>
                                                    </td>
                                                </tr>
                                                <tr height="50">
                                                    <th scope="row"><input type="checkbox"/></th>
                                                    <td data-type="employee">
                                                        <span>ghizlane</span>
                                                    </td>
                                                    <td data-type="distributed">
                                                        <span class="badge badge-primary">25.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">2</span>
                                                    </td>
                                                    <td data-type="reconnect">
                                                        <span class="badge badge-primary">9.38%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">6</span>
                                                    </td>
                                                    <td data-type="doesntAnswer">
                                                        <span class="badge badge-primary">26.56%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">17</span>
                                                    </td>
                                                    <td data-type="canceled">
                                                        <span class="badge badge-primary">10.94%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">7</span>
                                                    </td>
                                                    <td data-type="processing">
                                                        <span class="badge badge-primary">100.00%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">3</span>
                                                    </td>
                                                    <td data-type="requestAccepted">
                                                        <span class="badge badge-primary">53.13%</span>
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">34</span>
                                                    </td>
                                                    <td data-type="requestsTotal">
                                                        <span class="badge badge-flat border border-danger rounded tx-danger font-weight-bold"">64</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade pd-15" id="statsForProviders" role="tabpanel" aria-labelledby="stats-for-providers-tab">
                            Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute laboris nisi. Labore labore veniam irure irure ipsum pariatur mollit magna in cupidatat dolore magna irure esse tempor ad mollit. Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco voluptate nisi commodo ea sit eu.
                        </div>
                        <div class="tab-pane fade pd-15" id="statsForEmployees" role="tabpanel" aria-labelledby="stats-for-employee-tab">
                            Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim cupidatat. Deserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore cillum elit enim. Consequat aliquip incididunt ipsum et minim laborum laborum laborum et cillum labore. Deserunt adipisicing cillum id nulla minim nostrud labore eiusmod et amet. Laboris consequat consequat commodo non ut non aliquip reprehenderit nulla anim occaecat. Sunt sit ullamco reprehenderit irure ea ullamco Lorem aute nostrud magna.
                        </div>
                        <div class="tab-pane fade pd-15" id="productsStats" role="tabpanel" aria-labelledby="products-stats-tab">
                            Products satats goes here
                        </div>
                        <div class="tab-pane fade pd-15" id="otherStats" role="tabpanel" aria-labelledby="other-stats-tab">
                            Other stats goes here
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