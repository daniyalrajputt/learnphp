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
        <div class="container-fluid">
            <h1 class="mt-4">Users</h1>
            <div class="card mb-4">
                <div class="card-body">
                    form
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-users mr-1"></i>
                    Users List
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = mysqli_query($conn,"SELECT * FROM users WHERE status=1");
                            if(mysqli_num_rows($result)>0){
                                $i=1;
                                while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <td><?=$row['f_name']?></td>
                                        <td><?=$row['l_name']?></td>
                                        <td><?=$row['email']?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php require_once("partials/footer.php"); ?>