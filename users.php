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
                <div class="d-flex justify-content-between p-2 bg-white p-4">
                    <h3 class="header-title">الأعضاء</h3>
                    <div class="btn-group btn-top d-flex justify-content-end" role="group">
                        <a href="addNewUser.php" class="btn btn-primary d-flex col-4 border-none">
                            <span class="d-flex justify-content-center add-new-icon">
                                <i class="mdi mdi-plus d-flex align-items-center text-white"></i>
                            </span>
                            <span class="add-new-text">
                                إضافة عضو جديد
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
                                            <th scope="col" class="arabic" data-type="reference">اسم<br class="sm-break"> المستخدم</th>
                                            <th scope="col" class="arabic" data-type="email">الإميل</th>
                                            <th scope="col" class="arabic" data-type="registration">تاريخ<br class="sm-break"> التسجيل</th>
                                            <th scope="col" class="arabic" data-type="job">الوظيفة</th>
                                            <th scope="col" class="arabic" data-type="phone">رقم الهاتف</th>
                                            <th scope="col" class="arabic">تعديل</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN62</span>
                                            </td>
                                            <td data-type="email">
                                                <a href="mailto:example@email.com">example@email.com</a>
                                            </td>
                                            <td data-type="registration">
                                                <span>منذ<br class="sm-break"> أسبوعين</span>
                                            </td>
                                            <td data-type="job">
                                                <span class="bg-success text-white p-1">موظفة</span>
                                            </td>
                                            <td data-type="phone">
                                                <a href="tel: 06########"><a href="tel: 06########">0# ## ## ## ##</a></a>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN62</span>
                                            </td>
                                            <td data-type="email">
                                                <a href="mailto:example@email.com">example@email.com</a>
                                            </td>
                                            <td data-type="registration">
                                                <span>منذ<br class="sm-break"> أسبوعين</span>
                                            </td>
                                            <td data-type="job">
                                                <span class="bg-success text-white p-1">موظفة</span>
                                            </td>
                                            <td data-type="phone">
                                                <a href="tel: 06########">0# ## ## ## ##</a>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN62</span>
                                            </td>
                                            <td data-type="email">
                                                <a href="mailto:example@email.com">example@email.com</a>
                                            </td>
                                            <td data-type="registration">
                                                <span>منذ<br class="sm-break"> أسبوعين</span>
                                            </td>
                                            <td data-type="job">
                                                <span class="bg-success text-white p-1">موظفة</span>
                                            </td>
                                            <td data-type="phone">
                                                <a href="tel: 06########">0# ## ## ## ##</a>
                                            </td>
                                            <td>
                                                <a type="button" 
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN62</span>
                                            </td>
                                            <td data-type="email">
                                                <a href="mailto:example@email.com">example@email.com</a>
                                            </td>
                                            <td data-type="registration">
                                                <span>منذ<br class="sm-break"> أسبوعين</span>
                                            </td>
                                            <td data-type="job">
                                                <span class="bg-primary text-white p-1">موزع</span>
                                            </td>
                                            <td data-type="phone">
                                                <a href="tel: 06########">0# ## ## ## ##</a>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN62</span>
                                            </td>
                                            <td data-type="email">
                                                <a href="mailto:example@email.com">example@email.com</a>
                                            </td>
                                            <td data-type="registration">
                                                <span>منذ<br class="sm-break"> أسبوعين</span>
                                            </td>
                                            <td data-type="job">
                                                <span class="bg-danger text-white p-1">مضيف بيانات</span>
                                            </td>
                                            <td data-type="phone">
                                                <a href="tel: 06########">0# ## ## ## ##</a>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN62</span>
                                            </td>
                                            <td data-type="email">
                                                <a href="mailto:example@email.com">example@email.com</a>
                                            </td>
                                            <td data-type="registration">
                                                <span>منذ<br class="sm-break"> أسبوعين</span>
                                            </td>
                                            <td data-type="job">
                                                <span class="bg-warning text-white p-1">لجنة المتابعة</span>
                                            </td>
                                            <td data-type="phone">
                                                <a href="tel: 06########">0# ## ## ## ##</a>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN62</span>
                                            </td>
                                            <td data-type="email">
                                                <a href="mailto:example@email.com">example@email.com</a>
                                            </td>
                                            <td data-type="registration">
                                                <span>منذ<br class="sm-break"> أسبوعين</span>
                                            </td>
                                            <td data-type="job">
                                                <span class="bg-primary text-white p-1">موزع</span>
                                            </td>
                                            <td data-type="phone">
                                                <a href="tel: 06########">0# ## ## ## ##</a>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN62</span>
                                            </td>
                                            <td data-type="email">
                                                <a href="mailto:example@email.com">example@email.com</a>
                                            </td>
                                            <td data-type="registration">
                                                <span>منذ<br class="sm-break"> أسبوعين</span>
                                            </td>
                                            <td data-type="job">
                                                <span class="bg-primary text-white p-1">موزع</span>
                                            </td>
                                            <td data-type="phone">
                                                <a href="tel: 06########">0# ## ## ## ##</a>
                                            </td>
                                            <td>
                                                <a  type="button" 
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN62</span>
                                            </td>
                                            <td data-type="email">
                                                <a href="mailto:example@email.com">example@email.com</a>
                                            </td>
                                            <td data-type="registration">
                                                <span>منذ<br class="sm-break"> أسبوعين</span>
                                            </td>
                                            <td data-type="job">
                                                <span class="bg-danger text-white p-1">مضيف بيانات</span>
                                            </td>
                                            <td data-type="phone">
                                                <a href="tel: 06########">0# ## ## ## ##</a>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white edit">
                                                    تعديل
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="checkbox"/></th>
                                            <td data-type="reference">
                                                <span>SN62</span>
                                            </td>
                                            <td data-type="email">
                                                <a href="mailto:example@email.com">example@email.com</a>
                                            </td>
                                            <td data-type="registration">
                                                <span>منذ<br class="sm-break"> أسبوعين</span>
                                            </td>
                                            <td data-type="job">
                                                <span class="bg-danger text-white p-1">مضيف بيانات</span>
                                            </td>
                                            <td data-type="phone">
                                                <a href="tel: 06########">0# ## ## ## ##</a>
                                            </td>
                                            <td>
                                                <a  type="button"
                                                    class="btn btn-primary btn-lg border-none loadactions rounded text-white edit">
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
        <script src="assets/js/custom.js"></script>
        
    </body>

</html>