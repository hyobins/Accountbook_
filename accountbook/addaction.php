<?php
$connect = mysqli_connect('localhost', 'root', '', 'accountbook');//DB연결

$date=$_POST['date'];
$category=$_POST['category'];
$content=$_POST['content'];
$amount=$_POST['amount'];

$query = "INSERT INTO accountbook(Date, Category, Content, Amount) VALUES ('$date','$category','$content',$amount)";
$add = $connect->query($query);
if($add){
  header('Location: ./main.php');
}
else{
  echo "fail";
}

?>
