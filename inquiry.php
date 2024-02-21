<?php
$server="localhost";
$username="root";
$password="";
$database="admindb";

//create connection
$conn = mysqli_connect($server,$username,$password,$database,3308);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";


// create a variable to store data
@$name =$_POST['name'];
@$age =$_POST['age'];
@$email =$_POST['email'];
@$phone =$_POST['phone'];
@$address =$_POST['address'];
@$country =$_POST['country'];
@$city =$_POST['city'];
@$destination = $_POST['destination'];
@$budget =$_POST['budget'];
@$travellers =$_POST['travellers'];
@$sdate =$_POST['sdate'];
@$edate =$_POST['edate'];
@$kind =$_POST['kind'];

$sql="insert into inquirytra(name,age,email,phone,address,country,city,destination,budget,travellers,sdate,edate,kind) values('$name','$age','$email','$phone','$address','$country','$city','$destination','$budget','$travellers','$sdate','$edate','$kind')";

if(mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);

?>