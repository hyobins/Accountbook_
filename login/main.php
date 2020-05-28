<?php
session_start(); //이 함수는 접속에 대해 이미 존재하고 있는 세션 ID가 있는지 확인하며 없으면 새로 만들고 있으면 기존의 세션 변수들을 재로딩 한다. 세션을 사용하는 스크립트라면 호출이 필요하며 안하면 세션을 쓸수가 없다.

if(!isset($_SESSION['userid'])) //If there is no seesion
{
  header('Location: ./login.html');
}

echo "Login Success";
header('Location: ../accountbook/main.php');
//echo "<a href=logout.php> Logout </a>";

?>
