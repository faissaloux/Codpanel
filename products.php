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
                height: 75px;
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

            .sort-container{
                background-color: #2D54EE;
                height: 36px;
                border: none;
                border-radius: 0;
            }
            .sort-dropdown{
                left: -117px !important;
                height: 200px;
                width: 200px;
                overflow-y: scroll;
            }
            .polaris-list{
                list-style: none;
            }

            .btn-container{
                position: relative;
                padding-left: 0;
                cursor: pointer;
            }
            .table-top-btn ~ .table-top-btn-icon{
                position: absolute;
                left: 26px;
                top: 7px;
                color: #FFF;
            }
            .btn-export{
                position: absolute;
                background-color: #2D54EE;
                text-indent: 60px;
                color: #FFF !important;
                padding: 10px;
            }

            .export-product-container{
                background-color: #2D54EE;
                height: 36px;
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
                    <div class="d-flex flex-column">
                        <div class="col-12 mb-2 d-flex">
                            <div class="dropdow">
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
                            <div class="btn-container col-2">
                                <button class="btn btn-secondary export-product-container d-flex align-items-center"
                                        type="button"
                                        id="dropdownMenuButton"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                    <i class="mdi mdi-upload"></i>
                                    <span class="mr-2">تصدير منتج</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card-body pd-0 tx-center">
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