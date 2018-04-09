<?php
require 'dbConnect.php';
session_start();

$cat = $_POST['Categories'];

$query="DELETE FROM category WHERE categoryName = '$cat'";

if(mysqli_query($mysqli, $query)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($mysqli);
}

	header("location: ../PHP/CreateCategory.php");
}
?>