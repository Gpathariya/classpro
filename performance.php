<?php
include "includes/header.php";
include "includes/navbar.php";
?>

<body class="per_body">
    <div class="container">
        <div class="row mt-3">
            <div class="col text-center">
                <a href="Performance.php" class="btn list_form_btn">
                    <i class="fa-solid fa-list"></i></a>
                <a href="Performance_table.php" class="btn table_form_btn"><i class="fa-solid fa-table-cells"></i></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col mt-5">
                <h5 class="advWeb">ADVANCED WEBSITE ENGINEERING</h5>
                <table class="table tbl">
                    <thead class="mt-4">
                        <tr>
                            <th class="text-start">Subject</th>
                            <th class="text-end">Test Conducted </th>
                            <th class="text-end">Performance (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class="text-start"><a href="">JQUERY</a></td>
                            <td class="text-end">1</td>
                            <td class="text-end">50.00%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col table-responsive">
                <h5 class="soft">Software</h5>
                <table class="table tbl">
                    <thead class="mt-4">
                        <tr>
                            <th class="text-start">Subject</th>
                            <th class="text-end">Test Conducted </th>
                            <th class="text-end">Performance (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class="text-start"><a href="">IT TOOLS & NETWORK BASICS</a></td>
                            <td class="text-end">3</td>
                            <td class="text-end">20.00%</td>
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