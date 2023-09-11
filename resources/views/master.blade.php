<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="Crush it Able The most popular Admin Dashboard template and ui kit">
<meta name="author" content="PuffinTheme the theme designer">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Crush it :: Home</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Plugins css -->
<link rel="stylesheet" href="../assets/plugins/charts-c3/c3.min.css"/>
<link rel="stylesheet" href="../assets/plugins/jvectormap/jvectormap-2.0.3.css" />

<!-- Core css -->
<link rel="stylesheet" href="../assets/css/main.css"/>
<link rel="stylesheet" href="../assets/css/theme1.css" id="stylesheet"/>
</head>

<body class="font-opensans iconcolor sidebar_dark">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<!-- Start main html -->
<div id="main_content">



    <!-- Notification and  Activity-->
    <div id="rightsidebar" class="right_sidebar">
        <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#notification" aria-expanded="true">Notification</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity" aria-expanded="false">Activity</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane   active" id="notification" aria-expanded="true">
                <ul class="list-unstyled feeds_widget">
                    <li>
                        <div class="feeds-left"><i class="fa fa-check"></i></div>
                        <div class="feeds-body">
                            <h4 class="title text-danger">Issue Fixed</h4>
                            <small>WE have fix all Design bug with Responsive</small>
                            <small class="text-muted">11:05</small>
                        </div>
                    </li>
                    <li>
                        <div class="feeds-left"><i class="fa fa-user"></i></div>
                        <div class="feeds-body">
                            <h4 class="title">New User</h4>
                            <small>I feel great! Thanks team</small>
                            <small class="text-muted">10:45</small>
                        </div>
                    </li>
                    <li>
                        <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                        <div class="feeds-body">
                            <h4 class="title">7 New Feedback</h4>
                            <small>It will give a smart finishing to your site</small>
                            <small class="text-muted">Today</small>
                        </div>
                    </li>
                    <li>
                        <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                        <div class="feeds-body">
                            <h4 class="title text-warning">Server Warning</h4>
                            <small>Your connection is not private</small>
                            <small class="text-muted">10:50</small>
                        </div>
                    </li>
                    <li>
                        <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                        <div class="feeds-body">
                            <h4 class="title">7 New Orders</h4>
                            <small>You received a new oder from Tina.</small>
                            <small class="text-muted">11:35</small>
                        </div>
                    </li>                                   
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane  " id="activity" aria-expanded="false">
                <ul class="new_timeline mt-3">
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:00am</div>
                        <div class="desc">
                            <h3>Attendance</h3>
                            <h4>Computer Class</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:30am</div>
                        <div class="desc">
                            <h3>Added an interest</h3>
                            <h4>“Volunteer Activities”</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">12:00pm</div>
                        <div class="desc">
                            <h3>Developer Team</h3>
                            <h4>Hangouts</h4>
                            <ul class="list-unstyled team-info margin-0 p-t-5">                                            
                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>                                            
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:00pm</div>
                        <div class="desc">
                            <h3>Responded to need</h3>
                            <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                        </div>
                    </li>
                    <li>
                        <div class="bullet orange"></div>
                        <div class="time">1:30pm</div>
                        <div class="desc">
                            <h3>Lunch Break</h3>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:38pm</div>
                        <div class="desc">
                            <h3>Finish</h3>
                            <h4>Go to Home</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- start User detail -->
    <div class="user_div">
        <h5 class="brand-name mb-4">User Crush<a href="javascript:void(0)" class="user_btn"><i class="icon-close"></i></a></h5>
        <div class="card">
            <img class="card-img-top" src="../assets/images/gallery/6.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Daniel Kristeen</h5>
                <p class="card-text">795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                <div class="row">
                    <div class="col-4">
                        <h6><strong>3265</strong></h6>
                        <small>Post</small>
                    </div>
                    <div class="col-4">
                        <h6><strong>1358</strong></h6>
                        <small>Followers</small>
                    </div>
                    <div class="col-4">
                        <h6><strong>10K</strong></h6>
                        <small>Likes</small>
                    </div>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">michael@example.com</li>
                <li class="list-group-item">+ 202-555-2828</li>
                <li class="list-group-item">October 22th, 1990</li>
            </ul>
            <div class="card-body">
                <a href="javascript:void(0);" class="card-link">View More</a>
                <a href="javascript:void(0);" class="card-link">Another link</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label class="d-block">Total Income<span class="float-right">77%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="d-block">Total Expenses <span class="float-right">50%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <label class="d-block">Gross Profit <span class="float-right">23%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="d-block">Storage <span class="float-right">77%</span></label>
            <div class="progress progress-sm">
                <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
            </div>
            <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
        </div>
    </div>

    <!-- sidebar menu -->
    @include('partials.sidebar')

    <!-- start main body part-->
    <div class="page">

        <!-- start body header -->
        @include('partials.header')
        <!--page content-->
        @yield('content')

        <!-- Start page footer -->
        @include('partials.footer')

    </div>
<!-- jQuery and bootstrtap js -->
<script src="../assets/bundles/lib.vendor.bundle.js"></script>

<!-- start plugin js file  -->
<script src="../assets/bundles/apexcharts.bundle.js"></script>
<script src="../assets/bundles/counterup.bundle.js"></script>
<script src="../assets/bundles/knobjs.bundle.js"></script>
<script src="../assets/bundles/c3.bundle.js"></script>
<script src="../assets/bundles/flot.bundle.js"></script>
<script src="../assets/bundles/jvectormap1.bundle.js"></script>

<!-- Start core js and page js -->
<script src="../assets/js/core.js"></script>
<script src="assets/js/page/index.js"></script>
</body>
</html>
