<?php

include('conndb.php');

$uid = $_POST['id'];

$uname = $_POST['name'];

$uemail = $_POST['email'];


$query = "UPDATE user_table SET user_name='$uname' , user_mail='$uemail' WHERE user_id='$uid'";


if($db->exec($query)){

    header("Location:index.php");

}

else{


    echo "Error in query ...";
}
?>