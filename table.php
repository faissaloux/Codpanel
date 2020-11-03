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
                                <span class="col">الكل</span>
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
                                <span class="col">جديد</span>
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
                                <span class="col">ألغيت</span>
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
                                <span class="col">دون إجابة</span>
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
                                <span class="col">التأكيد</span>
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
                                <span class="col">اعد الاتصال</span>
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
                                            <div class="limit-container-right mr-2 d-flex">
                                                <span class="m-2 col">حد:</span>
                                                <select name="" id="" class="p-0 pagination-select">
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
                                                    <span class="mr-2">فرز</span>
                                                </button>
                                                <div    class="dropdown-menu sort-dropdown mt-2"
                                                        aria-labelledby="dropdownMenuButton">
                                                    <div class="polaris-header tx-right pr-3 pb-2">
                                                        <span>فرز عن طريق</span>
                                                    </div>
                                                    <ul class="Polaris-ChoiceList__Choices_15o76 polaris-list tx-right pr-3 mb-0">
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton67">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input id="PolarisRadioButton67" name="PolarisChoiceList8" type="radio" class="Polaris-RadioButton__Input_30ock" value="title asc" checked="">
                                                                        <span class="Polaris-RadioButton__Backdrop_1x2i2"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">إسم المنتج أ-ي</span>
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
                                                                <span class="Polaris-Choice__Label_2vd36">إسم المنتج ي-أ</span>
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
                                                                <span class="Polaris-Choice__Label_2vd36">تم الإنشاء (الأقدم أولاً)</span>
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
                                                                <span class="Polaris-Choice__Label_2vd36">تم الإنشاء (الأحدث أولاً)</span>
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
                                                                <span class="Polaris-Choice__Label_2vd36">تم التحديث (الأقدم أولاً)</span>
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
                                                                <span class="Polaris-Choice__Label_2vd36">تم التحديث (الأحدث أولاً)</span>
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
                                                                <span class="Polaris-Choice__Label_2vd36">المخزون المنخفض</span>
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
                                                                <span class="Polaris-Choice__Label_2vd36">مخزون مرتفع</span>
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
                                                                <span class="Polaris-Choice__Label_2vd36">نوع المنتج أ-ي</span>
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
                                                                <span class="Polaris-Choice__Label_2vd36">نوع المنتج ي-أ</span>
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
                                                                <span class="Polaris-Choice__Label_2vd36">البائع أ-ي</span>
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
                                                                <span class="Polaris-Choice__Label_2vd36">البائع ي-أ</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center btn-container show-columns-container mr-2">
                                                <button class="btn btn-secondary show-columns-container d-flex align-items-center border-none"
                                                        type="button"
                                                        id="dropdownMenuButton"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                    <i class="mdi mdi-sort text-white"></i>
                                                    <span class="mr-2">عرض الأعمدة</span>
                                                </button>
                                                <div    class="dropdown-menu show-columns-dropdown mt-2"
                                                        aria-labelledby="dropdownMenuButton">
                                                    <div class="polaris-header tx-right pr-3 pb-2">
                                                        <span>عرض الأعمدة:</span>
                                                    </div>
                                                    <ul class="Polaris-ChoiceList__Choices_15o76 polaris-list tx-right pr-3 mb-0">
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton67">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input type="checkbox"/>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">معلومات الطلب</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton68">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input type="checkbox"/>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">الإسم و رقم الهاتف</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton69">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input type="checkbox"/>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">المنتوجات</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton70">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input type="checkbox"/>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">الموظفة و الموزع</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="Polaris-Choice_j5gzq" for="PolarisRadioButton71">
                                                                <span class="Polaris-Choice__Control_1u8vs">
                                                                    <span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
                                                                        <input type="checkbox"/>
                                                                    </span>
                                                                </span>
                                                                <span class="Polaris-Choice__Label_2vd36">محاولات الإتصال</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="dropdown mr-2">
                                                <a  class="table-top-btn col btn btn-secondary sort-container d-flex align-items-center"
                                                    style="color: white"
                                                    data-toggle="modal"
                                                    data-target="#todayModalCenter">
                                                    <i class="mdi mdi-calendar-today"></i>
                                                    <span class="mr-2">اليوم</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pr-0">
                                        <div class="d-flex justify-content-end">
                                            <div class="btn-container ml-2">
                                                <a class="btn-import table-top-btn d-flex align-items-center">
                                                    <i class="mdi mdi-download"></i>
                                                    <span class="mr-2">استيراد</span>
                                                </a>
                                            </div>
                                            <div class="btn-container">
                                                <a  class="btn-add-order table-top-btn d-flex align-items-center"
                                                    data-toggle="modal"
                                                    data-target="#addOrderModalCenter">
                                                    <i class="mdi mdi-plus"></i>
                                                    <span class="mr-2">أضف طلب</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="search-form-panel pt-4 mb-4">
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
                                                                    placeholder="إسم أو هاتف أو عنوان">
                                                        </div>
                                                        <div class="form-group d-flex col-md-2">
                                                            <button class="btn btn-success btn-block">
                                                                <b>بحث</b>&nbsp;&nbsp;<i data-feather="search"></i>
                                                            </button>
                                                            <div class="mr-2 btn-show-deep-search show-deep-search">
                                                                <i class="mdi mdi-filter-variant"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="deep-search">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group ">
                                                                    <label for="city_selector" class="float-right">
                                                                        <b>المدينة</b>
                                                                    </label>
                                                                    <select class="form-control" name="city_selector">
                                                                        <option></option>
                                                                        <option value="agadir">أكادير</option>
                                                                        <option value="Marrakech">مراكش</option>
                                                                        <option value="rabat">الرباط</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group ">
                                                                    <label for="employee_selector" class="float-right" >
                                                                        <b>العامل</b>
                                                                    </label>
                                                                    <select class="form-control" name="employee_selector">
                                                                        <option></option>
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
                                                                <div class="form-group">
                                                                    <label for="provider" class="float-right">
                                                                        <b>المزود</b>
                                                                    </label>
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
                                                                    <label for="product" class="float-right">
                                                                        <b>المنتج</b>
                                                                    </label>
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
                                                                    <label for="status" class="float-right">
                                                                        <b>الحالة</b>
                                                                    </label>
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
                                                                    <label for="from" class="float-right">
                                                                        <b>من</b>
                                                                    </label>
                                                                    <input  type="date" 
                                                                            class="form-control" 
                                                                            name="from"  
                                                                            placeholder="From"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="to" class="float-right">
                                                                        <b>إلى</b>
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
                                    </div>
                                </form>
                            </div>

                            <center>
                                <div class="spinner-border mb-2 text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </center>
                                
                            <div class="card-body pd-0 tx-center">
                                <table class="table table-primary table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input type="checkbox" class="show-actions-menu"/></th>
                                            <th scope="col" data-type="requestInfo">معلومات الطلب</th>
                                            <th scope="col" data-type="nameAndPhone">الإسم و رقم الهاتف</th>
                                            <th scope="col" data-type="products">المنتوجات</th>
                                            <th scope="col" data-type="workers">الموظفة و الموزع</th>
                                            <th scope="col" data-type="calls">محاولات الإتصال</th>
                                            <th scope="col">تعديل</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="requestInfo" class="tx-right">
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
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white details"
                                                    data-toggle="modal"
                                                    data-target="#detailsModalCenter">
                                                    التفاصيل
                                                </a>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white history"
                                                    data-toggle="modal"
                                                    data-target="#historyModalCenter">
                                                    الأحداث
                                                </a>
                                                <a type="button"
                                                        class="btn btn-primary btn-lg border-none loadactions rounded text-white edit">
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
                                            <td data-type="requestInfo" class="tx-right">
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
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white details"
                                                    data-toggle="modal"
                                                    data-target="#detailsModalCenter">
                                                    التفاصيل
                                                </a>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white history"
                                                    data-toggle="modal"
                                                    data-target="#historyModalCenter">
                                                    الأحداث
                                                </a>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white edit">
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
                                            <td data-type="requestInfo" class="tx-right">
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
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white details"
                                                    data-toggle="modal"
                                                    data-target="#detailsModalCenter">
                                                    التفاصيل
                                                </a>
                                                <a  type="button" 
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white history"
                                                    data-toggle="modal"
                                                    data-target="#historyModalCenter">
                                                    الأحداث
                                                </a>
                                                <a type="button" 
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white edit">
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
                                            <td data-type="requestInfo" class="tx-right">
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
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white details"
                                                    data-toggle="modal"
                                                    data-target="#detailsModalCenter">
                                                    التفاصيل
                                                </a>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white history"
                                                    data-toggle="modal"
                                                    data-target="#historyModalCenter">
                                                    الأحداث
                                                </a>
                                                <a type="button"
                                                        class="btn btn-primary btn-lg border-none loadactions rounded text-white edit">
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
                                            <td data-type="requestInfo" class="tx-right">
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
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white details"
                                                    data-toggle="modal"
                                                    data-target="#detailsModalCenter">
                                                    التفاصيل
                                                </a>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white history"
                                                    data-toggle="modal"
                                                    data-target="#historyModalCenter">
                                                    الأحداث
                                                </a>
                                                <a type="button"
                                                        class="btn btn-primary btn-lg border-none loadactions rounded text-white edit">
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
                                    <a class="page-link" href="#" tabindex="-1">السابق</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">التالي</a>
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

        
        <?php require_once 'inc/modals.php'; ?>

        <!--================================-->
        <!-- Footer Script -->
        <!--================================-->
        <script src="assets/js/all.js"></script>
        <script src="assets/js/custom.js"></script>
        
    </body>

</html>