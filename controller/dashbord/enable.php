<?php
include("../../server/connection.php");
if(isset($_GET['id'])){


$id = $_GET['id'];

if(!$id){

    echo "<script>
    alert('empty!')
    location.href = 'index.php' 
    
    </script>";
    exit;
}
$sql = "UPDATE users SET user_status = 'active' WHERE id = $id";
$statement = mysqli_query($connection, $sql);

if($statement){
    echo "<script>
    alert('enabled successfully!')
    location.href = 'index.php' 
    
    </script>";
    exit;
}


}

