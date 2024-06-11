<?php

include "../config/db.php";
include "includes/header.php";
include "includes/navbar.php";
?>

<body class="branch_body">
    <div class="container mt-5">
        <?php
        $sql = "SELECT * FROM branch";
        $qry = mysqli_query($con, $sql) or die("query failed branch");
        $row = mysqli_num_rows($qry);
        if ($row > 0) {
            while ($arr = mysqli_fetch_assoc($qry)) {

                ?>
                <div class="row mt-2">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a class="card-text" href="batch.php?branch_id=<?php echo $arr['branch_id']; ?>">IICS
                                    <?php echo $arr['branch_name'] ?></a>
                                <p class="card-title crd_tl">
                                    <?php echo $arr['branch_add'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

            }
        }
        ?>
    </div>
    <!--  -->
    <!-- <div class="container">
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a class="card-text"> IICS Pitampura</a>
                        <p class="card-title crd_tl">
                            1st Floor, FD-3, Pitampura, Delhi, 110034
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</body>
<?php
include "includes/footer.php";
?>