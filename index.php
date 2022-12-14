<html>
<?php
 include("./db.php");
?>

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./assets/images/diamond.jpg" type="image/icon type">
    <title>Pune - Diamond International School</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Shelly - Website">
    <meta name="author" content="merkulove">
    <meta name="keywords" content="">
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/main.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/button.min.css">
    <link rel="stylesheet" href="assets/icons/css/mhfontello.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="main-section position-relative">
        <header>
            <div class="container">
                <div class="header-content d-flex flex-wrap align-items-center justify-content-between">
                    <div class="logo"><a href="index.php"><img src="./assets/images/logi.jpg" style="width: 70px;"></a>
                    </div>
                    <!--logo end-->
                    <nav class="navbar navbar-dark ">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <div class="menu-btn"><a href="#"><span class="bar1"></span> <span class="bar2"></span>
                                    <span class="bar3"></span></a></div>
                        </button>
                    </nav>
                    <div class="d-flex justify-content-end headeinghead">

                        <h1><span>Diamond </span> International School</h1>

                    </div>
                </div>
                <!--header-content end-->
                <div class="navigation-bar d-flex flex-wrap align-items-center">
                    <nav>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">About
                                    us</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false">Contact
                                    us</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="login.php">Admin Login</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--navigation-bar end-->
            </div>
        </header>
        <!--header end-->
        <div class="collapse responsive-menu" id="navbarToggleExternalContent">
            <div class="">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <div class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true" aria-expanded="false">
                            Home</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">About us</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Contact us</button>
                    </li>
                </ul>
                <!-- </div> -->
            </div>


            <!--responsive-menu end-->

            <!--main-banner end-->
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="wrapper">
                    <section class="main-banner">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="banner-text wow fadeInLeft" data-wow-duration="1000ms"
                                    style="visibility: visible; animation-duration: 1000ms; animation-name: A;">
                                    <h2>The Smarter Way to Learn with us<span>Diamond International School</span></h2>
                                    <p>Education is a means of developing our greatest abilities. Good and proper
                                        eduction
                                        plays
                                        a greate role in shaping our future and social as well as economical growth of
                                        our
                                        nation.</p>

                                </div>
                            </div>
                        </div>
                    </section>
                    <h2 class="main-title">Diamond</h2>
                    <!--main-section end-->
                    <section class="about-us-section border-bottom ">
                        <div class="container">
                            <div class="section-title text-center">
                                <h2>Welcome to <span>Diamond School</span></h2>
                            </div>
                            <!--section-title end-->
                            <div class="about-sec">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="abt-col wow fadeInUp" data-wow-duration="1000ms"
                                                style="visibility: visible; animation-duration: 1000ms; animation-name: E;">
                                                <img src="./assets/images/icon5.png" alt="">
                                                <h3>Awesome Teachers</h3>
                                            </div>
                                            <!--abt-col end-->
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="abt-col wow fadeInUp" data-wow-duration="1000ms"
                                                data-wow-delay="200ms"
                                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: E;">
                                                <img src="./assets/images/icon7.png" alt="">
                                                <h3>Global Certificate</h3>
                                            </div>
                                            <!--abt-col end-->
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="abt-col wow fadeInUp" data-wow-duration="1000ms"
                                                data-wow-delay="600ms"
                                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: E;">
                                                <img src="./assets/images/icon9.png" alt="">
                                                <h3>Student Support Service</h3>
                                            </div>
                                            <!--abt-col end-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                    <section class="classes-section container mb-2 pt-5">
                        <div class="sec-title">
                            <h2> About Us</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <img src="./assets/images/about.webp" alt="" style="width: 100%;">
                            </div>
                            <div class="content col-md-7">
                                <div class="about-content">
                                    <p>
                                        Education is a means of developing our greatest abilities. Good and proper
                                        eduction
                                        plays a
                                        greate
                                        role in shaping our future and social as well as economical growth of our
                                        nation.
                                        Keeping
                                        the
                                        same aim
                                        ahead DIS is taking the first step in field of education, but of course with
                                        your
                                        great and precious support!
                                        The perfect school is one where the school curriculum is designed
                                        according to changing educational needs of students.

                                        Here students will be provided with a merged pattern of state Board, CBSE Board
                                        and
                                        ICSE
                                        Board
                                        content.
                                        The lesson teach are not realized until the students will not learn them so. for
                                        Play group,
                                        Nursary, Jr. KG. and Sr. KG. Activity Base learning method will be used. This
                                        will
                                        increase
                                        kids
                                        grasping power and make learning fun.

                                        Personality development through cultural programs and moral values will have
                                        special
                                        attention.
                                        Expecting your huge support for my nobel inspiration for DIS.

                                        Sometime the smallest step in the right direction ends up being the biggest step
                                        of
                                        your
                                        success
                                        and DIS is the first step of your lovely kid towards success. Thanks!
                                    </p>


                                    <div class="about">
                                        <h3>- Mrs. Vaishali Bombale, </h3>
                                        <p>M.A B.Ed Director</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>


                    <!--about-us-section end-->
                    <section class="classes-section border-top pt-5">
                        <div class="container">
                            <div class="sec-title">
                                <h2>Our Classes</h2>
                            </div>
                            <!--sec-title end-->
                            <div class="classes-sec">
                                <div class="row classes-carousel slick-initialized slick-slider">
                                    <div aria-live="polite" class="slick-list draggable" tabindex="0">
                                        <div class="slick-track">


                                            <div class="col-lg-4 slick-slide slick-cloned mb-5" data-slick-index="-1" id=""
                                                aria-hidden="true">
                                                <div class="classes-col">
                                                    <div class="class-thumb"><img src="./assets/images/drawing.jpg"
                                                            alt="" class="w-100"> <a href="contacts.html" title=""
                                                            class="crt-btn"><img src="assets/img/icon10.png" alt=""></a>
                                                    </div>
                                                    <div class="class-info">
                                                        <h3><a href="class-single.html" title="">Drawing , Painting and
                                                                Curriculum activities
                                                                Lessons</a>
                                                        </h3>
                                                        <span>Mon-Fri</span> <span>10 AM - 12 AM</span>

                                                    </div>
                                                </div>
                                                <!--classes-col end-->
                                            </div>
                                            <div class="col-lg-4 slick-slide mb-5" data-slick-index="0" aria-hidden="true">
                                                <div class="classes-col wow fadeInUp" data-wow-duration="1000ms"
                                                    style="visibility: visible; animation-duration: 1000ms; animation-name: E;">
                                                    <div class="class-thumb"><img src="./assets/images/langauge.jpg"
                                                            alt="" class="w-100"> <a href="contacts.html" title=""
                                                            class="crt-btn"><img src="assets/img/icon10.png" alt=""></a>
                                                    </div>
                                                    <div class="class-info">
                                                        <h3><a href="class-single.html" title="">Basic English Speaking
                                                                and
                                                                Grammar</a></h3><span>Mon-Fri</span> <span>10 AM - 12
                                                            AM</span>

                                                    </div>
                                                </div>
                                                <!--classes-col end-->
                                            </div>
                                            <div class="col-lg-4 slick-slide mb-5" data-slick-index="1" aria-hidden="true">
                                                <div class="classes-col wow fadeInUp" data-wow-duration="1000ms"
                                                    data-wow-delay="200ms"
                                                    style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: E;">
                                                    <div class="class-thumb"><img src="./assets/images/sc.png" alt=""
                                                            class="w-100">
                                                        <a href="contacts.html" title="" class="crt-btn"><img
                                                                src="assets/img/icon10.png" alt=""></a>
                                                    </div>
                                                    <div class="class-info">
                                                        <h3><a href="class-single.html" title="">Natural Sciences &amp;
                                                                Mathematics
                                                                Courses</a></h3><span>Mon-Fri</span> <span>10 AM - 12
                                                            AM</span>

                                                    </div>
                                                </div>
                                                <!--classes-col end-->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--classes-sec end-->
                            </div>
                    </section>

                    <!--  -->
                    <section class="features-section border-top classes-section pt-5">
                        <div class="container">
                            <div class="sec-title">
                                <h2> Management Procedure</h2>
                            </div>
                            <div class="row clearfix justify-content-center">
                                <div class="col-lg-8">

                                    <!-- End Heading -->
                                    <div class="d-lg-none d-xl-block empty-space-30"></div>
                                </div><!-- End Col -->
                            </div><!-- End Row -->
                            <div class="row clearfix no-gutters dc-features-group mb-5">
                                <div class="col-lg-4 col-md-6 dc-features-item mb-4">
                                    <a>
                                        <div class="dc-features-item-front">
                                            <div class="inner-box">
                                                <div class="icon">
                                                    <img class="normal" src="./assets/images/oams.png"
                                                        alt="online admission">
                                                </div>
                                                <h3 class="dc-features-title">Online Admission</h3>
                                            </div>
                                        </div>
                                        <div class="dc-features-item-hover">
                                            <div class="inner-box">
                                                <h3 class="dc-features-title">Online Admission</h3>
                                                <p>
                                                </p>
                                                <ul class="list-style-two">
                                                    <li>Admission from School Website</li>
                                                    <li>Collect Form Charges Online</li>
                                                    <li>Cut-off criteria on DOB / Marks</li>
                                                    <li>Form Due Dates</li>
                                                    <li>Generate Merit List</li>
                                                    <li>Communication with Applicants</li>
                                                    <li>Export Data to ERP &amp; Excels</li>
                                                </ul>
                                                <p></p>
                                                <!-- <button class="btn-small btn-primary" onclick="location.href='#'" target="_blank">Read more...</button> -->
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- End Col -->
                                <div class="col-lg-4 col-md-6 dc-features-item mb-4">
                                    <a>
                                        <div class="dc-features-item-front">
                                            <div class="inner-box">
                                                <div class="icon">
                                                    <img class="normal" src="./assets/images/fee.svg"
                                                        alt="digital school">
                                                </div>
                                                <h3 class="dc-features-title">Fee Management</h3>
                                            </div>
                                        </div>
                                        <div class="dc-features-item-hover">
                                            <div class="inner-box">
                                                <h3 class="dc-features-title">Fee Management</h3>
                                                <p>
                                                </p>
                                                <ul class="list-style-two">
                                                    <li>Customizable Fee Categories</li>
                                                    <li>Offline / Online Fee Collection</li>
                                                    <li>Class-wise / Individual Discounts</li>
                                                    <li>Customized fee receipt format</li>
                                                    <li>Date-wise / Class-wise Report</li>
                                                    <li>Automatic Due Fees Reminders</li>
                                                    <li>Paid Notification on App/SMS</li>
                                                </ul>
                                                <p></p>
                                                <!-- <button class="btn-small btn-primary" onclick="location.href='#'" target="_blank">Read more...</button> -->
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- End Col -->
                                <div class="col-lg-4 col-md-6 dc-features-item mb-4">
                                    <a>
                                        <div class="dc-features-item-front">
                                            <div class="inner-box">
                                                <div class="icon">
                                                    <img class="normal" src="./assets/images/medal.svg"
                                                        alt="school fee">
                                                </div>
                                                <h3 class="dc-features-title">School Branding</h3>
                                            </div>
                                        </div>
                                        <div class="dc-features-item-hover">
                                            <div class="inner-box">
                                                <h3 class="dc-features-title">School Branding</h3>
                                                <p>
                                                </p>
                                                <ul class="list-style-two">
                                                    <li>Customized Mobile App (Android / iOS) for your School Brand</li>
                                                    <li>Online Payment, Online Admission from School Website</li>
                                                    <li>Manage &amp; Support Services to professionally manage School's
                                                        Social Media
                                                        accounts for better reachability &amp; positive branding</li>
                                                </ul>
                                                <p></p>
                                                <!-- <button class="btn-small btn-primary" onclick="location.href='#'" target="_blank">Read more...</button> -->
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- End Col -->

                                <div class="col-lg-4 col-md-6 dc-features-item mb-4">
                                    <a>
                                        <div class="dc-features-item-front">
                                            <div class="inner-box">
                                                <div class="icon">
                                                    <img class="normal" src="./assets/images/student.svg"
                                                        alt="digital school">
                                                </div>
                                                <h3 class="dc-features-title">Student Management</h3>
                                            </div>
                                        </div>
                                        <div class="dc-features-item-hover">
                                            <div class="inner-box">
                                                <h3 class="dc-features-title">Student Management</h3>
                                                <p>
                                                </p>
                                                <ul class="list-style-two">
                                                    <li>Class Information Management</li>
                                                    <li>Class Upgrade / Promote</li>
                                                    <li>Student Profile &amp; Images</li>
                                                    <li>Student's Information</li>
                                                    <li>Student Sibling Mapping</li>
                                                    <li>Multi-purpose Name Slip</li>
                                                    <li>Student ID Card Generation</li>
                                                </ul>
                                                <p></p>
                                                <!-- <button class="btn-small btn-primary" onclick="location.href='#'" target="_blank">Read more...</button> -->
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- End Col -->
                                <div class="col-lg-4 col-md-6 dc-features-item mb-4">
                                    <a>
                                        <div class="dc-features-item-front">
                                            <div class="inner-box">
                                                <div class="icon">
                                                    <img class="normal" src="./assets/images/student.svg"
                                                        alt="school fee">
                                                </div>
                                                <h3 class="dc-features-title">Homework Management</h3>
                                            </div>
                                        </div>
                                        <div class="dc-features-item-hover">
                                            <div class="inner-box">
                                                <h3 class="dc-features-title">Homework Management</h3>
                                                <p>
                                                </p>
                                                <ul class="list-style-two">
                                                    <li>School Calendar </li>
                                                    <li>Attendance Report</li>
                                                    <li>School Calendar</li>
                                                    <li>Attendance Report</li>
                                                    <li>School Calendar</li>
                                                    <li>Attendance Report</li>
                                                    <li>Attendance Report</li>
                                                </ul>
                                                <p></p>
                                                <!-- <button class="btn-small btn-primary" onclick="location.href='#'" target="_blank">Read more...</button> -->
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- End Col -->
                                <div class="col-lg-4 col-md-6 dc-features-item mb-4">
                                    <a>
                                        <div class="dc-features-item-front">
                                            <div class="inner-box">
                                                <div class="icon">
                                                    <img class="normal" src="./assets/images/Certificat.svg"
                                                        alt="school fee">
                                                </div>
                                                <h3 class="dc-features-title">Certificate Management</h3>
                                            </div>
                                        </div>
                                        <div class="dc-features-item-hover">
                                            <div class="inner-box">
                                                <h3 class="dc-features-title">Certificate Management</h3>
                                                <p>
                                                </p>
                                                <ul class="list-style-two">
                                                    <li>School Calendar </li>
                                                    <li>Attendance Report</li>
                                                    <li>School Calendar</li>
                                                    <li>Attendance Report</li>
                                                    <li>School Calendar</li>
                                                    <li>Attendance Report</li>
                                                    <li>Attendance Report</li>
                                                </ul>
                                                <p></p>
                                                <!-- <button class="btn-small btn-primary" onclick="location.href='#'" target="_blank">Read more...</button> -->
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- End Col -->
                            </div><!-- End Row -->
                        </div>
                    </section>
                    <!--  -->

                    <section class="classes-section border-top pt-5">
                        <div class="container">
                            <div class="sec-title">
                                <h2>Our Gallery</h2>
                            </div>
                            <main class="grid mb-5">
                                <?php
                                $mysql = mysqli_query($conn, "SELECT * FROM images");
                                while($res = mysqli_fetch_array($mysql)){

                                  echo  "<img src='./assets/images/upload/$res[image_name]' alt='Sample photo'>";
                                }
                                ?>
                                <img src="./assets/images/image.jpg" alt="">

                            </main>
                        </div>
                    </section>

                    <!--  -->
                    <div class="classes-section py-5 border-top">
                        <div class="container">
                            <div class="row clearfix align-items-center">
                                <div class="col-lg-6">
                                    <div class="image-wrapper">
                                        <img src="./assets/images/feature.jpg" width="100%" height="auto"
                                            alt="school app">
                                    </div>
                                </div><!-- End Col -->
                                <div class="col-lg-6 mb-5">
                                    <div class="heading-wrapper with-separator">
                                        <h2 class="h1 mb-3">Our <span>features</span>
                                        </h2>
                                    </div><!-- End Heading -->
                                    <div class="text-wrapper">

                                        <ul class="list-style-one two-col">
                                            <li><strong>Notice Board</strong></li>
                                            <li><strong>Homework</strong></li>
                                            <li><strong>Homework Submission</strong></li>
                                            <li><strong>Class Diary</strong></li>
                                            <li><strong>Live Classes</strong></li>
                                            <li><strong>Academic Report</strong></li>
                                            <li><strong>Marks Entry</strong></li>
                                            <li><strong>Academic Lesson Plan</strong></li>
                                            <li><strong>Digital Almanac</strong></li>
                                            <li><strong>Regular/Automated Attendance</strong></li>
                                            <li><strong>Leave Application</strong></li>
                                            <li><strong>Online/Offline Fees</strong></li>
                                            <li><strong>Profile</strong></li>
                                            <li><strong>Time Table</strong></li>
                                            <li><strong>Daily Feeds</strong></li>
                                            <li><strong>Bus Tracking</strong></li>
                                            <li><strong>Feedback</strong></li>
                                            <li><strong>Contact Us</strong></li>
                                            <li><strong>Push Notifications</strong></li>
                                            <li><strong>Multi Language Support</strong></li>
                                        </ul>
                                    </div>
                                </div><!-- End Col -->
                            </div><!-- End Row -->
                        </div>
                    </div>
                    <!--  -->
                    <?php
                include("./contact.php")
                ?>
                    <!--blog-section end-->

                    <!--newsletter-sec end-->

                    <!--footer end-->
                </div>
            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <section class="pager-section">
                    <div class="container">
                        <div class="pager-content text-center">
                            <h2>About Us</h2>
                            <ul>
                                <li><a href="#" title="">Home</a></li>
                                <li><span>About us</span></li>
                            </ul>
                        </div>
                        <!--pager-content end-->
                        <h2 class="page-titlee">Daimond</h2>
                    </div>
                </section>
                <!--pager-section end-->
                <section class="container my-5">
                    <div class="mdp-contact">
                        <h2 class="h1 mb-3"> About Us</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <img src="./assets/images/about.webp" alt="" style="width: 100%;">
                        </div>
                        <div class="content col-md-7">
                            <div class="about-content">
                                <p>
                                    Education is a means of developing our greatest abilities. Good and proper eduction
                                    plays a
                                    greate
                                    role in shaping our future and social as well as economical growth of our nation.
                                    Keeping the
                                    same aim
                                    ahead DIS is taking the first step in field of education, but of course with your
                                    great and precious support!
                                    The perfect school is one where the school curriculum is designed
                                    according to changing educational needs of students.

                                    Here students will be provided with a merged pattern of state Board, CBSE Board and
                                    ICSE
                                    Board
                                    content.
                                    The lesson teach are not realized until the students will not learn them so. for
                                    Play
                                    group,
                                    Nursary, Jr. KG. and Sr. KG. Activity Base learning method will be used. This will
                                    increase kids
                                    grasping power and make learning fun.

                                    Personality development through cultural programs and moral values will have special
                                    attention.
                                    Expecting your huge support for my nobel inspiration for DIS.

                                    Sometime the smallest step in the right direction ends up being the biggest step of
                                    your
                                    success
                                    and DIS is the first step of your lovely kid towards success. Thanks!
                                </p>


                                <div class="about">
                                    <h3>- Mrs. Vaishali Bombale, </h3>
                                    <p>M.A B.Ed Director</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <?php
                include("./contact.php")
                ?>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                <!--responsive-menu end-->
                <section class="pager-section">
                    <div class="container">
                        <div class="pager-content text-center">
                            <h2>Contact Us</h2>
                            <ul>
                                <li><a href="#" title="">Home</a></li>
                                <li><span>Contacts</span></li>
                            </ul>
                        </div>
                        <!--pager-content end-->
                        <h2 class="page-titlee">Daimond</h2>
                    </div>
                </section>
                <!--pager-section end-->
                <?php
                include("./contact.php")
                ?>

            </div>
        </div>
    </div>
    <?php


    include("./components/Footer.html");

?>

    
    <!-- <script src="./assets/js/bundle.min.js"></script> -->

</body>

</html>