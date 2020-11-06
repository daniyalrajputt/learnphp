<?php
session_start();
require_once "partials/dbconn.php";
auth();
require_once('partials/header.php');
require_once('partials/top_nav.php');
?>
    <div id="layoutSidenav">
    <?php require_once('partials/sidebar.php'); ?>
    <div id="layoutSidenav_content">
    <main>
    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Employee</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-row">
                                                <!-- <div class="col-md-12">
                                                    <?= $msg ? $msg : '' ?>
                                                </div> -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="employeeName">Name</label>
                                                        <input name="emp_name" class="form-control py-4" required id="employeeName" type="text" placeholder="Enter Name" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="position">Position</label>
                                                        <input name="emp_position" class="form-control py-4" required id="position" type="text" placeholder="Enter Position" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="empEmailAddress">Email</label>
                                                <input name="emp_email" class="form-control py-4" required id="empEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter email address" />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="emp_age">Age</label>
                                                        <input name="emp_age" class="form-control py-4" required id="emp_age" type="number" placeholder="Enter Age" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="startdate">Start Date</label>
                                                        <input name="s_date" class="form-control py-4" required id="startdate" type="date" placeholder="Start date" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="salary">Start Date</label>
                                                        <input name="emp_salary" class="form-control py-4" required id="salary" type="number" placeholder="Enter Salary" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><button type="submit" class="btn btn-primary btn-block">Add Employee</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </main>
<?php require_once("partials/footer.php"); ?>