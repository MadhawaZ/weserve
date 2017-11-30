<?php
/**
 * Created by IntelliJ IDEA.
 * User: madha
 * Date: 11/30/2017
 * Time: 5:40 AM
 */

require $_SERVER['DOCUMENT_ROOT']."/weserve/repository/user_repo.php";

function get_customer_count(){
    $row = customer_count();
    $counts = $row -> fetch_assoc();
    return $counts['no_of_customers'];
}

function get_provider_count(){
    $row = service_provider_count();
    $counts = $row -> fetch_assoc();
    return $counts['no_of_providers'];
}