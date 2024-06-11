<?php
include "includes/header.php";
include "includes/navbar.php";
?>

<body class="sch_body">

    <section class="sch_section">
        <div class="container">
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 text-center">
                    <a href="" class="btn slide_left_btn mb-1">
                        << </a>

                            <div class="date_div">
                                <span class="date">20 may</span>
                                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0 days_timing">
                                    <li class="nav-item dropdown" id="dropdown">
                                        <a class="dropdown-toggle date_dropdown" role="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton1">

                                            <a class="dropdown-item" href="#">Daily</a>

                                            <a class="dropdown-item" href="#">Week
                                            </a>

                                            <a class="dropdown-item" href="#">Month</a>

                                        </ul>
                                    </li>

                                </ul>

                            </div>

                            <!-- All  -->
                            <div class="date_div">
                                <span class="date">All</span>
                                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0 days_timing">
                                    <li class="nav-item dropdown" id="dropdown">
                                        <a class="dropdown-toggle date_dropdown" role="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item" href="#">All</a>
                                            <a class="dropdown-item" href="#">Lecture
                                            </a>
                                            <a class="dropdown-item" href="#">Test</a>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <a href="" class="btn slide_right_btn mb-1">>></a>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 sch_card_col">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6"> <span class="time_heading text-start">Mon, May 20, 2024</span></div>
                            <div class="col-lg-6 text-end">
                                <a href="" class="pdf fw-bold"><i class="fa-solid fa-file-pdf"></i>PDF</a>
                            </div>
                        </div>
                    </div>
                    <div class="card sch_card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="sch_card_head card-title">07:30-9:00 MWF DM BY ALOK SIR
                                        </span>
                                    </div>
                                    <div class="col-lg-6 text-lg-end"> <a
                                            class="btn p-1 Lecture_btn text-end">Lecture</a>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="row mt-lg-1">
                                    <!-- <div class="col-lg-6"> <span class="timing_pera card-text"><i
                                                class="fa-solid fa-clock"></i> 07:30 am-9:00 am <i
                                                class="fa-solid fa-user m-1"></i>Mr. Alok
                                            Sir <i class="fa-solid fa-book"></i> Blog
                                        </span></div> -->
                                    <div class="col-lg-6 p-1">
                                        <span class="timing_pera card-text">
                                            <i class="fa-solid fa-clock"></i> 07:30 am-9:00 am
                                        </span>
                                        <div class="d-lg-none"></div>
                                        <span class="timing_pera card-text ">
                                            <i class="fa-solid fa-user m-1"></i>Mr. Alok Sir

                                        </span>
                                        <div class="d-lg-none"></div>

                                        <span class="timing_pera card-text">
                                            <i class="fa-solid fa-book"></i> wp-form
                                        </span>
                                        <div class="d-lg-none"></div>
                                    </div>
                                    <div class="col-lg-6 text-lg-end">
                                        <a class="btn btn-success "><i class="fa-solid fa-video"></i>
                                            View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
include "includes/footer.php";
?>