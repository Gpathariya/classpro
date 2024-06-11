<?php
// error_reporting(0);
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
                <div class="col-lg-6">
                  <?php

                  // This is with OOPS Concept
                  
                  // $batch_id = $_GET['batch_id'];
                  
                  // $sql = "SELECT * FROM teacher LEFT JOIN branch ON teacher.branch_id = branch.branch_id WHERE teacher.batch_id = ?";
                  // $stmt = $con->prepare($sql);
                  
                  // if ($stmt) {
                  //   // Bind the batch_id parameter to the query
                  //   $stmt->bind_param("i", $batch_id);
                  //   // Execute the query
                  //   $stmt->execute();
                  //   // Get the result
                  //   $result = $stmt->get_result();
                  
                  //   // Check the number of rows returned
                  //   if ($result->num_rows > 0) {
                  //     // Fetch and display the results
                  //     while ($arr = $result->fetch_assoc()) {
                  //       echo "<pre>";
                  //       print_r($arr);
                  //       echo "</pre>";
                  //     }
                  //   } else {
                  //     echo "No results found.";
                  //   }
                  // }
                  // } else {
                  // echo "Invalid batch_id.";
                  // }  
                  // Close the connection
                  // $con->close();
                  





                  $batch_id = $_GET['batch_id'];
                  $sql = "SELECT * FROM teacher LEFT JOIN branch ON teacher.branch_id = branch.branch_id WHERE teacher.batch_id = '$batch_id'";

                  $qry = mysqli_query($con, $sql) or die("Fetching Teacher name and Branch Name Query failed");
                  $row = mysqli_num_rows($qry);

                  // if ($row > 0) {
                  //   while ($arr = mysqli_fetch_assoc($qry)) {
                  //     echo "<pre>";
                  //     print_r($arr);
                  //     echo $arr['branch_name'];
                  //     echo "</pre>";
                  //   }
                  // }
                  
                  if ($row > 0) {
                    while ($arr = mysqli_fetch_assoc($qry)) {
                      ?>
                      <h3 class="sch_head">
                        <?php
                        echo $arr['faculty'] ?> <span class="inst_name">(IICS
                          <?php
                          echo $arr['branch_name'] ?>)</span>
                      </h3>
                      <span class="crnt_date"><?php
                      echo $arr['date'] ?></span>
                    </div>
                    <?php
                    }
                  }
                  ?>
                <!-- <div class="col-lg-6 text-lg-end">
                                    <a href="" class="btn nw_sch_btn mt-3"><span class="plus_sign">+</span>New
                                        Schedule</a>
                                </div> -->
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row my-3">
            <div class="col-lg-6">
              <span class="shw_head">Show</span>
              <a href="" class="active btn shw_btn">All</a>
              <a href="" class="active btn shw_btn">Present</a>
              <a href="" class="active btn shw_btn">Absent</a>
            </div>
            <div class="col-lg-6 text-lg-end">
              <span class="shw_head">Mark</span>
              <a href="" class="active btn shw_btn">All</a>
              <a href="" class="active btn shw_btn">Absent</a>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col table-responsive">
              <table class="table text-center std_tbl">
                <thead>
                  <th class="text-start">Roll No</th>
                  <th>Name</th>
                  <th>Attendance</th>
                  <th colspan="2">Remark</th>
                </thead>
                <tbody>
                  <?php
                  // OOPS Concept We can use if we want
                  
                  //           $sql1 = "SELECT * FROM students 
                  //  LEFT JOIN teacher ON students.batch_id = teacher.batch_id 
                  //  WHERE students.batch_id = ?";
                  // $stmt = $con->prepare($sql1);
                  // $stmt->bind_param("i", $batch_id);
                  // $stmt->execute();
                  // $result = $stmt->get_result();
                  // Fetch and display the results
                  // if ($result->num_rows > 0) {
                  //   while ($array = $result->fetch_assoc()) {
                  //     echo "<pre>";
                  //     print_r($array);
                  //     echo "</pre>";
                  //   }
                  // } else {
                  //   echo "No results found.";
                  // }
                  


                  //   $batch_id = $_GET['batch_id'];
                  
                  // $sql1 = "SELECT * FROM students LEFT JOIN teacher ON students.batch_id = teacher.batch_id WHERE
                  //  students.batch_id='$batch_id'";
                  $sql1 = "SELECT DISTINCT stud_id, rollno, stud_name, attendance, remark, students.batch_id FROM students LEFT JOIN teacher ON students.batch_id = teacher.batch_id WHERE students.batch_id = '$batch_id' GROUP BY rollno";

                  $qry1 = mysqli_query($con, $sql1) or die("Fetching Student Query failed");
                  $row1 = mysqli_num_rows($qry1);
                  if ($row1 > 0) {
                    while ($array = mysqli_fetch_assoc($qry1)) {



                      //           $sql1 = "SELECT DISTINCT rollno, stud_name, attendance, remark, students.batch_id 
                      //  FROM students 
                      //  LEFT JOIN teacher ON students.batch_id = teacher.batch_id 
                      //  WHERE students.batch_id = '$batch_id' 
                      //  GROUP BY rollno";
                      //           $qry1 = mysqli_query($con, $sql1) or die("Fetching Student Query failed");
                  
                      //           $row1 = mysqli_num_rows($qry1);
                      // if ($row1 > 0) {
                      //   while ($array1 = mysqli_fetch_assoc($qry1)) {
                      //     $sname = $array1['stud_name'];
                      //     $srollno = $array1['rollno'];
                      //     $sattend = $array1['attendance'];
                      //     $sremark = $array1['remark'];
                      //     $batch_id = $array1['batch_id'];
                  
                      // Display or process the fetched data as needed
                      // echo "Name: $sname, Roll No: $srollno, Attendance: $sattend, Remark: $sremark, Batch ID: $batch_id<br>";
                  

                      // if ($row1 > 0) {
                      //   while ($array = mysqli_fetch_assoc($qry1)) {
                      ?>

                      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <tr>
                          <td class="text-start" id="rollno"> <?php
                          echo $array['rollno'];
                          ?> </td>
                          <td id="stud_name"><?php
                          echo $array['stud_name'];
                          ?></td>
                          <td>

                            <div>
                              <input type="checkbox" class="form-check-input checkbtn"
                                id="check<?php echo $array['stud_id']; ?>"
                                data-text-id="text<?php echo $array['stud_id']; ?>" />
                              <label id="text<?php echo $array['stud_id']; ?>"
                                for="check<?php echo $array['stud_id']; ?>">A</label>
                            </div>

                          </td>
                          <td>
                            <input type="text" class="form-control" id="remark">
                          </td>
                          <td><a href="" class="del_btn"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                      </form>
                      <?php
                    }
                  } else {
                    echo "<tr>
                    <td colspan='4'>No Record Found </td>
                    </tr>                    
                    ";
                  }
                  //   }
                  

                  // } else {
                  //   echo "No records found for the given batch_id.";
                  // }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">

            <div class="col std_appear">
              <h4>Student Appearance</h4>
              <div class="card">
                <div class="card-body">
                  <p>Student Appearance</p>
                </div>
              </div>
              <div class='alert alert-success my-3 d-none' role='alert' id="success">data inserted Successfully !</div>
              <div class='alert alert-danger my-3 d-none' role='alert' id="danger">Something Went wrong !</div>

              <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <!-- <button type="button" class="btn save_btn mt-4" name="save" id="save">Save</button> -->
                <button type="submit" class="btn save_btn mt-4" name="save">Save</button>
              </form>
            </div>

          </div>
        </div>
        <?php


        // $sql1 = "SELECT * FROM students";
        // $qry1 = mysqli_query($con, $sql1) or die("Fetching Student Query failed");
        

        // // $sql = "SELECT fname, lname, email, contact, password FROM s";
        // $result = $con->query($sql1);
        
        // if ($result->num_rows > 0) {
        //   // Process each row and insert into the target_table
        //   $stmt = $con->prepare("INSERT INTO students (stud_name,rollno,attendance,remark) VALUES (?, ?, ?, ?)");
        //   $stmt->bind_param("ssss", $stud_name, $rollno, $attendance, $remark);
        
        //   while ($row = $result->fetch_assoc()) {
        //     $stud_name = $row["stud_name"];
        //     $rollno = $row["rollno"];
        //     $attendance = $row["attendance"];
        //     $remark = $row["remark"];
        //     // $password = password_hash($row["password"], PASSWORD_DEFAULT); // Hash the password
        
        //     $stmt->execute();
        //   }
        
        //   echo "New records created successfully";
        
        //   $stmt->close();
        // } else {
        //   echo "0 results";
        // }
        
        // $conn->close();
        




        // ==============================================================================================
        // ==============================================================================================
        // ==============================================================================================
        // ==============================================================================================
        $batch_id = $_GET['batch_id'];

        $sql2 = "SELECT stud_name, rollno, attendance, remark, batch_id FROM students WHERE batch_id = '$batch_id'";
        $qry2 = mysqli_query($con, $sql2) or die("Fetching Student Query failed");

        $row2 = mysqli_num_rows($qry2);
        if ($row2 > 0) {
          while ($array2 = mysqli_fetch_assoc($qry2)) {
            $sname = $array2['stud_name'];
            $srollno = $array2['rollno'];
            $sattend = $array2['attendance'];
            $sremark = $array2['remark'];
            $batch_id1 = $array2['batch_id'];

          }
          if (isset($_POST['save'])) {
            $sql3 = "INSERT INTO students (stud_name, rollno, attendance, remark, batch_id) VALUES ('$sname','$srollno','$sattend','$sremark','$batch_id1')";
            $qry3 = mysqli_query($con, $sql3) or die("inserted failed");
            if ($qry3) {
              ?>
              <script>
                var successalrt = document.getElementById("success");
                successalrt.classList.remove("d-none");
              </script>
              <?php
            } else {
              ?>
              <script>
                var dangeralrt = document.getElementById("danger");
                dangeralrt.classList.remove("d-none");
              </script>
              <?php
            }
          }

        }

        // ====================================================
        // $sql2 = "SELECT stud_name, rollno, batch_id FROM students WHERE batch_id = '$batch_id'";
        // $qry2 = mysqli_query($con, $sql2) or die("Fetching Student Query failed");
        
        // if (mysqli_num_rows($qry2) > 0) {
        //   while ($array2 = mysqli_fetch_assoc($qry2)) {
        //     $sname = $array2['stud_name'];
        //     $srollno = $array2['rollno'];
        //     $batch_id1 = $array2['batch_id'];
        
        //     // Assuming you have a form where the user inputs the attendance dynamically
        //     // and it's stored in a variable $sattend.
        //     $sattend = $_POST['attendance']; // Adjust this according to your form setup.
        
        //     // Now, you can insert the new records with user-provided attendance values.
        //     $insert_sql = "INSERT INTO students (stud_name, rollno, attendance, batch_id) VALUES ('$sname','$srollno','$sattend','$batch_id1')";
        //     $insert_qry = mysqli_query($con, $insert_sql);
        //     if ($insert_qry) {
        //       echo "Record for $sname with attendance $sattend inserted successfully.<br>";
        //     } else {
        //       echo "Failed to insert record for $sname.<br>";
        //     }
        //   }
        // } else {
        //   echo "No records found for batch ID: $batch_id<br>";
        // }
        


        //   if (isset($_POST['save'])) {
        

        //     echo $sql3 = "INSERT INTO students (stud_name, rollno, attendance, remark) VALUES('$sname','$srollno','$sattend','$sremark')";
        
        //     $qry3 = mysqli_query($con, $sql3);
        //     if ($qry3) {
        //       echo "All set";
        //     } else {
        //       echo "try again";
        //     }
        
        //   }
        // }
        


        ?>

      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h2 class="fltr_heading mb-4">Filter</h2>
            <span class="shw mt-5">Show</span>
            <div class="mt-2">
              <a href="" class="active btn shw_btn">All</a>
              <a href="" class="active btn shw_btn">Active</a>
              <a href="" class="active btn shw_btn">Archived</a>
            </div>
            <hr />
            <span class="shw mt-2">By Status</span>
            <div class="mt-2">
              <a href="" class="active btn shw_btn">All</a>
              <a href="" class="active btn shw_btn">Due</a>
              <a href="" class="active btn shw_btn">Marked</a>
              <a href="" class="active btn shw_btn">Cancelled</a>
            </div>
            <hr />
            <span class="shw mt-2">By Date :</span>
            <form action="" class="mt-2 mb-3">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <input type="date" class="form-control dat_inp mt-2" value="22 May, 2024" />
                  </div>
                  <div class="col-lg-6">
                    <input type="date" class="form-control dat_inp mt-2" value="22 May, 2024" />
                  </div>
                </div>
              </div>
            </form>
            <div class="mt-2">
              <span class="shw">By Standard:</span>
              <select name="" id="" class="form-select mt-2 slct" required>
                <option selected disabled class="sls text-danger fw-semibold">
                  Select a Standard
                </option>
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
                <option selected disabled class="sls text-danger fw-semibold">
                  Select a Faculty
                </option>
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
                <option selected disabled class="sls text-danger fw-semibold">
                  Select an Academic year
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
                <option selected disabled class="sls text-danger fw-semibold">
                  Select a Batch
                </option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="js/main.js"></script>
<script>
  // $(document).ready(function () {
  //   $("#save").on("click", function () {
  //     let stud_name = $("#stud_name").val();
  //     let rollno = $("#rollno").val();
  //     let check = $("#check").val();
  //     let remark = $("#remark").val();

  //     let data = {
  //       stud_name: stud_name,
  //       rollno: rollno,
  //       attendance: check,
  //       remark: remark,
  //       submit: true,
  //     };
  //     $.ajax({
  //       type: "POST",
  //       url: "save_stud.php",
  //       data: data,

  //     });
  //   })
  // });
</script>
<?php
include "includes/footer.php";
?>