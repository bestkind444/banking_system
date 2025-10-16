<?php


// disable

include "../../server/connection.php";

if (isset($_GET['user_id'])) {

    $user_id = $_GET['user_id'];

    if (empty( $user_id )) {
          echo "<script>alert('empty id'); location.href = './index.php'</script>";
        exit;
       
    }


    $sql = "UPDATE users SET user_status = 'inactive' WHERE id =  $user_id ";
    $statement = mysqli_query($connection, $sql);

    if ($statement) {
        echo "<script>alert('user disabled successfully'); location.href = './index.php'</script>";
        exit;
       
    }
    // http://localhost/banking_system/controller/dashbord/method.php?user_id=2

    
    
}





// enable



include "../../server/connection.php";

if (isset($_GET['user_id'])) {

    $user_id = $_GET['user_id'];

    if (empty( $user_id )) {
          echo "<script>alert('empty id'); location.href = './index.php'</script>";
        exit;
       
    }


    $sql = "UPDATE users SET user_status = 'active' WHERE id =  $user_id ";
    $statement = mysqli_query($connection, $sql);

    if ($statement) {
        echo "<script>alert('user enabled successfully'); location.href = './index.php'</script>";
        exit;
       
    }
    //http://localhost/banking_system/controller/dashbord/method.php?user_id=2

    

    
    
}