<html>
<head>
    <title>
        WeServe - The Service Directory For Sri Lanka
    </title>
    <link href="lib/css/bootstrap.min.css" rel="stylesheet"></link>
    <link href="lib/css/font-awesome.min.css" rel="stylesheet"></link>
    <link href="lib/css/sb-admin.min.css" rel="stylesheet"></link>
</head>
<body>
<?php
if (isset($_SESSION['login'])) {
    header("location:login.php");
    die;
}
?>
<script src="lib/js/jquery.min.js"></script>
<script src="lib/js/bootstrap.min.js"></script>
<script src="lib/js/sb-admin.min.js"></script>
</body>
</html>