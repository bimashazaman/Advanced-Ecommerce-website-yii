<?php



use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100" id="page-top">
<?php $this->beginBody() ?>

<header>
    <?php
    // NavBar::begin([
    //     'brandLabel' => Yii::$app->name,
    //     'brandUrl' => Yii::$app->homeUrl,
    //     'options' => [
    //         'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
    //     ],
    // ]);
    // $menuItems = [
    //     ['label' => 'Home', 'url' => ['/site/index']],
    // ];
    // if (Yii::$app->user->isGuest) {
    //     $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    // }     
    // echo Nav::widget([
    //     'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
    //     'items' => $menuItems,
    // ]);
    // if (Yii::$app->user->isGuest) {
    //     echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
    // } else {
    //     echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
    //         . Html::submitButton(
    //             'Logout (' . Yii::$app->user->identity->username . ')',
    //             ['class' => 'btn btn-link logout text-decoration-none']
    //         )
    //         . Html::endForm();
    // }
    // NavBar::end();
    ?>
</header>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">Bimasha Bazar</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

          

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Products</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Products Category</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    Bimasha! 
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="data:image/jpeg;base64,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">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

          <?php echo $content; ?>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a data-method="post" class="btn btn-primary" href="<?php echo Url::to('/site/logout')  ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
