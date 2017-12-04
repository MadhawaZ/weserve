<?php
/**
 * Created by IntelliJ IDEA.
 * User: wathsala
 * Date: 12/1/2017
 * Time: 7:40 AM
 */

require_once $_SERVER['DOCUMENT_ROOT'] . "/weserve/repository/services_repo.php";


$mainServices = load_main_services();
return $mainServices;
