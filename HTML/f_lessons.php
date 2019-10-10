<?php
$data = $_POST;
$pn1 = $data['pn1'];
if(	isset($data['save']) )
{
$servername = "localhost";
$database = "lessons";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
$sql = mysqli_query($conn, "DELETE FROM yroki");
$sql = mysqli_query($conn, "INSERT INTO yroki (pn1, pn2, pn3, pn4, pn5, pn6, vt1, vt2, vt3, vt4, vt5, vt6, sr1, sr2, sr3, sr4, sr5, sr6, 4t1, 4t2, 4t3, 4t4, 4t5, 4t6, pt1, pt2, pt3, pt4, pt5, pt6, sb1, sb2, sb3, sb4, sb5, sb6) VALUES ('{$_POST['pn1']}', '{$_POST['pn2']}', '{$_POST['pn3']}', '{$_POST['pn4']}', '{$_POST['pn5']}', '{$_POST['pn6']}', '{$_POST['vt1']}', '{$_POST['vt2']}', '{$_POST['vt3']}', '{$_POST['vt4']}', '{$_POST['vt5']}', '{$_POST['vt6']}', '{$_POST['sr1']}', '{$_POST['sr2']}', '{$_POST['sr3']}', '{$_POST['sr4']}', '{$_POST['sr5']}', '{$_POST['sr6']}', '{$_POST['4t1']}', '{$_POST['4t2']}', '{$_POST['4t3']}', '{$_POST['4t4']}', '{$_POST['4t5']}', '{$_POST['4t6']}', '{$_POST['pt1']}', '{$_POST['pt2']}', '{$_POST['pt3']}', '{$_POST['pt4']}', '{$_POST['pt5']}', '{$_POST['pt6']}', '{$_POST['sb1']}', '{$_POST['sb2']}', '{$_POST['sb3']}', '{$_POST['sb4']}', '{$_POST['sb5']}', '{$_POST['sb6']}')");
$sql = mysqli_query($conn, "DELETE FROM homework");
$sql = mysqli_query($conn, "INSERT INTO homework (pn1, pn2, pn3, pn4, pn5, pn6, vt1, vt2, vt3, vt4, vt5, vt6, sr1, sr2, sr3, sr4, sr5, sr6, 4t1, 4t2, 4t3, 4t4, 4t5, 4t6, pt1, pt2, pt3, pt4, pt5, pt6, sb1, sb2, sb3, sb4, sb5, sb6) VALUES ('{$_POST['pn1d']}', '{$_POST['pn2d']}', '{$_POST['pn3d']}', '{$_POST['pn4d']}', '{$_POST['pn5d']}', '{$_POST['pn6d']}', '{$_POST['vt1d']}', '{$_POST['vt2d']}', '{$_POST['vt3d']}', '{$_POST['vt4d']}', '{$_POST['vt5d']}', '{$_POST['vt6d']}', '{$_POST['sr1d']}', '{$_POST['sr2d']}', '{$_POST['sr3d']}', '{$_POST['sr4d']}', '{$_POST['sr5d']}', '{$_POST['sr6d']}', '{$_POST['4t1d']}', '{$_POST['4t2d']}', '{$_POST['4t3d']}', '{$_POST['4t4d']}', '{$_POST['4t5d']}', '{$_POST['4t6d']}', '{$_POST['pt1d']}', '{$_POST['pt2d']}', '{$_POST['pt3d']}', '{$_POST['pt4d']}', '{$_POST['pt5d']}', '{$_POST['pt6d']}', '{$_POST['sb1d']}', '{$_POST['sb2d']}', '{$_POST['sb3d']}', '{$_POST['sb4d']}', '{$_POST['sb5d']}', '{$_POST['sb6d']}')");
mysqli_close($conn);
echo '
<script type="text/javascript"> 

location.replace("/dz.php"); 

</script>';
}		//echo '<div style="color: red; position: absolute; background: none; color: white; font-weight: bold;">Вуаля!</div>';
$servername = "localhost";
$database = "lessons";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
$sql = mysqli_query($conn, "SELECT * FROM `yroki`");
$arr = mysqli_fetch_assoc($sql);
$sqld = mysqli_query($conn, "SELECT * FROM `homework`");
$arrd = mysqli_fetch_assoc($sqld);
#print_r($arr);
mysqli_close($conn);
?>