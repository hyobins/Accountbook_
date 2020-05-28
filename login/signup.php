<?php
$connect = mysqli_connect('localhost', 'root', '', 'accountbook');//DB연결

$id=$_POST['id'];
$pw=$_POST['pw'];
$pwc=$_POST['pwc'];
$name=$_POST['name'];

//Password Check
if($pw!=$pwc){
  echo "Password is different!";
  echo "<a href=signup.html> Back to Signup Page</a>";
}

//ID duplicate check
$check = "SELECT * FROM users WHERE ID='$id'";
$result = $connect->query($check);
if(mysqli_num_rows($result)==1){
  echo "Duplicate ID";
  echo "<a href = signup.html> Back to Signup Page</a>";
  exit();
}

$query = "INSERT INTO users(ID, PW, Name) VALUES ('$id','$pw','$name')";
$signup = $connect->query($query);
if($signup){
  //echo "Success";
  //echo "<a href = login.html> Do you want to Login?</a>";
  header('Location: ./signupSuccess.php');
}
//mysqli_close($connect);
?>
