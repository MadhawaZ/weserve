<?php
/**
 * Created by IntelliJ IDEA.
 * User: wathsala_w
 * Date: 11/28/2017
 * Time: 5:48 AM
 */

if (!function_exists('db_connect')) {
    require $_SERVER['DOCUMENT_ROOT']."/weserve/repository/dbcon.php";
}

function load_main_services()
{
    $dbCon = db_connect();
    $services = mysqli_query($dbCon, "SELECT * FROM main_service");
    mysqli_close($dbCon);
    return $services;
}

function load_sub_services($mainServiceID)
{
    $dbCon = db_connect();
    $services = mysqli_query($dbCon, "SELECT * FROM sub_service WHERE main_service_id = $mainServiceID");
    mysqli_close($dbCon);
    return $services;
}

function sub_services_with_providers($mainServiceID)
{
    $dbCon = db_connect();
    $services = mysqli_query($dbCon, "SELECT ss.id,ss.name,COUNT(sp.id) as no_of_providers FROM sub_service ss 
    LEFT JOIN service_provider sp ON ss.id = sp.sub_service_id WHERE ss.main_service_id = $mainServiceID GROUP BY ss.id");
    mysqli_close($dbCon);
    return $services;
}


