<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost","root","","pets_db");
$sql = "DELETE FROM `pdfs` WHERE `id`='$id'";
$result = mysqli_query($con, $sql);
if($result)
{
    header("location: uforms.php");
}

?>