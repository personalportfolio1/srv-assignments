<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalised Study Abroad LP</title>
    <!-- jquery cdn links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- bootstrap cdn links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css links-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive-style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
    <!-- header start -->
    <header class="bg-light">
        <nav class="navbar navbar-expand-lg bg-light ">
            <div class="container">
                <a href="index.html" class="navbar-brand ">
                    <img srcset="assets/images/logo/logo1.png 700w,assets/images/logo/logo2.png 1200w" />
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navitem">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navitem">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="javascript:void()," class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void()," class="nav-link">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void()," class="nav-link">Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void()," class="nav-link">Campus</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void()," class="nav-link">Events</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void()," class="nav-link">Recruiters</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- header end -->
    <!-- banner start -->
    <div class="container-fluid " id="banner">
        <div class="container forms">
            <div class="row">
                <div class="col-lg-4 col-md-6  bg-white offset-lg-8  offset-md-6  my-5 rounded-4 p-3 ">
                    <div class="row pt-3">
                        <div class="col-md-11 ">
                            <form method="post" action="#">
                                <h4>Apply Now</h4>
                                <div class="form-group ">
                                    <div class="name">
                                        <input type="text" class="form-control" placeholder="Name" name="name"
                                            id="name">
                                        <div id="name-err-msg" style="color:red;font-size:12px;"></div>
                                    </div>
                                    <div class="email mt-2">
                                        <input type="text" class="form-control" placeholder="Email" name="email"
                                            id="email">
                                        <div id="email-err-msg" style="color:red;font-size:12px;"></div>
                                    </div>
                                    <div class="phone-no mt-2">
                                        <input type="text" class="form-control" placeholder="Phone Number"
                                            name="phone-no" id="phone-no">
                                        <div id="phone-err-msg" style="color:red;font-size:12px;"></div>
                                    </div>
                                    <div class="state mt-2" name="state">
                                        <select class="form-select" id="state">
                                            <option value="">Select State</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Gujrat">Gujarat</option>
                                            <option value="Kerala">Kerala</option>
                                        </select>
                                        <div id="state-err-msg" style="color:red;font-size:12px;"></div>

                                    </div>
                                    <div class="city mt-2">
                                        <select class="form-select" id="city">
                                            <option value="">Select City</option>
                                            <option value="Shirdi">Shirdi</option>
                                            <option value="Pune">Pune</option>
                                            <option value="Mumbai">Mumbai</option>
                                        </select>
                                        <div id="city-err-msg" style="color:red;font-size:12px;"></div>
                                    </div>
                                    <div class="work-experience my-2">
                                        <select class="form-select" id="work-experience">
                                            <option value="">Work Experience</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        <div id="work-exp-err-msg" style="color:red;font-size:12px;"></div>
                                    </div>
                                    <div class="form-group ms-lg-3 ms-0">
                                        <div class="g-recaptcha" data-sitekey="6Le6wdwjAAAAAG8NeCsnbpfFLn0VgHihhyeD-y6D">
                                        </div>
                                    </div>
                                    <input type="submit" class="buttons mt-2 py-2" value="submit" onclick="register();">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn text-white " id="apply-now">Apply Now</a>
    </div>
    <!-- banner end-->
    <!-- section-1 start -->
    <section id="About-parul-university">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2 order-lg-1 align-self-center px-3 mb-md-0 mb-5">
                    <div class="title">
                        <h2>About parul university’s study abroad</h2>
                    </div>
                    <div class="content">
                        <p> The Parul University Study Abroad Center provides students with leading
                            opportunities to
                            pursue
                            their studies abroad under the guidance of leading experts. The University’s ties
                            with
                            strategic
                            Universities worldwide across Europe, Australia, USA, Canada, amongst others. We
                            provide
                            the
                            best
                            assistance in language coaching, admissions, and visa processing which allows you to
                            reach your
                            academic dreams.</p>
                    </div>
                </div>
                <div class="col-md-6 order-lg-2 order-md-1 mt-lg-0 mt-md-3">
                    <div class="m-pharm-image ">
                        <img srcset="assets/images/m-pharm/m-pharms.png 500w ,assets/images/m-pharm/m-pharms2.png 1000w"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section-1 end-->
    <!-- parul university experience start -->
    <section id="university-experience">
        <div class="container">
            <div class="row">
                <h2 class="text-center py-4">Choose the parul university experience!</h2>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-12 mx-lg-auto  ">
                    <div class="row py-2">
                        <ul class="list-unstyled d-flex justify-content-evenly text-center">
                            <li class="digits">
                                <h5><span id="counter1"></span>+</h5>
                                <p>Faculties</p>
                            </li>
                            <li class="digits">
                                <h5><span id="counter2"></span>+</h5>
                                <p>Foreign <br>Partnerships</p>
                            </li>
                            <li class="digits">
                                <h5><span id="counter3"></span>+</h5>
                                <p>Placements in <br>1,600+ Companies</p>
                            </li>
                            <li class="digits">
                                <h5><span id="counter4"></span>+</h5>
                                <p>In-Campus <br>Residency</p>
                            </li>
                            <li class="digits">
                                <h5><span id="counter5"></span>+</h5>
                                <p>Acres<br> Campus</p>
                            </li>
                        </ul>
                    </div>
                    <div class="row py-2">
                        <ul class="list-unstyled d-flex justify-content-evenly text-center ">
                            <li class="digits ">
                                <h5><span id="counter6"></span>+</h5>
                                <p>Students</p>
                            </li>
                            <li class="digits">
                                <h5><span id="counter7"></span>+</h5>
                                <p>International <br>Students</p>
                            </li>
                            <li class="digits">
                                <h5><span id="counter8"></span>+</h5>
                                <p>National Awards<br> & Ranking</p>
                            </li>
                            <li class="digits">
                                <h5><span id="counter9"></span>+</h5>
                                <p>Professors from <br>IITs, NITs & IISc</p>
                            </li>
                            <li class="digits">
                                <h5><span id="counter10"></span>&nbsp;Cr</h5>
                                <p>in Entrepreneurship <br>Funding</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- parul university experience end -->
    <!-- why PU study start -->
    <section id="why-pu" class="mt-5">
        <div class="container">
            <div class="row">
                <h2 class=" text-center">WHY PU study abroad center</h2>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-12 mx-lg-auto">
                    <div class="row py-5 ">
                        <div class="col-md-3 col-6 mb-md-0 mb-5">
                            <div class="leading-universities first-chart ">
                                <p>100% Alignment with Leading Universities</p>
                            </div>
                        </div>
                        <div class="col-md-3  col-6  mb-md-0 mb-5">
                            <div class="leading-universities second-chart ">
                                <p class="px-1">98% Language Coaching Success Rate</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="leading-universities first-chart ">
                                <p>Effective Career Guidance & Grooming</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="leading-universities second-chart ">
                                <p>Highly Strategic Global Partnerships</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why PU study end  -->
    <!-- we help you section start -->
    <section id="we-help-you">
        <div class="container">
            <div class="row">
                <div class="how text-center">
                    <p>Here is how</p>
                    <h2>We help you study abroad</h2>
                </div>
            </div>
            <div class="row help-to-study ">
                <div class="col-lg-9 col-md-12 mx-lg-auto">
                    <div class="row ">
                        <div class="col-md-3 col-6 text-center">
                            <div class="free-counselling  pb-3">
                                <img srcset="assets/images/counceling/free1.png 700w,assets/images/counceling/free2.png 1200w"
                                    class="img-fluid ">
                            </div>
                            <div class="info">
                                <span class="heading">Free Counseling</span>
                                <p class="content">Make the best well informed choices through our counseling free
                                    of cost</p>
                            </div>

                        </div>
                        <div class="col-md-3 col-6  text-center">
                            <div class="free-counselling pb-3">
                                <img srcset="assets/images/Flight/Flight1.png 700w,assets/images/Flight/Flight2.png 1200w"
                                    class="img-fluid">
                            </div>
                            <div class="info">
                                <span class="heading">Flight Ticket Booking</span>
                                <p class="content">We ensure that you get the best travel plan through flight
                                    bookings</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mt-md-0 mt-3 text-center">
                            <div class="free-counselling pb-3">
                                <img srcset="assets/images/Visa/Visa1.png 700w,assets/images/Visa/Visa2.png 1200w"
                                    class="img-fluid">
                            </div>
                            <div class="info">
                                <span class="heading">Visa Application</span>
                                <p class="content">Our experts take you through the preparation for your visa
                                    documentations</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mt-md-0 mt-3 text-center">
                            <div class="free-counselling pb-3">
                                <img srcset="assets/images/Admission-Process/Admission2.png 700w,assets/images/Admission-Process/Admission2.png 1200w"
                                    class="img-fluid">
                            </div>
                            <div class="info">
                                <span class="heading">Admission Processing</span>
                                <p class="content">We help you find the best Universities Abroad for your higher
                                    studies</p>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-md-9 col-12 mx-md-auto">
                            <div class="row">
                                <div class="col-md-4 col-6 text-center">
                                    <div class="free-counselling pb-3">
                                        <img srcset="assets/images/University/University2.png 700w,assets/images/University/University2.png 1200w"
                                            class="img-fluid">
                                    </div>
                                    <div class="info">
                                        <span class="heading">University Alignment</span>
                                        <p class="content">Aligning you with best University which meets academics your
                                            needs</p>
                                    </div>
                                </div>
                                <div class="col-md-4  col-6 text-center">
                                    <div class="free-counselling pb-3">
                                        <img srcset="assets/images/Coaching/Coaching1.png 700w,assets/images/Coaching/Coaching2.png 1200w"
                                            class="img-fluid">
                                    </div>
                                    <div class="info">
                                        <span class="heading">Language Coaching</span>
                                        <p class="content">IELTS, German and French Language Coaching for Your Next
                                            Destination</p>
                                    </div>
                                </div>
                                <div class="col-md-4  col-6 mx-sm-0 mx-auto mt-md-0 mt-3 text-center">
                                    <div class="free-counselling pb-3">
                                        <img srcset="assets/images/Pre-Departure/Departure1.png 700w,assets/images/Pre-Departure/Departure2.png 1200w"
                                            class="img-fluid">
                                    </div>
                                    <div class="info">
                                        <span class="heading">Pre-Departure Orientation</span>
                                        <p class="content">Get prepared to venture to your next global University</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- we help you section end -->
    <!-- our students section start -->
    <section id="our-student">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-9 col-md-11 mx-md-auto">
                    <div class="row text-center pb-5">
                        <h2>Our students who made it abroad</h2>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-3 col-6 mb-5 mb-md-0 students-name-university">
                            <div class="students-name px-4 ">
                                <span class="title">Hobotiana Elvinah Randrianaivo & Lucian Ratsimamitaka</span>
                                <p class="university">University of Paris Saclay, France</p>
                            </div>
                            <img src="assets/images/prev-icon.svg">
                        </div>
                        <div class="col-md-3 col-6 mb-5 mb-md-0 ">
                            <img srcset="assets/images/student-images/students-image1.png 700w,assets/images/student-images/students-image2.png 1200w"class="img-fluid our-stud-image">
                        </div>
                        <div class="col-md-3 col-6 students-name-universitys mb-5 mb-md-0 ">
                            <div class="students-name px-4">
                                <span class=" akshar-patel">AKSHAR PATEL</span>
                                <p class="university">Fachhochschule des Mittelstands (FHM) Germany</p>
                            </div>
                            <img src="assets/images/prev-icon.svg">
                        </div>
                        <div class="col-md-3 col-6 mb-5 mb-md-0 ">
                            <img srcset="assets/images/student-images/students-image1.png 700w,assets/images/student-images/students-image2.png 1200w"class="img-fluid our-stud-image">
                        </div>
                    </div>
                    <div class="row g-0 ">
                        <div class="col-md-3 col-6 mb-5 mb-md-0">
                            <img srcset="assets/images/student-images/students-image1.png 700w,assets/images/student-images/students-image2.png 1200w"class="img-fluid our-stud-image">
                        </div>
                        <div class="col-md-3 col-6 mb-5 mb-md-0 students-name-university ">
                            <div class="students-name px-4 ">
                                <span class="title">SIMRAN KRISHNANI</span>
                                <p class="university">University of Paris Saclay, France</p>
                            </div>
                            <img src="assets/images/next-yellow-icon.svg" id="next-arrow">
                        </div>

                        <div class="col-md-3 col-6 mb-5 mb-md-0">
                            <img srcset="assets/images/student-images/students-image1.png 700w,assets/images/student-images/students-image2.png 1200w"class="img-fluid our-stud-image">
                        </div>

                        <div class="col-md-3 col-6 mb-5 mb-md-0 students-name-universitys">
                            <div class="students-name px-4">
                                <span class=" akshar-patel">Preyansh Shah</span>
                                <p class="university">Heriot Watt University United Kingdom</p>
                            </div>
                            <img src="assets/images/next-yellow-icon.svg" id="next-arrow">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- our students section end -->
    <!-- languages section start    -->
    <section id="languages">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 mx-lg-auto">
                    <div class="row">
                        <div class="col-md-6 mb-md-0 mb-5">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="title">
                                        <h3>Providing The Right Language Training For Future Education</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <p>The Parul University Study Abroad Center provides students with leading
                                        opportunities to pursue their studies abroad under the guidance of leading
                                        experts. The University’s ties with strategic Universities worldwide across
                                        Europe, Australia, USA, Canada, amongst others. We provide the best assistance
                                        in language coaching, admissions, and visa processing which allows you to reach
                                        your academic dreams.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-1 offset-0">
                            <div class="why-learn-languages">
                                <h5>Why learn languages with PU</h5>
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void();"><img src="assets/images/next-icon.svg"
                                                class="pe-2">Free mock tests</a></li>
                                    <li><a href="javascript:void();"><img src="assets/images/next-icon.svg"
                                                class="pe-2">Free 1 week demo class</a></li>
                                    <li><a href="javascript:void();"><img src="assets/images/next-icon.svg"
                                                class="pe-2">500+ student enrollment</a></li>
                                    <li><a href="javascript:void();"><img src="assets/images/next-icon.svg"
                                                class="pe-2">Trainers with 10+ years of IELTS teaching experience</a>
                                    </li>
                                    <li><a href="javascript:void();"><img src="assets/images/next-icon.svg"
                                                class="pe-2">Options for online and offline classes</a></li>
                                    <li><a href="javascript:void();"><img src="assets/images/next-icon.svg"
                                                class="pe-2">Exam oriented coaching</a></li>
                                    <li><a href="javascript:void();"><img src="assets/images/next-icon.svg"
                                                class="pe-2">Special weekend batches</a></li>
                                    <li><a href="javascript:void();"><img src="assets/images/next-icon.svg"
                                                class="pe-2">Skill focused Learning</a></li>
                                    <li><a href="javascript:void();"><img src="assets/images/next-icon.svg"
                                                class="pe-2">Long term membership with a one-time fee payment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- languages section end    -->
    <!-- glympse start -->
    <section id="glympse">
        <div class="container">
            <div class="row text-center py-3">
                <h2>A Glimpse of study abroad possibilities</h2>
            </div>
            <div class="row">
                <div class="col-md-9 mx-auto ">
                    <div class="row pt-4 gx-5">
                        <div class="col-md-4 mb-md-0 mb-3 ">
                            <div class="usa">
                                <img srcset="assets/images/glimpse/Rowanuni1.png 700w,assets/images/glimpse/Rowanuni2.png 1200w" class="img-fluid">
                                <h5 class="pt-3">USA</h5>
                                <p>Rowan University<br>University of Detroit Mercy<br>National University<br>Western
                                    Illinois University</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-md-0 mb-3">
                            <div class="usa">
                                <img srcset="assets/images/glimpse/nottingum1.png 700w,assets/images/glimpse/nottingum2.png 1200w" class="img-fluid">
                                <h5 class="pt-3">UK</h5>
                                <p>Nottingham Trent University<br>Nottingham Trent University<br>Canterbury Christ
                                    Church University</p>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="usa">
                                <img srcset="assets/images/glimpse/neoma-school1.png 700w,assets/images/glimpse/neoma-school2.png 1200w" class="img-fluid">
                                <h5 class="pt-3">Franse</h5>
                                <p>Neoma Business School<br>College De Paris<br>Rennes School of Business</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-7 mx-auto">
                    <div class="row gx-5">
                        <div class="col-md-6 mb-md-0 mb-3">
                            <div class="usa">
                                <img srcset="assets/images/glimpse/Caucasus1.png 700w,assets/images/glimpse/Caucasus2.png 1200w" class="img-fluid">
                                <h5 class="pt-3">Georgia</h5>
                                <p>Caucasus University</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="usa">
                                <img srcset="assets/images/glimpse/japan1.png 700w,assets/images/glimpse/japan2.png 1200w" class="img-fluid">
                                <h5 class="pt-3">Japan</h5>
                                <p>NIAS & other countries</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- glympse end -->
    <!-- they did it section start -->
    <section id="they-did-it">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-11 mx-auto">
                    <div class="row ">
                        <div class="col-md-4 col-11 text-md-start text-center  mb-md-0 mb-4 align-self-center gx-5 ">
                            <h3>They Did It,<br> So Can You</h3>
                            <h5>Our Successful Students</h5>
                        </div>
                        <div class="col-md-4  gx-5 offset-3 offset-md-0">
                            <div class="row">
                                <div class="col-md-8 col-6 mx-md-0">
                                    <img srcset="assets/images/student-images/students-image1.png 700w,assets/images/student-images/students-image2.png 1200w " class="img-fluid">
                                </div>
                                <div class="text bg-white students student-info text-center  pt-2  mb-md-0 mb-5 ">
                                    <p class="student-name">Babyesh Vithlani</p>
                                    <p class="score">7.5 IELTS Score</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gx-5 offset-3 offset-md-0">
                            <div class="row">
                                <div class="col-md-8 col-6  mx-md-0">
                                    <img srcset="assets/images/student-images/students-image1.png 700w,assets/images/student-images/students-image2.png 1200w " class="img-fluid">
                                </div>
                                <div class="text bg-white students student-info text-center   pt-2 ">
                                    <p class="student-name">Harshrajsinh Jadeja</p>
                                    <p class="score">7.5 IELTS Score</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-md-4  gx-5 offset-3 offset-md-0">
                            <div class="row">
                                <div class="col-md-8  col-6  mx-md-0">
                                    <img srcset="assets/images/student-images/students-image1.png 700w,assets/images/student-images/students-image2.png 1200w " class="img-fluid">
                                </div>
                                <div class="text bg-white students student-info text-center  pt-2  mb-md-0 mb-5">
                                    <p class="student-name">Jay Gadhiya</p>
                                    <p class="score">7 IELTS Score</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 gx-5 offset-3 offset-md-0">
                            <div class="row">
                                <div class="col-md-8  col-6  mx-md-0">
                                    <img srcset="assets/images/student-images/students-image1.png 700w,assets/images/student-images/students-image2.png 1200w " class="img-fluid">
                                </div>
                                <div class="text bg-white students student-info text-center  pt-2  mb-md-0 mb-5">
                                    <p class="student-name">Hishwa Surti</p>
                                    <p class="score">7.5 IELTS Score</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4   gx-5 offset-3 offset-md-0">
                            <div class="row">
                                <div class="col-md-8 col-6  mx-md-0">
                                    <img srcset="assets/images/student-images/students-image1.png 700w,assets/images/student-images/students-image2.png 1200w " class="img-fluid">
                                </div>
                                <div class="text bg-white students student-info text-center  pt-2  ">
                                    <p class="student-name">Vraj Pandya</p>
                                    <p class="score">German A1 Score 60/100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- they did it section end -->
    <!-- scholarship apportunities start -->
    <div class="container-fluid mt-5" id="scholarship">
        <div class="row">
            <div class="scholarship-info text-center ">
                <h4>Scholarship Opportunities To Support Your Learning</h4>
                <p class="pt-lg-0 pt-1">Scholarships are available for students who achieve a band score of 7.5 or
                    higher, with no less
                    than 6 bands in any skill.</p>
            </div>
        </div>
    </div>
    <!-- scholarship apportunities end -->
    <!-- our happy learners start-->
    <section id="happy-learnesrs">
        <div class="container">
            <div class="row">
                <h3 class="text-center py-4">Our Happy Learners</h3>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-12  mx-md-auto">
                    <div class="row  d-flex justify-content-evenly">
                        <div class="col-md-5  col-12  text-center mb-md-0 mb-5">
                            <div class="first-card  py-4  position-relative">
                                <img srcset="assets/images/comma/inverted-comma1.png 700w,assets/images/comma/inverted-comma2.png 1200w">
                                <p class="info  px-4 py-3">I am more than grateful for the help and assistance which I
                                    received from the Internat ional Relations Cell- study abroad desk. I always wanted
                                    to know how to make the best choice in terms of my future studies and the study
                                    abroad team helped to understand the best prospective Universities I could go to and
                                    I am glad to have been able to find Conestoga Canada.</p>
                                <p class="stud-name">Babyesh Vithlani<br> Conestoge, Canada</p>
                            </div>
                            <img srcset="assets/images/Jayraj/Jayraj1.png 700w,assets/images/Jayraj/Jayraj2.png 1200w" class="position-absolute translate-middle learners-image">
                        </div>
                        <div class="col-md-5  col-12 text-center">
                            <div class="first-card  py-4 position-relative">
                                <img srcset="assets/images/comma/inverted-comma1.png 700w,assets/images/comma/inverted-comma2.png 1200w">
                                <p class="info px-4 pt-3">One of my major concerns was regarding my ability to be
                                    proficient
                                    in the English language as well as understanding the processes which were required
                                    for me to study abroad. I am grateful for the Cell’s linguistics study centre as I
                                    was able to gain the much needed coaching regarding IELTS and I was also able to
                                    receive the necessary guidance in processing my visa and all the required
                                    documentations.</p>
                                <p class="stud-name">Simran Krishnani <br>Conestoge, Canada</p>
                            </div>
                            <img srcset="assets/images/Jayraj/Jayraj1.png 700w,assets/images/Jayraj/Jayraj2.png 1200w"
                                class="position-absolute translate-middle learners-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our happy learners end-->
    <!-- footer start -->
    <footer>
        <p class="text-center text-white p-2">&copy; Copyright 2021. All Rights Reserved by Parul University.</p>
    </footer>
    <!-- footer end -->
    <script>
        $(document).ready(function () {
            // toggle apply now button
            $('#apply-now').click(function () {
                $('.forms').toggle();
            });
            // toggle apply now button end
            // recaptcha
            $('.buttons').click(function () {
                var response = grecaptcha.getResponse();
                // alert(response);
                if (response.length == 0) {
                    alert("Please verify you are not a Robot");
                }
            });
        });
    </script>
    <!-- custom js link -->
    <script src="assets/js/main.js"></script>
    <!-- js links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>