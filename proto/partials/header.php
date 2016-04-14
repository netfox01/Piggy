<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet" />
    <link href="css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">
    <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

    <link href="css/select/select2.min.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/nprogress.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index1.html" class="site_title"><i class="fa fa-paw"></i> <span>Piggy</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <!-- <img src="images/img.jpg" alt="..." class="img-circle profile_img"> -->
                            <i class="fa fa-user img-circle profile_img"></i>
                        </div>
                        <div class="profile_info ">
                            <span>Welcome,</span>
                            <h2>Eissa Soubhi</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->
                    <br />
                    <!-- sidebar menu -->
                    <!-- <li><a href="list-mb.php">Money Boxes</a>
                                        </li>
                                        <li><a href="list.php">Money Trackers</a>
                                        </li>
                                        <li><a href="list.php">Groups</a>
                                        </li>
                                        <li><a href="list.php">Transactions</a>
                                        </li> -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a href="index1.php"><i class="fa fa-bar-chart"></i> Dashboard </span></a>
                                </li>
                                <li>
                                    <a><i class="fa fa-credit-card"></i> Transaction<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="list-tran.php">Transactions list</a>
                                        </li>
                                        <li><a href="new-transaction.php">New transaction</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-archive"></i> Money Box <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="list-mb.php">MBs list</a>
                                        </li>
                                        <li><a href="new-mb.php">New MB</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-map"></i> Money Tracker <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="list-mt.php">MTs list</a>
                                        </li>
                                        <li><a href="new-mt.php">New MT</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-folder"></i> Group <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="list-mbgroup.php">MB-Groups list</a>
                                        </li>
                                        <li><a href="list-mtgroup.php">MT-Groups list</a>
                                        </li>
                                        <li><a href="new-group.php">New group</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i> Eissa Soubhi
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="profile.php">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="navbar-btn">
                                    <a href="new-transaction.html" class="btn btn-success">Make a transaction</a>
                                </p>
                            </li>
                            <!-- <li class="main_search col-md-12">
                                <div class=" form-group pull-right top_search ">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="auocomplete_search" placeholder="Search for...">
                                        <div id="auocomplete_search_container" style="position: absolute; float: left; width: 400px; margin: 33px;"></div>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">Go!</button>
                                        </span>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->