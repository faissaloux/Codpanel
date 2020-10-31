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

            label{
                margin-bottom: 2px;
            }
            label > b {
                font-size: 12px;
            }
            .feather-search{
                width: 20px;
                height: 20px;
            }

            .header-right .user-profile-area{
                height: 40px;
            }
            .search-form-panel{
                border: 1px #BBB solid;
                background-color: #FFF;
                padding: 12px;
            }

            .img-cont{
                width: 50px;
                height: 50px;
                overflow: hidden;
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
            
            .sort-container{
                background-color: #2D54EE;
                height: 36px;
                border: none;
                border-radius: 0;
            }
            .sort-dropdown{
                height: 200px;
                width: 230px;
                overflow-y: scroll;
            }
            .polaris-header > span{
                font-size: 14px;
                color: #6D7175;
            }
            .polaris-list{
                list-style: none;
            }
            .Polaris-RadioButton__Input_30ock{
                width: 18px;
                height: 18px;
                cursor: pointer;
                margin-right: .8rem;
            }
            .Polaris-Choice__Label_2vd36{
                font-size: 14px;
            }

            .modal-large {
                max-width: 650px;
            }

            .nav-link{
                background-color: #FFF !important;
            }

            .nav-link.active{
                background-color: #F5F5F5 !important;
            }
            .pagination-select{
                background-color: #2D54EE;
                color: #FFF;
                border: none;
                outline: none;
                height: 36px;
            }
            .btn-container{
                position: relative;
                padding-left: 0;
                cursor: pointer;
            }
            .btn-new-order{
                position: absolute;
                background-color: #221ECC;
                text-indent: 60px;
                color: #FFF !important;
                padding: 10px;
            }
            .limit-container-right, .order-container-right, .show-columns-container{
                background-color: #2D54EE;
                height: 36px;
            }
            .limit-container-right, .order-container-right > span{
                color: #FFF;
            }
            .btn-filter, .btn-reload{
                padding: 5px 8px;
                height: 36px;
                background-color: #2D54EE;
                color: #FFF;
                cursor: pointer;
            }
            .btn-upload{
                position: absolute;
                background-color: #2D54EE;
                text-indent: 60px;
                color: #FFF !important;
                padding: 10px;
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

            .details{
                background: linear-gradient(to right, #8f94fb, #4e54c8);
            }

            .history{
                background: linear-gradient(to right, #ff5e62, #ff9966);
            }

            .edit{
                background: linear-gradient(to right, #4f93b2, #66cfb5);
            }
            .modal-top{
                padding: 10px;
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
        <div class="actions-menu">
            <div class="pl-5 pt-3">
                <div class="d-flex">
                    <div class="d-flex col-2 justify-content-center align-items-center">
                        <div>
                            <span class="col-8">Number of actions:</span>
                            <span class="col-2 actions-number">1</span>
                        </div>
                    </div>
                    <div class="d-flex col-9 justify-content-center align-items-center">
                        <div class="col-6">
                            <div class="d-flex justify-content-around">
                                <span class="action d-flex align-items-center">
                                    <div class="d-flex">
                                        <i class="mdi mdi-upload mr-2"></i>
                                        <a  class="table-top-btn col"
                                                    style="color: white"
                                                    data-toggle="modal"
                                                    data-target="#exportModalCenter">Export</a>
                                    </div>
                                </span>
                                <span class="action d-flex align-items-center">
                                    <div class="d-flex">
                                        <i class="mdi mdi-clipboard-check mr-2"></i>
                                        <span>assign</span>
                                    </div>
                                </span>
                                <span class="dropdown action d-flex align-items-center">
                                    <span   class="dropdown-toggle d-flex align-items-center"
                                            id="dropdownMenuButton"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                        <i class="mdi mdi-backup-restore mr-2"></i>
                                        <span type="button"> Restore </span>
                                    </span>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">
                                            <i class="mdi mdi-content-duplicate mr-2"></i>
                                            Restore from duplicate
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="mdi mdi-delete-variant mr-2"></i>
                                            Restore from trash
                                        </a>
                                    </div>
                                </span>
                                <span class="action action-delete d-flex align-items-center">
                                    <div class="d-flex">
                                        <i class="mdi mdi-delete mr-2"></i>
                                        <span>Delete</span>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex col-1 justify-content-center align-items-center">
                        <i class="mdi mdi-close close-actions-menu"></i>
                    </div>
                </div>
            </div>
        </div>
        <!--================================-->
        <!-- Page Container Start -->
        <!--================================-->
        <div class="page-container">
            <!--================================-->
            <!-- Page Sidebar Start -->
            <!--================================-->
            <?php require_once 'inc/sidebar.php'; ?>
            <!--/ Sidebar Footer End -->
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
                <div class="page-inner mt-4">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a  class="nav-link active"
                                id="all-tab"
                                data-toggle="tab"
                                href="#all"
                                role="tab"
                                aria-controls="all"
                                aria-selected="true">
                                <i class="mdi mdi-home"></i>
                                <span class="col">All</span>
                                <span class="quantity col">42</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link"
                                id="new-tab"
                                data-toggle="tab"   
                                href="#new"
                                role="tab"  
                                aria-controls="new"
                                aria-selected="false">
                                <i class="mdi mdi-hanger"></i>
                                <span class="col">New</span>
                                <span class="quantity col">22</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link"
                                id="canceled-tab"
                                data-toggle="tab"
                                href="#canceled"
                                role="tab"
                                aria-controls="canceled"
                                aria-selected="false">
                                <i class="mdi mdi-close"></i>
                                <span class="col">Canceled</span>
                                <span class="quantity col">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link"
                                id="unanswred-tab"
                                data-toggle="tab"
                                href="#unanswered"
                                role="tab"
                                aria-controls="unanswered"
                                aria-selected="false">
                                <i class="mdi mdi-phone-hangup"></i>
                                <span class="col">unanswered</span>
                                <span class="quantity col">6</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link"
                                id="confirmation-tab"
                                data-toggle="tab"
                                href="#confirmation"
                                role="tab"
                                aria-controls="confirmation"
                                aria-selected="false">
                                <i class="mdi mdi-check"></i>
                                <span class="col">Confirmation</span>
                                <span class="quantity col">10</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link"
                                id="recall-tab"
                                data-toggle="tab"
                                href="#recall"
                                role="tab"
                                aria-controls="recall"
                                aria-selected="false">
                                <i class="mdi mdi-phone-in-talk"></i>
                                <span class="col">Recall</span>
                                <span class="quantity col">8</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active pd-15" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div>
                                <div class="d-flex justify-content-between">
                                    <div class="col-6 pl-0">
                                        <div class="d-flex align-items-center limit-container">
                                            <div class="btn-reload mr-2">
                                                <i class="mdi mdi-reload"></i>
                                            </div>
                                            <div class="btn-filter mr-2">
                                                <i class="mdi mdi-filter-variant"></i>
                                            </div>
                                            <div class="limit-container-right mr-2">
                                                <span class="m-2">Limit:</span>
                                                <select name="" id="" class="p-2 pagination-select">
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                    <option value="150">150</option>
                                                    <option value="200">200</option>
                                                    <option value="300">300</option>
                                                </select>
                                            </div>
                                            <div class="dropdown mr-2">
                                                <button class="btn btn-secondary sort-container d-flex align-items-center"
                                                        type="button"
                                                        id="dropdownMenuButton"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                    <i class="mdi mdi-sort text-white"></i>
                                                    <span class="ml-2">Sort</span>
                                                </button>
                                                <div    class="dropdown-menu sort-dropdown mt-2"
                                                        aria-labelledby="dropdownMenuButton">
                                                    <div class="polaris-header pl-3 pb-2">
                                                        <span>Sort by:</span>
                                                    </div>
                                                    <ul class="Polaris-ChoiceList__Choices_15o76 polaris-list pl-3 mb-0">
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton67">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input id="PolarisRadioButton67" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="title asc" checked="">
                                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">Product title A–Z</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton68">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input id="PolarisRadioButton68" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="title desc">
                                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">Product title Z–A</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton69">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input id="PolarisRadioButton69" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="created_at asc">
                                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">Created (oldest first)</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton70">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input id="PolarisRadioButton70" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="created_at desc">
                                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">Created (newest first)</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton71">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input id="PolarisRadioButton71" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="updated_at asc">
                                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">Updated (oldest first)</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton72">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input id="PolarisRadioButton72" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="updated_at desc">
                                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">Updated (newest first)</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton73">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input id="PolarisRadioButton73" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="inventory_total asc">
                                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">Low inventory</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton74">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input id="PolarisRadioButton74" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="inventory_total desc">
                                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">High inventory</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton75">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input id="PolarisRadioButton75" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="product_type asc">
                                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">Product type A–Z</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton76">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                    <input id="PolarisRadioButton76" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="product_type desc">
                                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">Product type Z–A</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton77">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input id="PolarisRadioButton77" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="vendor asc">
                                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">Vendor A–Z</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton78">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input id="PolarisRadioButton78" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="vendor desc">
                                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">Vendor Z–A</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center btn-container show-columns-container mr-2">
                                                <a  class="table-top-btn col"
                                                    style="color: white"
                                                    data-toggle="modal"
                                                    data-target="#showColumnsModalCenter">Show columns</a>
                                            </div>
                                            <div class="dropdown mr-2">
                                                <a  class="table-top-btn col btn btn-secondary sort-container d-flex align-items-center"
                                                    style="color: white"
                                                    data-toggle="modal"
                                                    data-target="#todayModalCenter">
                                                    <i class="mdi mdi-calendar-today"></i>
                                                    <span class="ml-2">Today</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pr-0">
                                        <div class="d-flex justify-content-end">
                                            <div class="btn-container col-3">
                                                <a class="btn-upload table-top-btn col">Import</a>
                                                <i class="mdi mdi-download table-top-btn-icon"></i>
                                            </div>
                                            <div class="btn-container col-4 ml-2">
                                                <a  class="btn-new-order table-top-btn col"
                                                    data-toggle="modal"
                                                    data-target="#addOrderModalCenter">
                                                    Add order
                                                </a>
                                                <i class="mdi mdi-plus table-top-btn-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="search-form-panel mb-4">
                                <form action="/sinistres/search" id='sinistres-search' method="GET">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="form-group col-md-10">
                                                            <input  type="text"
                                                                    class="form-control"
                                                                    name="q"
                                                                    placeholder="Name or phone or address">
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <button type="submit" class="btn btn-success btn-block">
                                                                <b>Search</b>&nbsp;&nbsp;<i data-feather="search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group ">
                                                                <label for="date">
                                                                    <b>City</b>
                                                                </label>
                                                                <select class="form-control" name="city_selector">
                                                                    <option value="notselected">Aucun</option>
                                                                    <option value="agadir">Agadir</option>
                                                                    <option value="Marrakech">Marrakech</option>
                                                                    <option value="rabat">Rabat</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group ">
                                                                <label >
                                                                    <b>Employee</b>
                                                                </label>
                                                                <select class="form-control" name="employee_selector">
                                                                    <option value="notselected">Aucun</option>
                                                                    <option value="139">bassiri soulaiman</option>
                                                                    <option value="141">abdelilah</option>
                                                                    <option value="143">soulaimane</option>
                                                                    <option value="144">bassiri</option>
                                                                    <option value="145">yassin</option>
                                                                    <option value="146">mustapha</option>
                                                                    <option value="147">youssef</option>
                                                                    <option value="148">az-eddine</option>
                                                                    <option value="149">hicham</option>
                                                                    <option value="150">membre</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group ">
                                                                <label><b>Provider</b></label>
                                                                <select class="form-control" name="provider">
                                                                    <option></option>
                                                                    <option value="Axa assurance maroc">Axa assurance maroc</option>
                                                                    <option value="Allianz">Allianz</option>
                                                                    <option value="Saham assurance">Saham assurance</option>
                                                                    <option value="Sanad">Sanad</option>
                                                                    <option value="Mamda">Mamda</option>
                                                                    <option value="Mcma">Mcma</option>
                                                                    <option value="Matu">Matu</option>
                                                                    <option value="Cat">Cat</option>
                                                                    <option value="Atlanta">Atlanta</option>
                                                                    <option value="wafa assurence">wafa assurence</option>
                                                                    <option value="JUDICIARE">JUDICIARE</option>
                                                                    <option value="CAE">CAE</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="date"><b>Product</b></label>
                                                                <select class="form-control" name="product">
                                                                    <option></option>
                                                                    <option value="Axa assurance maroc">Axa assurance maroc</option>
                                                                    <option value="Allianz">Allianz</option>
                                                                    <option value="Saham assurance">Saham assurance</option>
                                                                    <option value="Sanad">Sanad</option>
                                                                    <option value="Mamda">Mamda</option>
                                                                    <option value="Mcma">Mcma</option>
                                                                    <option value="Matu">Matu</option>
                                                                    <option value="Cat">Cat</option>
                                                                    <option value="Atlanta">Atlanta</option>
                                                                    <option value="wafa assurence">wafa assurence</option>
                                                                    <option value="JUDICIARE">JUDICIARE</option>
                                                                    <option value="CAE">CAE</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="date"><b>Status</b></label>
                                                                <select class="form-control" name="status">
                                                                    <option></option>
                                                                    <option value="Axa assurance maroc">Axa assurance maroc</option>
                                                                    <option value="Allianz">Allianz</option>
                                                                    <option value="Saham assurance">Saham assurance</option>
                                                                    <option value="Sanad">Sanad</option>
                                                                    <option value="Mamda">Mamda</option>
                                                                    <option value="Mcma">Mcma</option>
                                                                    <option value="Matu">Matu</option>
                                                                    <option value="Cat">Cat</option>
                                                                    <option value="Atlanta">Atlanta</option>
                                                                    <option value="wafa assurence">wafa assurence</option>
                                                                    <option value="JUDICIARE">JUDICIARE</option>
                                                                    <option value="CAE">CAE</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group ">
                                                                <label for="date">
                                                                    <b>From</b>
                                                                </label>
                                                                <input  type="date" 
                                                                        class="form-control" 
                                                                        name="from"  
                                                                        placeholder="From" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group ">
                                                                <label for="date">
                                                                    <b>To</b>
                                                                </label>
                                                                <input  type="date" 
                                                                        class="form-control" 
                                                                        name="to"  
                                                                        placeholder="To" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <center>
                                <div class="spinner-border mb-2 text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </center>
                                
                            <div class="card-body pd-0">
                                <table class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input type="checkbox" class="show-actions-menu"/></th>
                                            <th scope="col" data-type="image"></th>
                                            <th scope="col" data-type="requestInfo">معلومات الطلب</th>
                                            <th scope="col" data-type="nameAndPhone">الإسم و رقم الهاتف</th>
                                            <th scope="col" data-type="products">المنتوجات</th>
                                            <th scope="col" data-type="workers">الموظفة و الموزع</th>
                                            <th scope="col" data-type="calls">محاولات الإتصال</th>
                                            <th scope="col">تعديل</th>
                                            <th></th>
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
                                            <td data-type="requestInfo">
                                                <i class="mdi mdi-file"></i>#13<br/>
                                                <i class="mdi mdi-calendar"></i>2020-10-22 20:34:12<br/>
                                                <i class="mdi mdi-tag"></i>قيد المعالجة<br/>
                                            </td>
                                            <td data-type="nameAndPhone">Full name<br/>
                                                <a href="tel: 06########">+212 ########</a>
                                            </td>
                                            <td data-type="products">
                                                <table class="list_products">
                                                    <tbody>
                                                        <tr>
                                                            <td> 1 </td>
                                                            <td> x كيطمات رائعة </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">المجموع : 249 درهم</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td data-type="workers">
                                                <i class="mdi mdi-phone-classic"></i>
                                                name<br/>
                                                <i class="mdi mdi-truck"></i>
                                                name
                                            </td>
                                            <td data-type="calls">
                                                <div class="d-flex justify-content-center">
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                           <label class="custom-control-label" for="customCheck1"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                            <label class="custom-control-label" for="customCheck2"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                            <label class="custom-control-label" for="customCheck3"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                            <label class="custom-control-label" for="customCheck4"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                            <label class="custom-control-label" for="customCheck5"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a type="button" 
                                                    class="btn btn-primary btn-lg border-none loadactions rounded details"
                                                    data-toggle="modal"
                                                    data-target="#exampleModalCenter">
                                                    التفاصيل
                                                </a>
                                                <a type="button"
                                                        class="btn btn-primary btn-lg border-none loadactions rounded history">
                                                    الأحداث
                                                </a>
                                                <a type="button"
                                                        class="btn btn-primary btn-lg border-none loadactions rounded edit">
                                                    تعديل
                                                </a>
                                            </td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href="#"><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                 </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="image">
                                                <div class="img-cont">
                                                    <img    src="assets/images/products/pexels-karolina-grabowska-4040567.jpg"
                                                            alt="product2">
                                                </div>
                                            </td>
                                            <td data-type="requestInfo">
                                                <i class="mdi mdi-file"></i>#13<br/>
                                                <i class="mdi mdi-calendar"></i>2020-10-22 20:34:12<br/>
                                                <i class="mdi mdi-tag"></i>قيد المعالجة<br/>
                                            </td>
                                            <td  data-type="nameAndPhone">Full name<br/>
                                                <a href="tel: 06########">+212 ########</a>
                                            </td>
                                            <td data-type="products">
                                                <table class="list_products">
                                                    <tbody>
                                                        <tr>
                                                            <td> 1 </td>
                                                            <td> x كيطمات رائعة </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">المجموع : 249 درهم</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td data-type="workers">
                                                <i class="mdi mdi-phone-classic"></i>
                                                name<br/>
                                                <i class="mdi mdi-truck"></i>
                                                name
                                            </td>
                                            <td data-type="calls">
                                                <div class="d-flex justify-content-center">
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                           <label class="custom-control-label" for="customCheck6"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                            <label class="custom-control-label" for="customCheck7"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                            <label class="custom-control-label" for="customCheck8"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                            <label class="custom-control-label" for="customCheck9"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                            <label class="custom-control-label" for="customCheck10"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded details"
                                                    data-toggle="modal"
                                                    data-target="#exampleModalCenter">
                                                    التفاصيل
                                                </a>
                                                <a type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded history">
                                                    الأحداث
                                                </a>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded edit">
                                                    تعديل
                                                </a>
                                            </td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href="#"><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                 </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="image">
                                                <div class="img-cont">
                                                    <img    src="assets/images/products/pexels-karolina-grabowska-4040567.jpg"
                                                            alt="product3">
                                                </div>
                                            </td>
                                            <td data-type="requestInfo">
                                                <i class="mdi mdi-file"></i>#13<br/>
                                                <i class="mdi mdi-calendar"></i>2020-10-22 20:34:12<br/>
                                                <i class="mdi mdi-tag"></i>قيد المعالجة<br/>
                                            </td>
                                            <td data-type="nameAndPhone">Full name<br/>
                                                <a href="tel: 06########">+212 ########</a>
                                            </td>
                                            <td data-type="products">
                                                <table class="list_products">
                                                    <tbody>
                                                        <tr>
                                                            <td> 1 </td>
                                                            <td> x كيطمات رائعة </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">المجموع : 249 درهم</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td data-type="workers">
                                                <i class="mdi mdi-phone-classic"></i>
                                                name<br/>
                                                <i class="mdi mdi-truck"></i>
                                                name
                                            </td>
                                            <td data-type="calls">
                                                <div class="d-flex justify-content-center">
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                           <label class="custom-control-label" for="customCheck11"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                            <label class="custom-control-label" for="customCheck12"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                            <label class="custom-control-label" for="customCheck13"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                            <label class="custom-control-label" for="customCheck14"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                            <label class="custom-control-label" for="customCheck15"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded details"
                                                    data-toggle="modal"
                                                    data-target="#exampleModalCenter">
                                                    التفاصيل
                                                </a>
                                                <a type="button" 
                                                    class="btn btn-primary btn-lg border-none loadactions rounded history">
                                                    الأحداث
                                                </a>
                                                <a type="button" 
                                                    class="btn btn-primary btn-lg border-none loadactions rounded edit">
                                                    تعديل
                                                </a>
                                            </td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href="#"><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                 </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="image">
                                                <div class="img-cont">
                                                    <img    src="assets/images/products/pexels-karolina-grabowska-4040567.jpg"
                                                            alt="product4">
                                                </div>
                                            </td>
                                            <td data-type="requestInfo">
                                                <i class="mdi mdi-file"></i>#13<br/>
                                                <i class="mdi mdi-calendar"></i>2020-10-22 20:34:12<br/>
                                                <i class="mdi mdi-tag"></i>قيد المعالجة<br/>
                                            </td>
                                            <td data-type="nameAndPhone">Full name<br/>
                                                <a href="tel: 06########">+212 ########</a>
                                            </td>
                                            <td data-type="products">
                                                <table class="list_products">
                                                    <tbody>
                                                        <tr>
                                                            <td> 1 </td>
                                                            <td> x كيطمات رائعة </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">المجموع : 249 درهم</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td data-type="workers">
                                                <i class="mdi mdi-phone-classic"></i>
                                                name<br/>
                                                <i class="mdi mdi-truck"></i>
                                                name
                                            </td>
                                            <td data-type="calls">
                                                <div class="d-flex justify-content-center">
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck16">
                                                           <label class="custom-control-label" for="customCheck16"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck17">
                                                            <label class="custom-control-label" for="customCheck17"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck18">
                                                            <label class="custom-control-label" for="customCheck18"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck19">
                                                            <label class="custom-control-label" for="customCheck19"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck20">
                                                            <label class="custom-control-label" for="customCheck20"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a type="button"
                                                        class="btn btn-primary btn-lg border-none loadactions rounded details"
                                                        data-toggle="modal"
                                                        data-target="#exampleModalCenter">
                                                    التفاصيل
                                                </a>
                                                <a type="button"
                                                        class="btn btn-primary btn-lg border-none loadactions rounded history">
                                                    الأحداث
                                                </a>
                                                <a type="button"
                                                        class="btn btn-primary btn-lg border-none loadactions rounded edit">
                                                    تعديل
                                                </a>
                                            </td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href="#"><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                 </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="image">
                                                <div class="img-cont">
                                                    <img    src="assets/images/products/pexels-karolina-grabowska-4040567.jpg"
                                                            alt="product5">
                                                </div>
                                            </td>
                                            <td data-type="requestInfo">
                                                <i class="mdi mdi-file"></i>#13<br/>
                                                <i class="mdi mdi-calendar"></i>2020-10-22 20:34:12<br/>
                                                <i class="mdi mdi-tag"></i>قيد المعالجة<br/>
                                            </td>
                                            <td data-type="nameAndPhone">Full name<br/>
                                                <a href="tel: 06########">+212 ########</a>
                                            </td>
                                            <td data-type="products">
                                                <table class="list_products">
                                                    <tbody>
                                                        <tr>
                                                            <td> 1 </td>
                                                            <td> x كيطمات رائعة </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">المجموع : 249 درهم</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td data-type="workers">
                                                <i class="mdi mdi-phone-classic"></i>
                                                name<br/>
                                                <i class="mdi mdi-truck"></i>
                                                name
                                            </td>
                                            <td data-type="calls">
                                                <div class="d-flex justify-content-center">
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck21">
                                                           <label class="custom-control-label" for="customCheck21"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck22">
                                                            <label class="custom-control-label" for="customCheck22"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck23">
                                                            <label class="custom-control-label" for="customCheck23"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck24">
                                                            <label class="custom-control-label" for="customCheck24"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck25">
                                                            <label class="custom-control-label" for="customCheck25"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a type="button"
                                                        class="btn btn-primary btn-lg border-none loadactions rounded details"
                                                        data-toggle="modal"
                                                        data-target="#exampleModalCenter">
                                                    التفاصيل
                                                </a>
                                                <a type="button"
                                                        class="btn btn-primary btn-lg border-none loadactions rounded history">
                                                    الأحداث
                                                </a>
                                                <a type="button"
                                                        class="btn btn-primary btn-lg border-none loadactions rounded edit">
                                                    تعديل
                                                </a>
                                            </td>
                                            <td>
                                                <div class="dropdown" data-toggle="dropdown">
                                                    <a href="#"><i class="ti-more-alt"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i data-feather="info" class="wd-16 mr-2"></i>View Details</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="share" class="wd-16 mr-2"></i>Share</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="download" class="wd-16 mr-2"></i>Download</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="copy" class="wd-16 mr-2"></i>Copy to</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="folder" class="wd-16 mr-2"></i>Move to</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="edit" class="wd-16 mr-2"></i>Rename</a>
                                                        <a href="#" class="dropdown-item"><i data-feather="trash" class="wd-16 mr-2"></i>Delete</a>
                                                    </div>
                                                 </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                  <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                  </li>
                                </ul>
                            </nav>

                        </div>
                        <div class="tab-pane fade pd-15" id="new" role="tabpanel" aria-labelledby="new-tab">
                            Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute laboris nisi. Labore labore veniam irure irure ipsum pariatur mollit magna in cupidatat dolore magna irure esse tempor ad mollit. Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco voluptate nisi commodo ea sit eu.
                        </div>
                        <div class="tab-pane fade pd-15" id="canceled" role="tabpanel" aria-labelledby="canceled-tab">
                            Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim cupidatat. Deserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore cillum elit enim. Consequat aliquip incididunt ipsum et minim laborum laborum laborum et cillum labore. Deserunt adipisicing cillum id nulla minim nostrud labore eiusmod et amet. Laboris consequat consequat commodo non ut non aliquip reprehenderit nulla anim occaecat. Sunt sit ullamco reprehenderit irure ea ullamco Lorem aute nostrud magna.
                        </div>
                        <div class="tab-pane fade pd-15" id="unanswered" role="tabpanel" aria-labelledby="unanswered-tab">
                            Unanswered goes here
                        </div>
                        <div class="tab-pane fade pd-15" id="confirmation" role="tabpanel" aria-labelledby="confirmation-tab">
                            Confirmation goes here
                        </div>
                        <div class="tab-pane fade pd-15" id="recall" role="tabpanel" aria-labelledby="recall-tab">
                            Recall goes here
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
        <!-- Modal Start -->
        <!--================================-->
        <div    class="modal fade"
                id="exampleModalCenter"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
            <div    class="modal-dialog modal-dialog-centered"
                    role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">معلومات العميل</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body d-flex flex-column">
                    <div class="modal-cont modal-top mb-3 float-right">
                        <div class="d-flex flex-column">
                            <p class="row">
                                <span class="col text-right">Name</span>
                                <span class="col-3 text-right">اسم العميل</span>
                            </p>
                            <p class="row">
                                <span class="col text-right">+212652145896</span>
                                <span class="col-3 text-right">رقم الهاتف</span>
                            </p>
                            <p class="row">
                                <span class="col text-right">Agadir Bay</span>
                                <span class="col-3 text-right">العنوان</span>
                            </p>
                            <p class="row">
                                <span class="col text-right">Agadir</span>
                                <span class="col-3 text-right">المدينة</span>
                            </p>
                            <p class="row">
                                <span class="col text-right">Store</span>
                                <span class="col-3 text-right">المصدر</span>
                            </p>
                            <p class="row">
                                <span class="col text-right">Kit Voiture X6</span>
                                <span class="col-3 text-right">المنتوج</span>
                            </p>
                            <p class="row">
                                <span class="col text-right">1</span>
                                <span class="col-3 text-right">الكمية</span>
                            </p>
                            <p class="row">
                                <span class="col text-right">199.99 درهم</span>
                                <span class="col-3 text-right">الثمن</span>
                            </p>
                            <p class="row">
                                <span class="col"></span>
                                <span class="col text-right">الملاحظة</span>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center float-right">
                        <div class="col-md-12 col-lg-12 text-right">
                            <div class="card mg-b-30">
                                <div class="card-body pd-0">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>الثمن</th>
                                                <th>الكمية</th>
                                                <th>المنتوج</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>199.99</td>
                                                <td>1</td>
                                                <td>Kit Voiture X6</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-around">
                    <button type="button" class="btn btn-primary rounded">لا يجيب</button>
                    <button type="button" class="btn btn-primary rounded">إعادة الإتصال</button>
                    <button type="button" class="btn btn-primary rounded">ملغى</button>
                    <button type="button" class="btn btn-primary rounded">قبول الطلب</button>
                    <button type="button" class="btn btn-primary rounded">تعديل</button>
                    <button type="button" class="btn btn-primary rounded">حذف</button>
                </div>
                </div>
            </div>
        </div>
        <!--/ Modal End -->

        <!--================================-->
        <!-- Add new order modal Start -->
        <!--================================-->
        <div    class="modal fade"
                id="addOrderModalCenter"
                tabindex="-1"
                role="dialog"
                aria-labelledby="addOrderModalCenterTitle"
                aria-hidden="true">
            <div    class="modal-dialog modal-dialog-centered"
                    role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addOrderModalCenterTitle">Add new product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body d-flex flex-column">
                        <div class="modal-cont modal-top mb-3 float-right">
                            <div class="d-flex flex-column">
                                <div class="row">
                                    <div>
                                        <div>
                                            <div class="panel-heading">
                                                <h4 class="tx-right">معلومات الزبون</h4> <hr>
                                            </div>
                                            <div class="panel-body">
                                                <input type="hidden" name="mowadafaID" value=''>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6 p-0">
                                                                <div class="form-group col-md-12">
                                                                    <input type="text" class="form-control"  name="name" placeholder="الإسم الكامل للزبون" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 p-0">
                                                            <div class="form-group col-md-12">
                                                                <input type="text" class="form-control frequired" name="adress" placeholder="العنوان" required>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-md-6 p-0">
                                                                <div class="form-group col-md-12">
                                                                    <input type="number" class="form-control frequired" name="tel" id="tel" maxlength="10" placeholder="رقم الهاتف" required>
                                                                </div>
                                                            </div>  
                                                            
                                                            <div class="col-md-6 p-0">
                                                                <div class="form-group col-md-12">
                                                                    <select class="form-control frequired" name="cityID" placeholder="السلعة">
                                                                        <option value='N-A'>اختيار المدينة</option>
                                                                                    <option value="29">agadir</option>
                                                                                    <option value="30">marakech</option>
                                                                                    <option value="31">casablanca</option>
                                                                                    <option value="32">dakhla</option>
                                                                                    <option value="33">Fes</option>
                                                                                    <option value="34">النواحي</option>
                                                                                    <option value="35">Tanger</option>
                                                                                    <option value="36">Rabat</option>
                                                                                    <option value="37">Guelmim</option>
                                                                                    <option value="38">Afourar</option>
                                                                                    <option value="39">Ahfir</option>
                                                                                    <option value="40">Ain El Aouda</option>
                                                                                    <option value="41">Ain Harrouda</option>
                                                                                    <option value="42">Ajdir</option>
                                                                                    <option value="43">Al Aroui</option>
                                                                                    <option value="44">Assilah</option>
                                                                                    <option value="45">Azemmour</option>
                                                                                    <option value="46">Azilal</option>
                                                                                    <option value="47">BELAAGUID</option>
                                                                                    <option value="48">Belfaa</option>
                                                                                    <option value="49">Ben Ahmed</option>
                                                                                    <option value="50">Beni ensar</option>
                                                                                    <option value="51">Béni Mellal</option>
                                                                                    <option value="52">Berkane</option>
                                                                                    <option value="53">Berrechid</option>
                                                                                    <option value="54">Bir Jdid</option>
                                                                                    <option value="55">Bni Bouayach</option>
                                                                                    <option value="56">Bni Drar</option>
                                                                                    <option value="57">Boufakrane</option>
                                                                                    <option value="58">Bouskoura</option>
                                                                                    <option value="59">Cafémaure</option>
                                                                                    <option value="60">Chefchaouen</option>
                                                                                    <option value="61">Dar bouazza</option>
                                                                                    <option value="62">Deroua</option>
                                                                                    <option value="63">El Hajeb</option>
                                                                                    <option value="64">El Jadida</option>
                                                                                    <option value="65">El Ksiba</option>
                                                                                    <option value="66">El Mansouria</option>
                                                                                    <option value="67">Essaouira</option>
                                                                                    <option value="68">Errachidia</option>
                                                                                    <option value="69">Fnideq</option>
                                                                                    <option value="70">Fquih Ben Salah</option>
                                                                                    <option value="71">had soualem</option>
                                                                                    <option value="72">Imzouren</option>
                                                                                    <option value="73">Jorf Lasfar</option>
                                                                                    <option value="74">Kasba Tadla</option>
                                                                                    <option value="75">Khemis Zemamra</option>
                                                                                    <option value="76">Khémisset</option>
                                                                                    <option value="77">Khénifra</option>
                                                                                    <option value="78">Khouribga</option>
                                                                                    <option value="79">Ksar Sghir</option>
                                                                                    <option value="80">Laayoune</option>
                                                                                    <option value="81">Lakhyayeta</option>
                                                                                    <option value="82">Loudaya</option>
                                                                                    <option value="83">M&#039;diq</option>
                                                                                    <option value="84">M&#039;rirt</option>
                                                                                    <option value="85">Martil</option>
                                                                                    <option value="86">Mediouna</option>
                                                                                    <option value="87">Mehdia</option>
                                                                                    <option value="88">Meknes</option>
                                                                                    <option value="89">Mohammadia</option>
                                                                                    <option value="90">Moulay Abdellah Amghar</option>
                                                                                    <option value="91">Nador</option>
                                                                                    <option value="92">Nouasser</option>
                                                                                    <option value="93">Ouarzazate</option>
                                                                                    <option value="94">Ouazzane</option>
                                                                                    <option value="95">Oued Laou</option>
                                                                                    <option value="96">Oued Zem</option>
                                                                                    <option value="97">Oujda</option>
                                                                                    <option value="98">Oulad Ayad</option>
                                                                                    <option value="99">Oulad Hassoun</option>
                                                                                    <option value="100">Oulad moussa</option>
                                                                                    <option value="101">Ourika</option>
                                                                                    <option value="102">Ras El Ma</option>
                                                                                    <option value="103">Sabaa Aiyoun</option>
                                                                                    <option value="104">Safi</option>
                                                                                    <option value="105">Sebt Gezoula</option>
                                                                                    <option value="106">Segangan</option>
                                                                                    <option value="107">Selouane</option>
                                                                                    <option value="108">Settat</option>
                                                                                    <option value="109">Sidi Bennour</option>
                                                                                    <option value="110">Sidi Bibi</option>
                                                                                    <option value="111">Sidi Bou Othmane</option>
                                                                                    <option value="112">Sidi Bouknadel</option>
                                                                                    <option value="113">Sidi Bouzid</option>
                                                                                    <option value="114">Sidi Kacem</option>
                                                                                    <option value="115">Sidi Rehal</option>
                                                                                    <option value="116">Sidi Slimane</option>
                                                                                    <option value="117">Sidi Taibi</option>
                                                                                    <option value="118">Sidi Zouine</option>
                                                                                    <option value="119">Souihla</option>
                                                                                    <option value="120">Souk Sebt Oulad Nemma</option>
                                                                                    <option value="121">Tahanaout</option>
                                                                                    <option value="122">Tamansourt</option>
                                                                                    <option value="123">Tameslouht</option>
                                                                                    <option value="124">Tamesna</option>
                                                                                    <option value="125">Targuist</option>
                                                                                    <option value="126">Taza</option>
                                                                                    <option value="127">Tetouan</option>
                                                                                    <option value="128">Tiflet</option>
                                                                                    <option value="129">Tit Mellil</option>
                                                                                    <option value="130">T</option>
                                                                                    <option value="131">Youssoufia</option>
                                                                                    <option value="132">Taghazout</option>
                                                                                    <option value="133">Sale</option>
                                                                                    <option value="134">Temara</option>
                                                                                    <option value="135">Al Hoceima</option>
                                                                                    <option value="136">Demnate</option>
                                                                                    <option value="137">Guercif</option>
                                                                                    <option value="138">l</option>
                                                                                    <option value="139">Knitra</option>
                                                                                    <option value="140">Taroudant</option>
                                                                                    <option value="141">Tiznit</option>
                                                                                    <option value="142">larache</option>
                                                                                    <option value="143">Azrou</option>
                                                                                    <option value="144">Aït Ourir</option>
                                                                                    <option value="145">El Kelaâ des Sraghna</option>
                                                                                    <option value="146">Lâattaouia</option>
                                                                                    <option value="147">Bejâad</option>
                                                                                    <option value="148">jamâat Shaim</option>
                                                                                    <option value="149">Ifrane</option>
                                                                                    <option value="150">Moulay Idriss Zerhoun</option>
                                                                                    <option value="151">ksar El kébir</option>
                                                                                    <option value="152">saidia</option>
                                                                                    <option value="153">Tahla</option>
                                                                                    <option value="154">TIZ</option>
                                                                                    <option value="155">Echemmaia</option>
                                                                                    <option value="156">Ounagha</option>
                                                                                    <option value="157">Smimou</option>
                                                                                    <option value="158">Tamanar</option>
                                                                                    <option value="159">Talmest</option>
                                                                                    <option value="160">El Guerdane</option>
                                                                                    <option value="161">Tin Mansour</option>
                                                                                    <option value="162">sidi smail</option>
                                                                                    <option value="163">Goulmima</option>
                                                                                    <option value="164">Tinghir</option>
                                                                                    <option value="165">Aoufous</option>
                                                                                    <option value="166">Rissani</option>
                                                                                    <option value="167">Er-Rich</option>
                                                                                    <option value="168">Midelt</option>
                                                                                    <option value="169">Tinejdad</option>
                                                                                    <option value="170">Arfoud</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="col-md-6 p-0">
                                                                <div class="form-group col-md-12">
                                                                    <select class="form-control frequired" id='choseEmployee' name="employee" placeholder="الموظفة">
                                                                        <option value='N-A'>اختيار الموظفة</option>
                                                                        <option value="142">ghizlane</option>
                                                                        <option value="143">ibtissam</option>
                                                                        <option value="144">horszone</option>
                                                                        <option value="145">jihan</option>
                                                                        <option value="146">pasconfirmé</option>
                                                                        <option value="147">hanane</option>
                                                                        <option value="157">elmokrara</option>
                                                                        <option value="10003">produis</option>
                                                                        <option value="10004">Soumia</option>
                                                                        <option value="10005">meriem</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                                
                                                            <div class="col-md-6 p-0"  >
                                                                <div class="form-group col-md-12">
                                                                    <input type="number"  class="form-control frequired" name="prix_de_laivraison" id="prix_de_laivraison" placeholder="ثمن الإرسال بالدرهم - أرقام فقط" required="">
                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <div class="panel mg-t-45 mg-b-25 panel-flat">
                                            <div class="panel-heading">
                                                <h4 class="tx-right">المنتجات</h4>
                                                <hr>
                                            </div>
                                            <div class="panel-body">
                                                <fieldset class="content-group productsList">
                                                    <div class="row col productsTosale">
                                                        <div class="col-md-4 p-0">
                                                            <div class="form-group col-md-12">
                                                                <div class="product-q">
                                                                    <select class="form-control frequired" name="ProductID[]" placeholder="السلعة">
                                                                        <option>اختيار المنتوج</option>
                                                                        <option value="28">المفرمة الكهربائية صنع الماني</option>
                                                                        <option value="29">جهاز للقضاء على الناموس وغيرها من الحشرات</option>
                                                                        <option value="30">رشاش دوش بمميزات عجيبة</option>
                                                                        <option value="31">مكبر الشاشة تلاثي الابعاد</option>
                                                                        <option value="32">محفظة حاملةالبطاقات الذكية</option>
                                                                        <option value="33">ستائر تناسب كل سيارات</option>
                                                                        <option value="34">جهاز الملفوف</option>
                                                                        <option value="35">آلة صنع الحلويات</option>
                                                                        <option value="36">آلة الخياطة اليدوية المحمولة</option>
                                                                        <option value="37">جهاز تحويل الهاتف الى التلفاز</option>
                                                                        <option value="39">شريط لاصق لتثبيت مختلف الأغراض</option>
                                                                        <option value="40">المخدة الطبية للاطفال</option>
                                                                        <option value="41">غطاء ألمنيوم لحماية داخل السيارة</option>
                                                                        <option value="42">فرشاة تنظيف النوافذ المغناطيسية</option>
                                                                        <option value="43">مكواة الملابس بالبخار الأزرق</option>
                                                                        <option value="44">ماكينة صنع الايس كريم من الفواكه</option>
                                                                        <option value="45">‫آلة البانيني الإيطالية</option>
                                                                        <option value="46">أداة توفير المساحة في المنزل Magic house</option>
                                                                        <option value="47">طحانة التوابل و القهوة</option>
                                                                        <option value="48">القفزات</option>
                                                                        <option value="49">مصباح كاميرا</option>
                                                                        <option value="50">مشط حراري لتسريح اللحية و الشعر</option>
                                                                        <option value="51">أداة التقطيع متعددة الوظائف القابلة للطي</option>
                                                                        <option value="52">موزع ورق مطبخ 3 في 1</option>
                                                                        <option value="55">لعبة تعليمية مبتكرة</option>
                                                                        <option value="56">سخان الأكل المحمول</option>
                                                                        <option value="58">فيلتر لتصفية الماء</option>
                                                                        <option value="60">مسدس رش الماء الخارق</option>
                                                                        <option value="64">أداة توفير المساحة في المنزل INOX</option>
                                                                        <option value="65">جهاز شفط قوي لإزالة قمل الرأس</option>
                                                                        <option value="66">المصباح الرومانسي الدائري</option>
                                                                        <option value="67">القاطعة المتعددة الوظائف</option>
                                                                        <option value="68">مناديل مبللة لتنظيف الاحذية</option>
                                                                        <option value="69">منتج REACT® Reflex Ball​</option>
                                                                        <option value="70">المفرمة الكهربائية اينوكس 4 شفرات</option>
                                                                        <option value="71">خرطوم الماء قابل للتمدد 15 metre</option>
                                                                        <option value="72">ملصق للمطبخ من الألومنيوم الدهبي</option>
                                                                        <option value="73">LED Strip 5 Mètres الشريط الضوئي</option>
                                                                        <option value="74">ساعة fashion</option>
                                                                        <option value="75">نظارات 6 في 1 للسياقه الليلية و الشمسيه</option>
                                                                        <option value="76">فرشاة طلاء 6 خصائص في فرشة واحدة</option>
                                                                        <option value="77">مقلات دو واجهتين الأصلية و المتعددة الإستعمالات</option>
                                                                        <option value="78">revo flex</option>
                                                                        <option value="80">نظارات الرؤية الليلية و النهارية لقيادة السيارات</option>
                                                                        <option value="81">موزع الصابون والمعقمات الأوتوماتيكي</option>
                                                                        <option value="82">الخلاط الخارق المقاوم للكسر إنوكس</option>
                                                                        <option value="83">فرامة اللحم الكهربائية</option>
                                                                        <option value="84">مقعد الأطفال الآمن داخل السيارة</option>
                                                                        <option value="85">ملصق للمطبخ من الألومنيوم color grey</option>
                                                                        <option value="86">مكواة الملابس بالبخار الأحمر</option>
                                                                        <option value="87">صحن زجاج قابل للحرارة وتركي مع الغطاء</option>
                                                                        <option value="88">منتج ترتيب الأحذية القابل للطي</option>
                                                                        <option value="89">آلة لتحضير الفشار بدون زيت صحية</option>
                                                                        <option value="90">Subaru Shampoing: سوبارو شامبو لشعر اسود داكن واخفاء الشيب</option>
                                                                        <option value="91">المشواة العائلية القابلة للطي</option>
                                                                        <option value="92">ساعة الأصلية و المقاومة للماء NIBOSI NOIR</option>
                                                                        <option value="93">ساعة الأصلية و المقاومة للماء NIBOSI DHBI</option>
                                                                        <option value="94">اغطية من السيليكون - 6 قطع</option>
                                                                        <option value="95">ساعة صيفية رائعة Montblanc</option>
                                                                        <option value="96">spin duster فرشاة الغبار</option>
                                                                        <option value="97">SOLO آلة حلاقة</option>
                                                                        <option value="98">منظف ​​بخاخ الرغوة متعدد الوظائف</option>
                                                                        <option value="99">منظف مبتكر متعدد الأغراض</option>
                                                                        <option value="100">آخــر صــيـحـات القبعة والمـعـطـف السـاخــن NOIR</option>
                                                                        <option value="101">آخــر صــيـحـات القبعة والمـعـطـف السـاخــن GRIS</option>
                                                                        <option value="102">آخــر صــيـحـات القبعة والمـعـطـف السـاخــن BLEU</option>
                                                                        <option value="103">Ma9la bghrir</option>
                                                                        <option value="104">Kit GHALIYA</option>
                                                                        <option value="105">mkhda</option>
                                                                        <option value="106">3ala9 papier cuisine</option>
                                                                        <option value="107">ساعة Patec gris</option>
                                                                        <option value="108">ساعة Patec Noir</option>
                                                                        <option value="109">atomic zaper</option>
                                                                        <option value="110">Mondif Tomobil</option>
                                                                        <option value="111">Mondif Kozina</option>
                                                                        <option value="112">ROZIA آلة حلاقة</option>
                                                                        <option value="113">Chargeur tomobil</option>
                                                                        <option value="114">Egg biol</option>
                                                                        <option value="115">Papier gris</option>
                                                                        <option value="116">Papier dhbi</option>
                                                                        <option value="117">Zit lahya</option>
                                                                        <option value="118">Pile</option>
                                                                        <option value="119">Magana Omega</option>
                                                                        <option value="120">Pawerbank</option>
                                                                        <option value="121">magana montblanc</option>
                                                                        <option value="122">9ta3a 9dima blanc</option>
                                                                        <option value="123">منضم الأحذية</option>
                                                                        <option value="124">Nacer dacer</option>
                                                                        <option value="125">white light asnan</option>
                                                                        <option value="126">hachoir plastic</option>
                                                                        <option value="127">Tandeur</option>
                                                                        <option value="128">آخــر صــيـحـات القبعة والكاشكول السـاخــن</option>
                                                                        <option value="129">Kit Voiture X5</option>
                                                                        <option value="131">قطاعة بطاطس مقلية Coupe-frites</option>
                                                                        <option value="132">الغلاية الكهربائية من ELITE</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                
                                                        </div>
                                                        <div class="col-md-4 p-0">
                                                            <div class="form-group col-md-12">
                                                                <input type="number" class="form-control frequired" name="prix[]" placeholder="سعر البيع" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 p-0">
                                                            <div class="form-group col-md-12">
                                                                <input type="number" name="quantity[]" class="form-control frequired" id="produit" placeholder="الكمية" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1 p-0">
                                                            <a id="addmoreproducts" href="javascript:;" class="btn btn-primary">+</a>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-block">اضافة البيانات</button>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Add new order modal End -->

        <!--================================-->
        <!-- Show columns modal Start -->
        <!--================================-->
        <div    class="modal fade"
                id="showColumnsModalCenter"
                tabindex="-1"
                role="dialog"
                aria-labelledby="showColumnsModalCenterTitle"
                aria-hidden="true">
            <div    class="modal-dialog modal-dialog-centered"
                    role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="showColumnsModalCenterTitle">Show columns</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body d-flex flex-column">
                        <div class="float-right">
                            <div class="mr-4 d-flex flex-column">
                                <p class="row">
                                    <span class="col text-right">معلومات الطلب</span>
                                    <span class="col-1 text-right"><input type="checkbox"/></span>
                                </p>
                                <p class="row">
                                    <span class="col text-right">الإسم و رقم الهاتف</span>
                                    <span class="col-1 text-right"><input type="checkbox"/></span>
                                </p>
                                <p class="row">
                                    <span class="col text-right">المنتوجات</span>
                                    <span class="col-1 text-right"><input type="checkbox"/></span>
                                </p>
                                <p class="row">
                                    <span class="col text-right">الموظفة و الموزع</span>
                                    <span class="col-1 text-right"><input type="checkbox"/></span>
                                </p>
                                <p class="row">
                                    <span class="col text-right">محاولات الإتصال</span>
                                    <span class="col-1 text-right"><input type="checkbox"/></span>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="row col">
                                    <button type="submit" class="btn btn-success btn-block">Show columns</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Show columns modal End -->

        <!--================================-->
        <!-- Export modal Start -->
        <!--================================-->
        <div    class="modal fade"
                id="exportModalCenter"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exportModalCenterTitle"
                aria-hidden="true">
            <div    class="modal-dialog modal-dialog-centered modal-large"
                    role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exportModalCenterTitle">Export products</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body d-flex flex-column">
                        <div class="float-right">
                            <div class="d-flex flex-column p-2">
                                <p>
                                    This CSV file can update all product information except for inventory quantities. To update inventory quantities at multiple locations, use the CSV file for inventory or the bulk editor.
                                </p>
                                <div class="d-flex flex-column mb-3">
                                    <p class="row mb-2">
                                        <span class="col">Export</span>
                                    </p>
                                    <ul class="polaris-list pl-0 mb-0">
                                        <li>
                                            <label class="Polaris-Choice_j5gzq d-flex" for="PolarisRadioButton67">
                                                <span class="Polaris-Choice__Control_1u8vs">
                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                        <input id="PolarisRadioButton67" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="title asc" checked="">
                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                    </span>
                                                </span>
                                                <span class="Polaris-Choice__Label_2vd36">Current page</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="Polaris-Choice_j5gzq d-flex" for="PolarisRadioButton68">
                                                <span class="Polaris-Choice__Control_1u8vs">
                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                        <input id="PolarisRadioButton68" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="title desc">
                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                    </span>
                                                </span>
                                                <span class="Polaris-Choice__Label_2vd36">All products</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="Polaris-Choice_j5gzq d-flex" for="PolarisRadioButton69">
                                                <span class="Polaris-Choice__Control_1u8vs">
                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                        <input id="PolarisRadioButton69" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="created_at asc">
                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                    </span>
                                                </span>
                                                <span class="Polaris-Choice__Label_2vd36">Selected: 0 products</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="Polaris-Choice_j5gzq d-flex" for="PolarisRadioButton70">
                                                <span class="Polaris-Choice__Control_1u8vs">
                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                        <input id="PolarisRadioButton70" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="created_at desc">
                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                    </span>
                                                </span>
                                                <span class="Polaris-Choice__Label_2vd36">18 products matching your search</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="row mb-2">
                                        <span class="col">Export as</span>
                                    </p>
                                    <ul class="polaris-list pl-0 mb-0">
                                        <li>
                                            <label class="Polaris-Choice_j5gzq d-flex" for="PolarisRadioButton67">
                                                <span class="Polaris-Choice__Control_1u8vs">
                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                        <input id="PolarisRadioButton67" name="PolarisChoiceList7" type="radio" class="Polaris-RadioButton__Input_30ock" value="title asc" checked="">
                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                    </span>
                                                </span>
                                                <span class="Polaris-Choice__Label_2vd36">CSV for Excel, Numbers, or other spreadsheet programs</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="Polaris-Choice_j5gzq d-flex" for="PolarisRadioButton68">
                                                <span class="Polaris-Choice__Control_1u8vs">
                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                        <input id="PolarisRadioButton68" name="PolarisChoiceList7" type="radio" class="Polaris-RadioButton__Input_30ock" value="title desc">
                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                    </span>
                                                </span>
                                                <span class="Polaris-Choice__Label_2vd36">Plain CSV file</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start">
                        <span>Learn more about <a href="">exporting products</a>.</span>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-success">Export products</button>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Export modal End -->

        <!--================================-->
        <!-- Today modal Start -->
        <!--================================-->
        <div    class="modal fade"
                id="todayModalCenter"
                tabindex="-1"
                role="dialog"
                aria-labelledby="todayModalCenterTitle"
                aria-hidden="true">
            <div    class="modal-dialog modal-dialog-centered modal-large"
                    role="document">
                <div class="modal-content">
                    <div class="pb-2">
                        <div class="form-group col-12">
                            <label for="date">
                                <b>Date range</b>
                            </label>
                            <select class="custom-select">
                                <option value="Today">Today</option>
                                <option value="Yesterday">Yesterday</option>
                                <option value="Last 7 days">Last 7 days</option>
                                <option value="Last 30 days">Last 30 days</option>
                                <option value="Last 90 days">Last 90 days</option>
                                <option value="Last month">Last month</option>
                                <option value="Last year">Last year</option>
                                <option value="Week to date">Week to date</option>
                                <option value="Month to date">Month to date</option>
                                <option value="Quarter to date">Quarter to date</option>
                                <option value="Year to date">Year to date</option>
                                <option value="3rd Quarter (2020)">3rd Quarter (2020)</option>
                                <option value="2nd Quarter (2020)">2nd Quarter (2020)</option>
                                <option value="1st Quarter (2020)">1st Quarter (2020)</option>
                                <option value="4th Quarter (2019)">4th Quarter (2019)</option>
                            </select>
                        </div>
                        <div class="form-group d-flex">
                            <div class="form-group col">
                                <label for="date">
                                    <b>Starting</b>
                                </label>
                                <input type="text" class="form-control" placeholder="Start at">
                            </div>
                            <div class="form-group col">
                                <label for="date">
                                    <b>Ending</b>
                                </label>
                                <input type="text" class="form-control" placeholder="End at">
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <div    id="ui-datepicker-div"
                                    class="d-flex ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-datepicker-multi-2 ui-datepicker-multi d-flex justify-content-center"
                                    style="width: 34em; display: block;">
                                <div class="ui-datepicker-group ui-datepicker-group-first">
                                   <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-left">
                                      <a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a>
                                      <div class="ui-datepicker-title"><span class="ui-datepicker-month">October</span>&nbsp;<span class="ui-datepicker-year">2020</span></div>
                                   </div>
                                   <table class="ui-datepicker-calendar">
                                      <thead>
                                         <tr>
                                            <th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th>
                                            <th scope="col"><span title="Monday">Mo</span></th>
                                            <th scope="col"><span title="Tuesday">Tu</span></th>
                                            <th scope="col"><span title="Wednesday">We</span></th>
                                            <th scope="col"><span title="Thursday">Th</span></th>
                                            <th scope="col"><span title="Friday">Fr</span></th>
                                            <th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th>
                                         </tr>
                                      </thead>
                                      <tbody>
                                         <tr>
                                            <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">1</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">2</a></td>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">3</a></td>
                                         </tr>
                                         <tr>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">4</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">5</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">6</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">7</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">8</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">9</a></td>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">10</a></td>
                                         </tr>
                                         <tr>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">11</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">12</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">13</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">14</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">15</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">16</a></td>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">17</a></td>
                                         </tr>
                                         <tr>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">18</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">19</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">20</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">21</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">22</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">23</a></td>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">24</a></td>
                                         </tr>
                                         <tr>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">25</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">26</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">27</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">28</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">29</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default" href="#">30</a></td>
                                            <td class=" ui-datepicker-week-end ui-datepicker-days-cell-over  ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="9" data-year="2020"><a class="ui-state-default ui-state-highlight ui-state-hover" href="#">31</a></td>
                                         </tr>
                                      </tbody>
                                   </table>
                                </div>
                                <div class="ui-datepicker-group ui-datepicker-group-last">
                                   <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-right">
                                      <a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a>
                                      <div class="ui-datepicker-title"><span class="ui-datepicker-month">November</span>&nbsp;<span class="ui-datepicker-year">2020</span></div>
                                   </div>
                                   <table class="ui-datepicker-calendar">
                                      <thead>
                                         <tr>
                                            <th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th>
                                            <th scope="col"><span title="Monday">Mo</span></th>
                                            <th scope="col"><span title="Tuesday">Tu</span></th>
                                            <th scope="col"><span title="Wednesday">We</span></th>
                                            <th scope="col"><span title="Thursday">Th</span></th>
                                            <th scope="col"><span title="Friday">Fr</span></th>
                                            <th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th>
                                         </tr>
                                      </thead>
                                      <tbody>
                                         <tr>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">1</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">2</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">3</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">4</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">5</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">6</a></td>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">7</a></td>
                                         </tr>
                                         <tr>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">8</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">9</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">10</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">11</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">12</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">13</a></td>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">14</a></td>
                                         </tr>
                                         <tr>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">15</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">16</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">17</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">18</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">19</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">20</a></td>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">21</a></td>
                                         </tr>
                                         <tr>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">22</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">23</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">24</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">25</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">26</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">27</a></td>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">28</a></td>
                                         </tr>
                                         <tr>
                                            <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">29</a></td>
                                            <td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2020"><a class="ui-state-default" href="#">30</a></td>
                                            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                            <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                            <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                         </tr>
                                      </tbody>
                                   </table>
                                </div>
                                <div class="ui-datepicker-row-break"></div>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck30">
                                <label class="custom-control-label" for="customCheck30">Compare to previous dates</label>
                             </div>
                        </div>
                        <div class="form-group col-12">
                            <label for="date">
                                <b>Compare to</b>
                            </label>
                            <select class="custom-select">
                                <option value="Previous period">Previous period</option>
                                <option value="Previous year">Previous year</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">Cancel</span>
                        </button>
                        <button type="submit" class="btn btn-success">Apply</button>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Today modal End -->


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
                const searchForm = $(".search-form-panel");
                
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

                $(".btn-filter").click(()=>{
                    searchForm.css("display") == "block"
                        ? searchForm.slideUp(400)
                        : searchForm.slideDown(200)
                })
            })
        </script>
    </body>

</html>