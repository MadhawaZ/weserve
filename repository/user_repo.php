<?php
/**
 * Created by IntelliJ IDEA.
 * User: wathsala_w
 * Date: 11/27/2017
 * Time: 4:51 PM
 */

if (!function_exists('db_connect')) {
    require $_SERVER['DOCUMENT_ROOT']."/weserve/repository/dbcon.php";
}

function login($username,$password){
    $dbCon = db_connect();
    // need to check hashed pass here. this is only for testing
    $user = mysqli_query($dbCon,"SELECT * FROM user u LEFT JOIN user_role ur ON u.role_id = ur.id
        WHERE user_name = '$username' AND pass = '$password' ");
    mysqli_close($dbCon);
    return $user;
}

function get_all_users()
{
    $dbCon = db_connect();
    $allUsers = mysqli_query($dbCon,"SELECT * FROM user");
    mysqli_close($dbCon);
    return $allUsers;
}

function service_provider_count()
{
    $dbCon = db_connect();
    $count = mysqli_query($dbCon, "SELECT COUNT(sp.id) as no_of_providers FROM service_provider sp
                                             LEFT JOIN user u ON u.id = sp.user_id
                                             WHERE u.status = 'true'
                                             GROUP BY sp.id");
    mysqli_close($dbCon);
    return $count;
}

function customer_count()
{
    $dbCon = db_connect();
    $count = mysqli_query($dbCon, "SELECT COUNT(u.id) as no_of_customers FROM user u
                                             LEFT JOIN user_role ur ON u.role_id = ur.id
                                             WHERE ur.id = 3 AND u.status = 'true'
                                             GROUP BY u.id");
    mysqli_close($dbCon);
    return $count;
}
