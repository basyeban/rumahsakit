<?php 

$db_host    ="localhost";
$db_name    ="online_clinic_profile";
$db_user    ="root";
$db_pass    ="";

$db_con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(!$db_con){
    echo "Database Connection Successfully";
}else{
    echo "Database Connection Failed";
}

?>