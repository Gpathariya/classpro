<?php
include "includes/header.php";
include "includes/navbar.php";
?>

<body class="edit_body">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-9 form_col">
                <form action="" method="post" class="edit_form px-4 py-5">
                    <h3>Login Details</h3>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-5">
                        <label for="currentpassword" class="form-label">Current Password</label>
                        <input type="Password" class="form-control" id="currentpassword">
                    </div>
                    <h4>New Password (Only if need to change password)</h4>
                    <div class="mb-3">
                        <label for="newpass" class="form-label">New Password</label>
                        <input type="Password" class="form-control" id="newpass">
                    </div>
                    <div class="mb-3">
                        <label for="renewpass" class="form-label">Re-Type New Password</label>
                        <input type="Password" class="form-control" id="renewpass">
                    </div>
                    <input type="button" class="btn edit_save_btn" value="Save">
                </form>
            </div>
            <div class="col-lg-3">
                <div class="card edit_card">
                    <div class="card-body p-4">
                        <p class="card-title">Password</p>
                        <p class="card-text">
                            Be tricky! Your password should be at least 6 characters and not a dictionary word or common
                            name.
                            <br><br>
                            Please use a password that you don't use anywhere else and change your password on occasion.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<?php
include "includes/footer.php";
?>