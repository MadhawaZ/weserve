<?php
require $_SERVER['DOCUMENT_ROOT'] . "/weserve/services/user_service.php";
require $_SERVER['DOCUMENT_ROOT'] . "/weserve/services/services_service.php";
if (isset($_SESSION['login'])) {
    header("location:../../login.php");
    die;
} ?>


<?php include "../common/header.php"; ?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->

        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xs-5 col-sm-5 col-md-5 shortcut temp text-center">
                <div class="icon"><i class="fa fa-users fa-2x fa-fw"></i></div>
                <div class="stats_info">
                    <span class="text-muted">Customers</span>
                    <h4>
                        Registered:
                        <?php
                        echo get_customer_count();
                        ?>
                        </br>
                        Online: </h4>
                </div>
            </div>

            <div class="col-xs-5 col-sm-5 col-md-5 shortcut temp text-center">
                <div class="icon"><i class="fa fa-user fa-2x fa-fw"></i></div>
                <div class="stats_info">
                    <span class="text-muted">Service Providers</span>
                    <h4>Registered:
                        <?php
                        echo get_provider_count();
                        ?>
                        </br>
                        Online: </h4>
                </div>
            </div>


        </div>
        <!-- Area Chart Example-->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                    <?php
                    $rows = get_main_services();
                    while ($row = mysqli_fetch_array($rows)) {
                        echo "<tr>";
                        echo "<td><b><h3>" . $row['name'] . "</h3></b></td>";
                        echo " <td><b>View List</b></td>";
                        echo "<td><b>Number of Reg. Employee</b></td>";
                        echo "</tr>";
                        $subRows = get_sub_services_with_providers($row['id']);
                        while ($subRow = mysqli_fetch_array($subRows)) {
                            echo "<tr>";
                            echo "<td>".$subRow['name']."</td>";
                            echo "<td><a href='#'>view</a></td>";
                            echo "<td>".$subRow['no_of_providers']."</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-4">
        </div>
    </div>

</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->

<?php include "../common/footer.php"; ?>