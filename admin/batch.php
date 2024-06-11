<?php
include "../config/db.php";
include "includes/header.php";
include "includes/navbar.php";
?>

<body class="att_body">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <?php
                                $branch_id = $_GET['branch_id'];
                                $sql = "SELECT * FROM branch WHERE branch_id='$branch_id'";
                                $qry = mysqli_query($con, $sql) or die("Fetching Branch name Query failed");
                                $row = mysqli_num_rows($qry);
                                if ($row > 0) {
                                    while ($arr = mysqli_fetch_assoc($qry)) {
                                        ?>
                                        <div class="col-lg-6">
                                            <h3 class="sch_head">Schedule <span class="inst_name">(IICS
                                                    <?php echo $arr['branch_name']; ?> )</span></h3>
                                            <span class="crnt_date">22 may 2024</span>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='4'>No Record Found </td></tr>";
                                }
                                ?>
                                <div class="col-lg-6 text-lg-end">
                                    <a href="" class="btn nw_sch_btn mt-3"><span class="plus_sign">+</span>New
                                        Schedule</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row mt-2">
                        <div class="col-lg-6">
                            <p class="crnt_dt">22 May 2024</p>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <a href="" class="sms_rep_link"><i class="fa-solid fa-envelope"></i>sms</a>
                            <a href="" class="sms_rep_link"><i class="fa-solid fa-download"></i>Report</a>
                            <!-- <a href="" clas="text-danger">
                                sms
                            </a>
                            <a href="" clas="sms_rep_link"><i class="fa-solid fa-download"></i>Report</a> -->
                        </div>
                    </div>
                </div>

                <div class="container">

                    <?php
                    $branch_id = $_GET['branch_id'];
                    $sql1 = mysqli_query($con, "SELECT * FROM teacher LEFT JOIN branch ON teacher.branch_id = branch.branch_id WHERE branch.branch_id=$branch_id") or die("Fetching branch Query failed");
                    $row1 = mysqli_num_rows($sql1);
                    if ($row1 > 0) {
                        while ($array = mysqli_fetch_assoc($sql1)) {
                            ?>
                            <div class="row mt-1">
                                <div class="col p-0">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-1 p-0">
                                                        <form action="">
                                                            <div>
                                                                <label for="check"></label>
                                                                <input type="checkbox" class="form-check-input check_box"
                                                                    id="check" name="check">
                                                            </div>

                                                            <?php
                                                            $sql2 = "SELECT * FROM students ";

                                                            ?>



                                                        </form>
                                                    </div>
                                                    <div class="col-11 p-0">
                                                        <a class="card-text t_d_f"
                                                            href="stud_attendance.php?batch_id=<?php echo $array['batch_id']; ?>">
                                                            <?php echo $array['timing'] . "-" . $array['days'] . "-" .
                                                                $array['course'] ?>
                                                            BY <?php echo $array['faculty'] ?></a>
                                                        <span class="dm_heading">(<?php echo $array['course'] ?>)</span> <br>
                                                        <span class="timing_pera card-text">
                                                            <i class="fa-solid fa-clock"></i> <?php echo $array['timing'] ?>
                                                        </span>
                                                        <div class="d-lg-none"></div>
                                                        <span class="timing_pera card-text ">
                                                            <i class="fa-solid fa-user m-1"></i><?php echo $array['faculty'] ?>
                                                        </span>
                                                        <div class="d-lg-none"></div>
                                                        <span class="timing_pera card-text">
                                                            <i class="fa-solid fa-book"></i> wp-form
                                                        </span>
                                                        <div class="d-lg-none"></div>
                                                        <span class="timing_pera card-text">
                                                            <i class="fa-solid fa-calendar-days"></i>
                                                            <?php echo $array['timing'] ?>         <?php echo $array['days'] ?>
                                                            <?php
                                                            echo $array['course'] . " " . $array['faculty'] ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="container">
                                    <div class="row">
                                        <div class="col-9">

                                        </div>
                                        <div class="col-3"></div>
                                    </div>
                                </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php

                        }
                    } else {
                        // echo 
                        // "<tr>
                        // <td colspan='4'>No Record Found </td>
                        // </tr>                    
                        // ";
                        ?>
                        <div class="alert alert-light" role="alert">
                            <span class="fw-semibold"> No Record Found here !</span>
                        </div>
                        <?php
                    }
                    ?>

                    <!-- row End here -->
                </div>
            </div>
            <div class="col-lg-4">
                <?php
                include "includes/right-sidebar.php";
                ?>
                <!-- 
                    <div class="card">
                    <div class="card-body">
                        <h2 class="fltr_heading mb-4 ">Filter</h2>
                        <span class="shw mt-5">Show</span>
                        <div class="mt-2">
                            <a href="" class="active btn shw_btn">All</a>
                            <a href="" class="active btn shw_btn">Active</a>
                            <a href="" class="active btn shw_btn">Archived</a>
                        </div>
                        <hr>
                        <span class="shw mt-2">By Status</span>
                        <div class="mt-2">
                            <a href="" class="active btn shw_btn">All</a>
                            <a href="" class="active btn shw_btn">Due</a>
                            <a href="" class="active btn shw_btn">Marked</a>
                            <a href="" class="active btn shw_btn">Cancelled</a>
                        </div>
                        <hr>
                        <span class="shw mt-2">By Date :</span>
                        <form action="" class="mt-2 mb-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control dat_inp mt-2" value="22 May, 2024">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control dat_inp mt-2" value="22 May, 2024">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="mt-2">
                            <span class="shw">By Standard:</span>
                            <select name="" id="" class="form-select mt-2 slct" required>
                                <option selected disabled class="sls text-danger fw-semibold">Select a Standard</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>
                        <div class="mt-2">
                            <span class="shw">By Faculty:</span>
                            <select name="" id="" class="form-select mt-2 slct" required>
                                <option selected disabled class="sls text-danger fw-semibold">Select a Faculty</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>
                        <div class="mt-2">
                            <span class="shw">By Academic Year & Batch:</span>
                            <select name="" id="" class="form-select mt-2 slct" required>
                                <option selected disabled class="sls text-danger fw-semibold">Select an Academic year
                                </option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>
                        <div>
                            <select name="" id="" class="form-select mt-2 slct" required>
                                <option selected disabled class="sls text-danger fw-semibold">Select a Batch</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>
                    </div>
                </div>
                 -->
            </div>



        </div>
    </div>

</body>
<?php
include "includes/footer.php";
?>