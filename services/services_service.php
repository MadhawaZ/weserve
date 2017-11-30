<?php
/**
 * Created by IntelliJ IDEA.
 * User: wathsala_w
 * Date: 11/28/2017
 * Time: 6:15 AM
 */

require $_SERVER['DOCUMENT_ROOT']."/weserve/repository/services_repo.php";

function get_main_services(){
    $rows = load_main_services();
    return $rows;
}

function get_sub_services($id){
    $rows = load_sub_services($id);
    return $rows;
}

function get_sub_services_with_providers($id){
    $rows = sub_services_with_providers($id);
    return $rows;
}

function save_main_service(){
    $serviceName = $_POST["serviceName"];
    $desc = $_POST["description"];
    save_main_service_repo($serviceName,$desc);
}

