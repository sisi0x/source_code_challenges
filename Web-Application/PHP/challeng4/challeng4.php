
// Still under development

// see if user is authenticated, if not then redirect to login page
if($_SESSION['id_level'] != 1){
    
    $_SESSION['danger'] = " You not have access to visit that page";
    header("Location: ../login/login.php");
    
}
// only for users with level 1 (admins)
//           prevent SQL injection
    <?php
//              #source_code_challenge 
//              **** By:Sisi0x ***** 

session_start();
ini_set("display_errors", 0);
include "../include/connection.php";
$id = mysqli_real_escape_string($conn, $_GET['id']);
$data = mysqli_query($conn, "SELECT * FROM item WHERE id = $id");
$result = mysqli_fetch_array($data);

 if(isset($result['id'])){
    http_response_code(404);
}
item/viewltem.php

?>

    