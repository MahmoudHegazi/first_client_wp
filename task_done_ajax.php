


<?php
/* Template Name: Twenty Seventeen */



$message = '';

function getPrices(){
    $post_id = $_REQUEST["post_id"];
    $loged_id = $_REQUEST["loged_user"];

$the_time = time();


	

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatebase";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO wp_postmeta (post_id, meta_key, meta_value)
VALUES ($post_id, '_post_view', $loged_id)";
if ($conn->query($sql) === TRUE) {
  $message = "New";
} else {
  $message =  "Error";
}


$sql = "INSERT INTO wp_postmeta (post_id, meta_key, meta_value)
VALUES ($post_id, '_view_date', $the_time)";
if ($conn->query($sql) === TRUE) {
  $message = "New";
} else {
  $message =  "Error";
}




//$result = $conn->query($sql);


$conn->close();


     
    //$results[] = get_post_meta($the_id, "price_one", true);
    $results = $get_time;
    die($results);
}
getPrices();

?>
