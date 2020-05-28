<?php
session_start();
$id=$_POST['id'];
$pw=$_POST['pw'];

$connect = mysqli_connect('localhost', 'root', '', 'accountbook');//DB연결

//Email 검사
$query = "SELECT * FROM users WHERE ID='$id'";
$result = $connect->query($query);

//Email이 있다면 PW 검사
if(mysqli_num_rows($result)==1){
  $row = mysqli_fetch_assoc($result);

  //PW가 일치하면 세션 생성
  if($row['PW']==$pw){
    $_SESSION['userid']=$id;//로그인 성공시 세션변수 생성
    if(isset($_SESSION['userid']))//세션변수가 참일 때
    {
      header('Location: ./main.php');
    }
    else{
      echo "session fail";
    }
  }
  else{
    echo "Wrong id! or pw";
    header('Location: ./login.html');
  }
}
else{
  echo "Wrong id! or pw";
  header('Location: ./login.html');
}

?>
