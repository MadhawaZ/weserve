<script src="../../scripts/services.js"></script>

<?php include "../common/header.php";
require $_SERVER['DOCUMENT_ROOT'] . "/weserve/services/user_service.php";
?>
    <div class="content-wrapper">
        <div class="container-fluid">

            <h1>Add Main Service</h1>
            <hr>
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Service Name</label>
                    <input class="form-control" id="mainServiceName" type="text" placeholder="Catogery"
                           name="serviceName">
                </div>
                <div class="form-group">
                    <label for="exampleInputDesc">Description</label>
                    <input class="form-control" id="mainServiceDesc" type="text" placeholder="Description"
                           name="description">
                </div>
                <button onclick="saveMainService()" class="btn btn-primary pull-right m-md-4" type="button">Add</button>
            </form>
            <hr>
            <br>

            <h1>Add Sub Service</h1>
            <form method="post">
                <div class="form-group">
                    <label>Main Service Category</label>
                    <select class="form-control" id="mainServiceSelection" type="text" name="mainServiceSelection"></select>
                </div>
                <div class="form-group">
                    <label for="subServiceName">Sub Service Name</label>
                    <input class="form-control" id="subServiceName" type="text" placeholder="Sub Service Name"
                           name="subServiceName">
                </div>
                <div class="form-group">
                    <label for="subDescription">Description</label>
                    <input class="form-control" id="subDescription" type="text" placeholder="Description"
                           name="subDescription">
                </div>
                <button onclick="saveMainService()" class="btn btn-primary pull-right m-md-4" type="button">Add</button>
            </form>
        </div>
        <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
        <div style="height: 70%;"></div>
    </div>

<?php include "../common/footer.php"; ?>