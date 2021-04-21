<?php

include('conndb.php');



$name = $_POST['uname'];
$email = $_POST['uemail'];


$query = "INSERT INTO user_table(user_name, user_mail) VALUES('$name' , '$email')";


if($db->exec($query)){

    header("Location:index.php");

}

else{

    echo "Error in query...";


}


?>