<?php

$conn=mysqli_connect ("localhost", "root", "", "captcha");
if(!$conn){
    die('<p>sorry connection lost with the server</p>');
}
$sql = "SELECT * FROM captcha order by rand() limit 1";
$ret=mysqli_query($conn, $sql);

if(mysqli_num_rows($ret) > 0){
while($row = mysqli_fetch_assoc($ret)){
$i=$row['i'];
$one=$row['1'];
$two=$row['2'];
$three=$row['3'];
$four=$row['4'];
$five=$row['5'];
$six=$row['6'];
$seven=$row['7'];
$eight=$row['8'];
$nine=$row['9'];
$a=$row['ans'];
$hint=$row['hint'];

$folder=$row['folder'];
session_start();
$_SESSION['ans']=$a;

}
}