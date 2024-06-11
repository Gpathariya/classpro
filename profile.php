<?php
include "includes/header.php";
include "includes/navbar.php";
?>

<body class="profile_body">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 table-responsive">
                <h2 class="std_head">Student</h2>
                <table class="table table-bordered profile_tbl">
                    <thead>
                        <td colspan="2" class="p-2">
                            <img src="img/mahadev.jpg" alt="" class="profile_img">
                            <span class="std_name ms-lg-5">Student Name</span>
                        </td>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><i class="fa fa-list-alt"></i></td>
                            <td class="text-start">
                                NG /S23/DM-1YEAR/23498
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><i class="fa fa-user"></i></td>
                            <td class="text-start">
                                VISHAL OJHA
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><i class="fa fa-male"></i></td>
                            <td class="text-start">
                                Male
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><i class="fa fa-map-marker"></i></td>
                            <td class="text-start">
                                RZB-41, GALI NO-2, DEEP ENCLAVE, PART-2, UTTAM NAGAR, DELHI-110059
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><i class="fa fa-birthday-cake"></i></td>
                            <td class="text-start">
                                20 Feb, 2003
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><i class="fa fa-mobile-phone"></i></td>
                            <td class="text-start"> +91 9999999999, 8888888888 </td>
                        </tr>

                    </tbody>

                </table>
                <table class="table table-bordered">

                    <h3 class="rcrvy_mail">Recovery email</h3>
                    <td class="p-3 nt_avai text-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Not Availble click here to put your email
                        <!-- <i class="fa fa-pencil text-end"></i> -->
                    </td>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title md_title" id="exampleModalLabel">Update your Recovery
                                        information
                                    </h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body md_body">
                                    <p> This email will help you to reset your password</p>
                                    <p>Recovery email</p>
                                    <form action="">
                                        <input type="email" class="form-control" placeholder="Enter you email">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary fw-semibold"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn save_md_btn">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </table>

            </div>
            <div class="col-lg-6">
                <h2 class="std_head">Guardian</h2>
                <table class="table table-bordered profile_tbl">
                    <thead>
                        <td colspan="2" class="p-2">
                            <!-- <img src="img/mahadev.jpg" alt="" class="profile_img"> -->
                            Father

                        </td>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><i class="fa fa-user"></i></td>
                            <td class="text-start">
                                Mr. XYZ
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><i class="fa fa-mobile-phone"></i></td>
                            <td class="text-start">
                                +91 9999999999, 8888888888
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><i class="fa fa-envelope"></i></td>
                            <td class="text-start">
                                abc@gmail.com
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>


<?php
include "includes/footer.php";
?>