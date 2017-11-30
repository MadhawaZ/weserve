<?php include "../common/header.php";
require $_SERVER['DOCUMENT_ROOT'] . "/weserve/services/user_service.php";
?>
    <div class="content-wrapper">
        <div class="container-fluid">

            <h1>Add Main Service</h1>
            <hr>
            <form action="<?php save_main_service()?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Service Category Name</label>
                    <input class="form-control" id="exampleInputCategory" type="text" placeholder="Catogery">
                </div>
                <div class="form-group">
                    <label for="exampleInputDesc">Description</label>
                    <input class="form-control" id="exampleInputDesc" type="text" placeholder="Description">
                </div>
        </div>
        <button class="btn btn-primary pull-right m-md-4" type="submit">Add</button>
        </form>
        <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
        <div style="height: 70%;"></div>
    </div>

<?php include "../common/footer.php"; ?>