<?php

include("../../server/connection.php");

if(isset($_GET['approve_id'])){
$id2 = (int) $_GET['approve_id'];

if(!$id2){
echo "<script>
alert('empty!')
location.href = 'index.php'
</script>";
exit;

}
$query = "SELECT * FROM loan  WHERE id = $id2";
$stmt = mysqli_query($connection, $query);
$user_info = mysqli_fetch_assoc($stmt);


$amount =  $user_info['loan_amount'];
$user_id =  $user_info['user_id'];

$sql = "UPDATE loan SET statue = 'approved' WHERE id = $id2";
$statement = mysqli_query($connection, $sql);

$query2 = "UPDATE users SET balance = balance + $amount WHERE id = $user_id ";
$stmt2 = mysqli_query($connection, $query2);


if($statement){

echo "<script>
alert('Approved Successful')
location.href = 'index.php'
</script>";
exit;



}

}