<?php
if (isset($_POST["username"])) { 
    $username = trim($_POST["username"]); 

    if (empty($username)) {       
        echo "Enter username";  
    } elseif (strlen($username) < 3) {    // Fixed missing number in condition
        echo "Username is too short"; 
    } else { 
        echo "Valid username"; 
    } 
}
?>
