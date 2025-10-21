<?php

include("../../server/connection.php");

if(isset($_GET['decline_id'])){
$id2 = (int) $_GET['decline_id'];

if(!$id2){
echo "<script>
alert('empty!')
location.href = 'index.php'
</script>";
exit;

}

$sql = "UPDATE loan SET statue = 'declined' WHERE id = $id2";
$statement = mysqli_query($connection, $sql);

if($statement){

echo "<script>
alert('Declined')
location.href = 'index.php'
</script>";
exit;



}

}

