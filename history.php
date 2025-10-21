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

// if (isset($_GET['user_id'])) {

//     $user_id = $_GET['user_id'];

//     if (empty( $user_id )) {
//           echo "<script>alert('empty id'); location.href = './index.php'</script>";
//         exit;
       
//     }


//     $sql = "UPDATE users SET user_status = 'active' WHERE id =  $user_id ";
//     $statement = mysqli_query($connection, $sql);

//     if ($statement) {
//         echo "<script>alert('user enabled successfully'); location.href = './index.php'</script>";
//         exit;
       
//     }
//     //http://localhost/banking_system/controller/dashbord/method.php?user_id=2

    

    
    
// }


         <tr>
                    <td><?= $count ?></td>
                    <td><?= $loan['full_name']?></td>
                    <td><?= $loan['fullName']?></td>
                    <td><?= $loan['email']?></td>
                    <td><?= $loan['phone_number']?></td>
                    <td><?= $loan['Date_Of_Birth']?> </td>
                    <td><?= $loan['gender']?></td>
                    <td><?= $loan['Marital_Status']?></td>
                    <td><?= $loan['statue']?></td>
                    <td>
                        <a style="text-decoration: none; padding: 4px 7px; color: white; background-color: green;" href="">Approve</a>
                        <a style="text-decoration: none; padding: 4px 7px; color: white; background-color: red;"  href="">Decline</a>
                    </td>
                </tr>
