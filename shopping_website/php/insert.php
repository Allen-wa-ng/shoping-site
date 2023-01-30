<?php include './main.php';

$guid = $_POST["guid"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$name = $_POST["name"];
$date = date("Y m d H:i");

$conn=open_db();

if ($conn->connect_error) {
    echo json_encode(["status_code"=>"400"]);
}

$sql = "INSERT INTO `users`(`guid`, `email`, `phone`, `address`, `name`, `time`) 
VALUES ('.$guid.','.$email.','.$phone.','.$address.','.$name.','.$date.')";

if (mysqli_query($conn, $sql)) {
  echo json_encode(["status_code"=>"200"]);
} else {
  echo json_encode(["status_code"=>"400"]);
}


close_db($conn);


?>