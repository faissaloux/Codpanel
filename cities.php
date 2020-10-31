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

            .header-right .user-profile-area{
                height: 40px;
            }

            .add-new-city-text{
                margin-left: 35px;
                font-size: 16px;
            }
            .add-new-city-icon{
                width: 40px;
                background-color: rgba(0,0,0,.15);;
                position: absolute;
                left: 0;
                top: 0;
                bottom: 0;
            }
              
            .add-new-city-modal{
                border: none;
            }
            .add-new-city-modal > .modal-body{
                border-left: 1px solid rgba(0,0,0,.2);
                border-bottom: 1px solid rgba(0,0,0,.2);
                border-right: 1px solid rgba(0,0,0,.2);
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
                                        <i class="mdi mdi-file-excel mr-2"></i>
                                        <span>Download Excel</span>
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
                    <h3>المدن والموزعين المكلفين بهم</h3>
                    <div class="btn-group btn-top" role="group">
                        <a href="#" class="btn btn-primary d-flex border-none">
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
                            <div class="card-body pd-0">
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

        <!--================================-->
        <!-- Add new city modal Start -->
        <!--================================-->
        <div    class="modal fade"
                id="addCityModalCenter"
                tabindex="-1"
                role="dialog"
                aria-labelledby="addCityModalCenterTitle"
                aria-hidden="true">
            <div    class="modal-dialog modal-dialog-centered"
                    role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCityModalCenterTitle">إضافة مدينة جديدة</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-content add-new-city-modal">
                        <div class="modal-body d-flex flex-column">
                            <div class="">
                                <div class="d-flex flex-column">
                                    <div class="form-group">
                                        <input  type="text"
                                                class="form-control tx-right"
                                                name="name"
                                                placeholder="الإسم الكامل للزبون">
                                    </div>
                                    <div class="form-group">
                                        <input  type="text"
                                                class="form-control tx-right"
                                                name="name"
                                                placeholder="الإسم الكامل للزبون">
                                    </div>
                                    <select class="form-control" name="provider">
                                        <option value="notselected">Aucun</option>
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
                                <div class="d-flex justify-content-center mt-4">
                                    <p class="row col p-0">
                                        <button type="submit" class="btn btn-success btn-block">إضافة مدينة جديدة</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Add new city modal End -->


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