<?php
$data = $_POST['data'];


//database connection

$conn = new mysqli('localhost','root','','task2-sm');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
     	 	 	 	 
    $stmt = $conn->prepare("insert into directions(data) values(?)");
    $stmt->bind_param("s", $data);
    $execval = $stmt->execute();
    echo $execval;
    $stmt->close();
    $conn->close();
}
?>