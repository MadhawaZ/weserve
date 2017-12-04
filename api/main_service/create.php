<?php
/**
 * Created by IntelliJ IDEA.
 * User: wathsala
 * Date: 12/1/2017
 * Time: 7:38 AM
 */
require_once $_SERVER['DOCUMENT_ROOT'] . "/weserve/repository/services_repo.php";

$serviceName = $_POST['serviceName'];
$description = $_POST['description'];

if ($serviceName != null && $description != null) {
    save_main_service_repo($serviceName,$description);
    return 'true';
} else {
    return 'false';
}
