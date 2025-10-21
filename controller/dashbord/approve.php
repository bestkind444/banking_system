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

$sql = "UPDATE loan SET statue = 'approved' WHERE id = $id2";
$statement = mysqli_query($connection, $sql);

if($statement){

echo "<script>
alert('Approved Successful')
location.href = 'index.php'
</script>";
exit;



}

}